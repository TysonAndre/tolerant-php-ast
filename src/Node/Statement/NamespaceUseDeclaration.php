<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Statement;

use Phan\TolerantPhpAst\Diagnostic;
use Phan\TolerantPhpAst\DiagnosticKind;
use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Node\DelimitedList;
use Phan\TolerantPhpAst\Node\StatementNode;
use Phan\TolerantPhpAst\Token;

class NamespaceUseDeclaration extends StatementNode {
    /** @var Token */
    public $useKeyword;
    /** @var Token */
    public $functionOrConst;
    /** @var DelimitedList\NamespaceUseClauseList */
    public $useClauses;
    /** @var Token */
    public $semicolon;

    const CHILD_NAMES = [
        'useKeyword',
        'functionOrConst',
        'useClauses',
        'semicolon'
    ];

    /**
     * @return Diagnostic|null - Callers should use DiagnosticsProvider::getDiagnostics instead
     * @internal
     * @override
     */
    public function getDiagnosticForNode() {
        if (
            $this->useClauses != null
            && \count($this->useClauses->children) > 1
        ) {
            foreach ($this->useClauses->children as $useClause) {
                if($useClause instanceof Node\NamespaceUseClause && !is_null($useClause->openBrace)) {
                    return new Diagnostic(
                        DiagnosticKind::Error,
                        "; expected.",
                        $useClause->getEndPosition(),
                        1
                    );
                }
            }
        }
        return null;
    }
}
