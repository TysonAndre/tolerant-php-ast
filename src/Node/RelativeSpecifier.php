<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node;

use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Token;

class RelativeSpecifier extends Node {
    /** @var Token */
    public $namespaceKeyword;

    /** @var Token */
    public $backslash;

    const CHILD_NAMES = [
        'namespaceKeyword',
        'backslash'
    ];
}
