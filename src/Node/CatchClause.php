<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node;

use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Node\DelimitedList\QualifiedNameList;
use Phan\TolerantPhpAst\MissingToken;
use Phan\TolerantPhpAst\Token;

class CatchClause extends Node {
    /** @var Token */
    public $catch;
    /** @var Token */
    public $openParen;
    /** @var QualifiedNameList[]|MissingToken */
    public $qualifiedNameList;
    /** @var Token|null */
    public $variableName;
    /** @var Token */
    public $closeParen;
    /** @var StatementNode */
    public $compoundStatement;

    const CHILD_NAMES = [
        'catch',
        'openParen',
        'qualifiedNameList',
        'variableName',
        'closeParen',
        'compoundStatement'
    ];
}
