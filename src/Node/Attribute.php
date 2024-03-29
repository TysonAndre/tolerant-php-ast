<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node;

use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Token;

class Attribute extends Node {
    /** @var Token|Node */
    public $name;

    /** @var Token|null */
    public $openParen;

    /** @var DelimitedList\ArgumentExpressionList|null  */
    public $argumentExpressionList;

    /** @var Token|null */
    public $closeParen;

    const CHILD_NAMES = [
        'name',
        'openParen',
        'argumentExpressionList',
        'closeParen'
    ];
}
