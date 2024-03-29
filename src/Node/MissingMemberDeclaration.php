<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node;

use Phan\TolerantPhpAst\ModifiedTypeInterface;
use Phan\TolerantPhpAst\ModifiedTypeTrait;
use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Token;

class MissingMemberDeclaration extends Node implements ModifiedTypeInterface {
    use ModifiedTypeTrait;

    /** @var AttributeGroup[]|null */
    public $attributes;

    /** @var Token|null needed along with typeDeclaration for what looked like typed property declarations but was missing VariableName */
    public $questionToken;

    /** @var DelimitedList\QualifiedNameList|null */
    public $typeDeclarationList;

    const CHILD_NAMES = [
        'attributes',
        'modifiers',
        'questionToken',
        'typeDeclarationList',
    ];
}
