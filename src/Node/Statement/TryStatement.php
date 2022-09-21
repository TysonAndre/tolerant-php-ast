<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Statement;

use Phan\TolerantPhpAst\Node\CatchClause;
use Phan\TolerantPhpAst\Node\FinallyClause;
use Phan\TolerantPhpAst\Node\StatementNode;
use Phan\TolerantPhpAst\Token;

class TryStatement extends StatementNode {
    /** @var Token */
    public $tryKeyword;
    /** @var StatementNode */
    public $compoundStatement;
    /** @var CatchClause[]|null */
    public $catchClauses;
    /** @var FinallyClause|null */
    public $finallyClause;

    const CHILD_NAMES = [
        'tryKeyword',
        'compoundStatement',
        'catchClauses',
        'finallyClause'
    ];
}
