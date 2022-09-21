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
use Phan\TolerantPhpAst\Node\TraitMembers;
use Phan\TolerantPhpAst\Token;

class TraitDeclaration extends StatementNode implements NamespacedNameInterface, ClassLike {
    use NamespacedNameTrait;

    /** @var AttributeGroup[]|null */
    public $attributes;

    /** @var Token */
    public $traitKeyword;

    /** @var Token */
    public $name;

    /** @var TraitMembers */
    public $traitMembers;

    const CHILD_NAMES = [
        'attributes',
        'traitKeyword',
        'name',
        'traitMembers'
    ];

    public function getNameParts() : array {
        return [$this->name];
    }
}
