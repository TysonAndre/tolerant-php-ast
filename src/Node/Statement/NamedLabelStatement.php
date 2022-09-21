<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Statement;

use Phan\TolerantPhpAst\Node\StatementNode;
use Phan\TolerantPhpAst\Token;

class NamedLabelStatement extends StatementNode {
    /** @var Token */
    public $name;
    /** @var Token */
    public $colon;

    const CHILD_NAMES = [
        'name',
        'colon',
    ];
}
