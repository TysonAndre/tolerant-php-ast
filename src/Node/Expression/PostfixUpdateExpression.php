<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Expression;

use Phan\TolerantPhpAst\Node\Expression;
use Phan\TolerantPhpAst\Token;

class PostfixUpdateExpression extends Expression {
    /** @var Variable */
    public $operand;

    /** @var Token */
    public $incrementOrDecrementOperator;

    const CHILD_NAMES = [
        'operand',
        'incrementOrDecrementOperator'
    ];
}
