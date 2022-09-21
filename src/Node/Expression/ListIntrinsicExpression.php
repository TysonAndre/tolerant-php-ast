<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Expression;

use Phan\TolerantPhpAst\Node\DelimitedList;
use Phan\TolerantPhpAst\Node\Expression;
use Phan\TolerantPhpAst\Token;

class ListIntrinsicExpression extends Expression {

    /** @var Token */
    public $listKeyword;

    /** @var Token */
    public $openParen;

    /** @var DelimitedList\ListExpressionList */
    public $listElements;

    /** @var Token */
    public $closeParen;

    const CHILD_NAMES = [
        'listKeyword',
        'openParen',
        'listElements',
        'closeParen'
    ];
}
