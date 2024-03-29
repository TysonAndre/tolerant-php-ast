<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Statement;

use Phan\TolerantPhpAst\Node\Expression;
use Phan\TolerantPhpAst\Node\ForeachKey;
use Phan\TolerantPhpAst\Node\ForeachValue;
use Phan\TolerantPhpAst\Node\StatementNode;
use Phan\TolerantPhpAst\Token;

class ForeachStatement extends StatementNode {
    /** @var Token */
    public $foreach;
    /** @var Token */
    public $openParen;
    /** @var Expression */
    public $forEachCollectionName;
    /** @var Token */
    public $asKeyword;
    /** @var ForeachKey|null */
    public $foreachKey;
    /** @var ForeachValue */
    public $foreachValue;
    /** @var Token */
    public $closeParen;
    /** @var Token|null */
    public $colon;
    /** @var StatementNode|StatementNode[] */
    public $statements;
    /** @var Token|null */
    public $endForeach;
    /** @var Token|null */
    public $endForeachSemicolon;

    const CHILD_NAMES = [
        'foreach',
        'openParen',
        'forEachCollectionName',
        'asKeyword',
        'foreachKey',
        'foreachValue',
        'closeParen',
        'colon',
        'statements',
        'endForeach',
        'endForeachSemicolon'
    ];
}
