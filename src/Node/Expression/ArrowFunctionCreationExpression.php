<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Expression;

use Phan\TolerantPhpAst\FunctionLike;
use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Node\Expression;
use Phan\TolerantPhpAst\Node\FunctionHeader;
use Phan\TolerantPhpAst\Node\FunctionReturnType;
use Phan\TolerantPhpAst\Token;

class ArrowFunctionCreationExpression extends Expression implements FunctionLike {
    /** @var Token|null */
    public $staticModifier;

    use FunctionHeader, FunctionReturnType;

    /** @var Token `=>` */
    public $arrowToken;

    /** @var Node|Token */
    public $resultExpression;

    const CHILD_NAMES = [
        'attributes',
        'staticModifier',

        // FunctionHeader
        'functionKeyword',
        'byRefToken',
        'name',
        'openParen',
        'parameters',
        'closeParen',

        // FunctionReturnType
        'colonToken',
        'questionToken',
        'returnTypeList',

        // body
        'arrowToken',
        'resultExpression',
    ];
}
