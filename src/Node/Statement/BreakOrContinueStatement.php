<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Statement;

use Phan\TolerantPhpAst\Diagnostic;
use Phan\TolerantPhpAst\DiagnosticKind;
use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Node\Expression;
use Phan\TolerantPhpAst\Node\StatementNode;
use Phan\TolerantPhpAst\Token;
use Phan\TolerantPhpAst\TokenKind;

class BreakOrContinueStatement extends StatementNode {
    /** @var Token */
    public $breakOrContinueKeyword;
    /** @var Expression|null */
    public $breakoutLevel;
    /** @var Token */
    public $semicolon;

    const CHILD_NAMES = [
        'breakOrContinueKeyword',
        'breakoutLevel',
        'semicolon'
    ];

    /**
     * @return Diagnostic|null - Callers should use DiagnosticsProvider::getDiagnostics instead
     * @internal
     * @override
     */
    public function getDiagnosticForNode() {
        if ($this->breakoutLevel === null) {
            return null;
        }

        $breakoutLevel = $this->breakoutLevel;
        while ($breakoutLevel instanceof Node\Expression\ParenthesizedExpression) {
            $breakoutLevel = $breakoutLevel->expression;
        }

        if (
            $breakoutLevel instanceof Node\NumericLiteral
            && $breakoutLevel->children->kind === TokenKind::IntegerLiteralToken
        ) {
            $literalString = $breakoutLevel->getText();
            $firstTwoChars = \substr($literalString, 0, 2);

            if ($firstTwoChars === '0b' || $firstTwoChars === '0B') {
                // @phan-suppress-next-line PhanPossiblyFalseTypeArgumentInternal this string is long enough
                if (\bindec(\substr($literalString, 2)) > 0) {
                    return null;
                }
            }
            else if (\intval($literalString, 0) > 0) {
                return null;
            }
        }

        $start = $breakoutLevel->getStartPosition();
        $end = $breakoutLevel->getEndPosition();

        return new Diagnostic(
            DiagnosticKind::Error,
            "Positive integer literal expected.",
            $start,
            $end - $start
        );
    }
}
