<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Expression;

use Phan\TolerantPhpAst\FunctionLike;
use Phan\TolerantPhpAst\Node\Expression;
use Phan\TolerantPhpAst\Node\FunctionBody;
use Phan\TolerantPhpAst\Node\FunctionHeader;
use Phan\TolerantPhpAst\Node\FunctionReturnType;
use Phan\TolerantPhpAst\Node\FunctionUseClause;
use Phan\TolerantPhpAst\Token;

class AnonymousFunctionCreationExpression extends Expression implements FunctionLike {
    /** @var Token|null */
    public $staticModifier;

    use FunctionHeader, FunctionUseClause, FunctionReturnType, FunctionBody;

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

        // FunctionUseClause
        'anonymousFunctionUseClause',

        // FunctionReturnType
        'colonToken',
        'questionToken',
        'returnTypeList',

        // FunctionBody
        'compoundStatementOrSemicolon'
    ];
}
