<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Statement;

use Phan\TolerantPhpAst\Node\CaseStatementNode;
use Phan\TolerantPhpAst\Node\Expression;
use Phan\TolerantPhpAst\Node\StatementNode;
use Phan\TolerantPhpAst\Token;

class SwitchStatementNode extends StatementNode {
    /** @var Token */
    public $switchKeyword;
    /** @var Token */
    public $openParen;
    /** @var Expression */
    public $expression;
    /** @var Token */
    public $closeParen;
    /** @var Token|null */
    public $colon;
    /** @var Token|null */
    public $openBrace;
    /** @var CaseStatementNode[] */
    public $caseStatements;
    /** @var Token|null */
    public $closeBrace;
    /** @var Token|null */
    public $endswitch;
    /** @var Token|null */
    public $semicolon;

    const CHILD_NAMES = [
        'switchKeyword',
        'openParen',
        'expression',
        'closeParen',
        'colon',
        'openBrace',
        'caseStatements',
        'closeBrace',
        'endswitch',
        'semicolon'
    ];
}
