<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node;

use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Token;

class ForeachKey extends Node {
    /** @var Expression */
    public $expression;
    /** @var Token */
    public $arrow;

    const CHILD_NAMES = [
        'expression',
        'arrow'
    ];
}
