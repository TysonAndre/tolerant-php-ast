<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Expression;

use Phan\TolerantPhpAst\Node\AttributeGroup;
use Phan\TolerantPhpAst\Node\ClassBaseClause;
use Phan\TolerantPhpAst\Node\ClassInterfaceClause;
use Phan\TolerantPhpAst\Node\ClassMembersNode;
use Phan\TolerantPhpAst\Node\DelimitedList;
use Phan\TolerantPhpAst\Node\Expression;
use Phan\TolerantPhpAst\Node\QualifiedName;
use Phan\TolerantPhpAst\Token;

class ObjectCreationExpression extends Expression {

    /** @var Token */
    public $newKeword;

    /** @var AttributeGroup[]|null optional attributes of an anonymous class. */
    public $attributes;

    /** @var QualifiedName|Variable|Token */
    public $classTypeDesignator;

    /** @var Token|null */
    public $openParen;

    /** @var DelimitedList\ArgumentExpressionList|null  */
    public $argumentExpressionList;

    /** @var Token|null */
    public $closeParen;

    /** @var ClassBaseClause|null */
    public $classBaseClause;

    /** @var ClassInterfaceClause|null */
    public $classInterfaceClause;

    /** @var ClassMembersNode|null */
    public $classMembers;

    const CHILD_NAMES = [
        'newKeword',
        'attributes',
        'classTypeDesignator',
        'openParen',
        'argumentExpressionList',
        'closeParen',
        'classBaseClause',
        'classInterfaceClause',
        'classMembers'
    ];
}
