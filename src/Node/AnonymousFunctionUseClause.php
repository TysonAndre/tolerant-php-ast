<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node;

use Phan\TolerantPhpAst\MissingToken;
use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Node\DelimitedList\UseVariableNameList;
use Phan\TolerantPhpAst\Token;

class AnonymousFunctionUseClause extends Node {
    /** @var Token */
    public $useKeyword;

    /** @var Token */
    public $openParen;

    /** @var UseVariableNameList|MissingToken */
    public $useVariableNameList;

    /** @var Token */
    public $closeParen;

    const CHILD_NAMES = [
        'useKeyword',
        'openParen',
        'useVariableNameList',
        'closeParen'
    ];
}
