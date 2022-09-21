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
use Phan\TolerantPhpAst\Node\ClassBaseClause;
use Phan\TolerantPhpAst\Node\ClassInterfaceClause;
use Phan\TolerantPhpAst\Node\ClassMembersNode;
use Phan\TolerantPhpAst\Node\StatementNode;
use Phan\TolerantPhpAst\Token;

class ClassDeclaration extends StatementNode implements NamespacedNameInterface, ClassLike {
    use NamespacedNameTrait;

    /** @var AttributeGroup[]|null */
    public $attributes;

    /** @var Token abstract/final/readonly modifier */
    public $abstractOrFinalModifier;

    /** @var Token[] additional abstract/final/readonly modifiers */
    public $modifiers;

    /** @var Token */
    public $classKeyword;

    /** @var Token */
    public $name;

    /** @var ClassBaseClause */
    public $classBaseClause;

    /** @var ClassInterfaceClause */
    public $classInterfaceClause;

    /** @var ClassMembersNode */
    public $classMembers;

    const CHILD_NAMES = [
        'attributes',
        'abstractOrFinalModifier',
        'modifiers',
        'classKeyword',
        'name',
        'classBaseClause',
        'classInterfaceClause',
        'classMembers'
    ];

    public function getNameParts() : array {
        return [$this->name];
    }
}
