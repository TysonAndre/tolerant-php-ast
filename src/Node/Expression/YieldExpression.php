<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Expression;

use Phan\TolerantPhpAst\Node\ArrayElement;
use Phan\TolerantPhpAst\Node\Expression;
use Phan\TolerantPhpAst\Token;

class YieldExpression extends Expression {
    /** @var Token */
    public $yieldOrYieldFromKeyword;

    /** @var ArrayElement|null */
    public $arrayElement;

    const CHILD_NAMES = ['yieldOrYieldFromKeyword', 'arrayElement'];
}
