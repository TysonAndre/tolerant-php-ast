<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node;

use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Token;

class SourceFileNode extends Node {
    /** @var string */
    public $fileContents;

    /** @var ?string */
    public $uri;

    /** @var Node[] */
    public $statementList;

    /** @var Token */
    public $endOfFileToken;

    const CHILD_NAMES = ['statementList', 'endOfFileToken'];
}
