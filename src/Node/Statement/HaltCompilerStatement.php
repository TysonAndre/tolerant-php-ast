<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Statement;

use Phan\TolerantPhpAst\Node\DelimitedList;
use Phan\TolerantPhpAst\Node\Expression;
use Phan\TolerantPhpAst\Token;

class HaltCompilerStatement extends Expression {

    /** @var Token */
    public $haltCompilerKeyword;

    /** @var Token */
    public $openParen;

    /** @var Token */
    public $closeParen;

    /** @var Token */
    public $semicolon;

    /** @var Token */
    public $data;

    const CHILD_NAMES = [
        'haltCompilerKeyword',
        'openParen',
        'closeParen',
        'semicolon',
        'data',
    ];
}