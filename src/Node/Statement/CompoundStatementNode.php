<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Statement;

use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Node\StatementNode;
use Phan\TolerantPhpAst\Token;

class CompoundStatementNode extends StatementNode {
    /** @var Token */
    public $openBrace;

    /** @var array|Node[] */
    public $statements;

    /** @var Token */
    public $closeBrace;

    const CHILD_NAMES = [
        'openBrace',
        'statements',
        'closeBrace'
    ];
}
