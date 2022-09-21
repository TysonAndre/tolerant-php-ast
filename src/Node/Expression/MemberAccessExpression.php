<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Expression;

use Phan\TolerantPhpAst\Node\Expression;
use Phan\TolerantPhpAst\Token;

class MemberAccessExpression extends Expression {

    /** @var Expression */
    public $dereferencableExpression;

    /** @var Token */
    public $arrowToken;

    /** @var Token */
    public $memberName;

    const CHILD_NAMES = [
        'dereferencableExpression',
        'arrowToken',
        'memberName'
    ];
}
