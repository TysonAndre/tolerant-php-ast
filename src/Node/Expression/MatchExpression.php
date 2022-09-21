<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Expression;

use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Node\DelimitedList\MatchExpressionArmList;
use Phan\TolerantPhpAst\Node\Expression;
use Phan\TolerantPhpAst\Token;

class MatchExpression extends Expression {
    /** @var Token `match` */
    public $matchToken;

    /** @var Token */
    public $openParen;

    /** @var Node|null */
    public $expression;

    /** @var Token */
    public $closeParen;

    /** @var Token */
    public $openBrace;

    /** @var MatchExpressionArmList|null */
    public $arms;

    /** @var Token */
    public $closeBrace;

    const CHILD_NAMES = [
        'matchToken',

        'openParen',
        'expression',
        'closeParen',

        'openBrace',
        'arms',
        'closeBrace',
    ];
}
