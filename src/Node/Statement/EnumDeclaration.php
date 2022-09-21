<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Statement;

use Phan\TolerantPhpAst\ClassLike;
use Phan\TolerantPhpAst\NamespacedNameInterface;
use Phan\TolerantPhpAst\NamespacedNameTrait;
use Phan\TolerantPhpAst\Node\AttributeGroup;
use Phan\TolerantPhpAst\Node\StatementNode;
use Phan\TolerantPhpAst\Node\EnumMembers;
use Phan\TolerantPhpAst\Token;

class EnumDeclaration extends StatementNode implements NamespacedNameInterface, ClassLike {
    use NamespacedNameTrait;

    /** @var AttributeGroup[]|null */
    public $attributes;

    /** @var Token */
    public $enumKeyword;

    /** @var Token */
    public $name;

    /** @var Token|null */
    public $colonToken;

    /** @var Token|null */
    public $enumType;

    /** @var EnumMembers */
    public $enumMembers;

    const CHILD_NAMES = [
        'attributes',
        'enumKeyword',
        'name',
        'colonToken',
        'enumType',
        'enumMembers',
    ];

    public function getNameParts() : array {
        return [$this->name];
    }
}
