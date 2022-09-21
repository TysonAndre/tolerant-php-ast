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
use Phan\TolerantPhpAst\Node\InterfaceBaseClause;
use Phan\TolerantPhpAst\Node\InterfaceMembers;
use Phan\TolerantPhpAst\Node\StatementNode;
use Phan\TolerantPhpAst\Token;

class InterfaceDeclaration extends StatementNode implements NamespacedNameInterface, ClassLike {
    use NamespacedNameTrait;

    /** @var AttributeGroup[]|null */
    public $attributes;

    /** @var Token */
    public $interfaceKeyword;

    /** @var Token */
    public $name;

    /** @var InterfaceBaseClause|null */
    public $interfaceBaseClause;

    /** @var InterfaceMembers */
    public $interfaceMembers;

    const CHILD_NAMES = [
        'attributes',
        'interfaceKeyword',
        'name',
        'interfaceBaseClause',
        'interfaceMembers'
    ];

    public function getNameParts() : array {
        return [$this->name];
    }
}
