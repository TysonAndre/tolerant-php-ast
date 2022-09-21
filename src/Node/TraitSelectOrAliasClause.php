<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node;

use Phan\TolerantPhpAst\ModifiedTypeInterface;
use Phan\TolerantPhpAst\ModifiedTypeTrait;
use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Node\DelimitedList\QualifiedNameList;
use Phan\TolerantPhpAst\Token;

class TraitSelectOrAliasClause extends Node implements ModifiedTypeInterface {
    use ModifiedTypeTrait;

    /** @var QualifiedName|Node\Expression\ScopedPropertyAccessExpression */
    public $name;

    /** @var Token */
    public $asOrInsteadOfKeyword;

    /**
     * @var QualifiedNameList|QualifiedName depends on the keyword
     */
    public $targetNameList;

    const CHILD_NAMES = [
        'name',
        'asOrInsteadOfKeyword',
        'modifiers',
        'targetNameList',
    ];
}
