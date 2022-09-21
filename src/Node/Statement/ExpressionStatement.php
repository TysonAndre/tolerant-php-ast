<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Statement;

use Phan\TolerantPhpAst\Node\Expression;
use Phan\TolerantPhpAst\Node\StatementNode;
use Phan\TolerantPhpAst\Token;

class ExpressionStatement extends StatementNode {
    /** @var Expression */
    public $expression;
    /** @var Token */
    public $semicolon;

    const CHILD_NAMES = [
        'expression',
        'semicolon'
    ];
}
