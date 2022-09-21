<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Statement;

use Phan\TolerantPhpAst\Node\QualifiedName;
use Phan\TolerantPhpAst\Node\StatementNode;
use Phan\TolerantPhpAst\Token;
use Phan\TolerantPhpAst\Node\SourceFileNode;

/**
 * @property SourceFileNode $parent
 */
class NamespaceDefinition extends StatementNode {
    /** @var Token */
    public $namespaceKeyword;
    /** @var QualifiedName|null */
    public $name;
    /** @var CompoundStatementNode|Token */
    public $compoundStatementOrSemicolon;

    const CHILD_NAMES = [
        'namespaceKeyword',
        'name',
        'compoundStatementOrSemicolon'
    ];
}
