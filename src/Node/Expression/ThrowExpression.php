<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Expression;

use Phan\TolerantPhpAst\Node\Expression;
use Phan\TolerantPhpAst\Token;

class ThrowExpression extends Expression {
    /** @var Token */
    public $throwKeyword;
    /** @var Expression */
    public $expression;

    const CHILD_NAMES = [
        'throwKeyword',
        'expression',
    ];
}
