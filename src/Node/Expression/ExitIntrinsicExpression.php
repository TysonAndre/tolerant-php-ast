<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Expression;

use Phan\TolerantPhpAst\Node\Expression;
use Phan\TolerantPhpAst\Token;

class ExitIntrinsicExpression extends Expression {

    /** @var Token */
    public $exitOrDieKeyword;

    /** @var Token|null */
    public $openParen;

    /** @var Expression|null */
    public $expression;

    /** @var Token|null */
    public $closeParen;

    const CHILD_NAMES = [
        'exitOrDieKeyword',
        'openParen',
        'expression',
        'closeParen'
    ];
}
