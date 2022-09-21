<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node;

use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Token;

class ElseClauseNode extends Node {
    /** @var Token */
    public $elseKeyword;
    /** @var Token */
    public $colon;
    /** @var StatementNode|StatementNode[] */
    public $statements;

    const CHILD_NAMES = [
        'elseKeyword',
        'colon',
        'statements'
    ];
}
