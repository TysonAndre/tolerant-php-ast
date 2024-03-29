<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node;

use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Token;

class NamespaceUseGroupClause extends Node {

    /** @var Token */
    public $functionOrConst;
    /** @var QualifiedName */
    public $namespaceName;
    /** @var  NamespaceAliasingClause */
    public $namespaceAliasingClause;

    const CHILD_NAMES = [
        'functionOrConst',
        'namespaceName',
        'namespaceAliasingClause'
    ];
}
