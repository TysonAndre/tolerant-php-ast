<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Statement;

use Phan\TolerantPhpAst\Node\DelimitedList;
use Phan\TolerantPhpAst\Node\StatementNode;
use Phan\TolerantPhpAst\Token;

class ConstDeclaration extends StatementNode {
    /** @var Token */
    public $constKeyword;

    /** @var DelimitedList\ConstElementList */
    public $constElements;

    /** @var Token */
    public $semicolon;

    const CHILD_NAMES = [
        'constKeyword',
        'constElements',
        'semicolon'
    ];
}
