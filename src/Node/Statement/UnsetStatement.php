<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Statement;

use Phan\TolerantPhpAst\Node\DelimitedList;
use Phan\TolerantPhpAst\Node\Expression;
use Phan\TolerantPhpAst\Token;

class UnsetStatement extends Expression {

    /** @var Token */
    public $unsetKeyword;

    /** @var Token */
    public $openParen;

    /** @var DelimitedList\ExpressionList */
    public $expressions;

    /** @var Token */
    public $closeParen;

    /** @var Token */
    public $semicolon;

    const CHILD_NAMES = [
        'unsetKeyword',
        'openParen',
        'expressions',
        'closeParen',
        'semicolon',
    ];
}
