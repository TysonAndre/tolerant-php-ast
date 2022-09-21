<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node;

use Phan\TolerantPhpAst\MissingToken;
use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Node\DelimitedList\QualifiedNameList;
use Phan\TolerantPhpAst\Token;

class ParenthesizedIntersectionType extends Node{
    /** @var Token */
    public $openParen;

    /** @var QualifiedNameList|MissingToken */
    public $children;

    /** @var Token */
    public $closeParen;

    const CHILD_NAMES = [
        'openParen',
        'children',
        'closeParen'
    ];
}
