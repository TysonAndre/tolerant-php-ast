<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node;

use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Token;

class CaseStatementNode extends Node {
    /** @var Token */
    public $caseKeyword;
    /** @var Expression */
    public $expression;
    /** @var Token */
    public $defaultLabelTerminator;
    /** @var StatementNode[] */
    public $statementList;

    const CHILD_NAMES = [
        'caseKeyword',
        'expression',
        'defaultLabelTerminator',
        'statementList'
    ];
}
