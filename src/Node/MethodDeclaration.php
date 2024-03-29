<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node;

use Phan\TolerantPhpAst\Diagnostic;
use Phan\TolerantPhpAst\DiagnosticKind;
use Phan\TolerantPhpAst\DiagnosticsProvider;
use Phan\TolerantPhpAst\FunctionLike;
use Phan\TolerantPhpAst\ModifiedTypeInterface;
use Phan\TolerantPhpAst\ModifiedTypeTrait;
use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Token;
use Phan\TolerantPhpAst\TokenKind;

class MethodDeclaration extends Node implements FunctionLike, ModifiedTypeInterface {
    use FunctionHeader, FunctionReturnType, FunctionBody, ModifiedTypeTrait;

    const CHILD_NAMES = [
        'attributes',
        'modifiers',

        // FunctionHeader
        'functionKeyword',
        'byRefToken',
        'name',
        'openParen',
        'parameters',
        'closeParen',

        // FunctionReturnType
        'colonToken',
        'questionToken',
        'returnTypeList',

        // FunctionBody
        'compoundStatementOrSemicolon'
    ];

    /**
     * Returns the name of the method.
     *
     * @return string
     */
    public function getName(): string {
        return $this->name ? (string) $this->name->getText($this->getFileContents()) : '';
    }

    /**
     * @return Diagnostic|null - Callers should use DiagnosticsProvider::getDiagnostics instead
     * @internal
     * @override
     */
    public function getDiagnosticForNode() {
        foreach ($this->modifiers as $modifier) {
            if ($modifier->kind === TokenKind::VarKeyword) {
                return new Diagnostic(
                    DiagnosticKind::Error,
                    "Unexpected modifier '" . DiagnosticsProvider::getTextForTokenKind($modifier->kind) . "'",
                    $modifier->start,
                    $modifier->length
                );
            }
        }
        return null;
    }

    /**
     * Returns the signature parts as an array. Use $this::getSignatureFormatted for a user-friendly string version.
     *
     * @return array
     */
    private function getSignatureParts(): array {
        $parts = [];

        foreach ($this->getChildNodesAndTokens() as $i => $child) {
            if ($i === "compoundStatementOrSemicolon") {
                return $parts;
            }

            $parts[] = $child instanceof Token
                ? $child->getText($this->getFileContents())
                : $child->getText();
        };

        return $parts;
    }

    /**
     * Returns the signature of the method as a formatted string.
     *
     * @return string
     */
    public function getSignatureFormatted(): string {
        $signature = implode(" ", $this->getSignatureParts());
        return $signature;
    }

    /**
     * Returns the description part of the doc string.
     *
     * @return string
     */
    public function getDescriptionFormatted(): string {
        $comment = trim($this->getLeadingCommentAndWhitespaceText(), "\r\n");
        $commentParts = explode("\n", $comment);

        $description = [];

        foreach ($commentParts as $part) {
            $part = trim($part, "*\r\t /");

            if (strlen($part) <= 0) {
                continue;
            }

            if ($part[0] === "@") {
                break;
            }

            $description[] = $part;
        }

        $descriptionFormatted = implode(" ", $description);
        return $descriptionFormatted;
    }
}
