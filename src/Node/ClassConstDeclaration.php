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

class ClassConstDeclaration extends Node implements ModifiedTypeInterface {
    use ModifiedTypeTrait;

    /** @var AttributeGroup[]|null */
    public $attributes;

    /** @var Token[] */
    public $modifiers;

    /** @var Token */
    public $constKeyword;

    /** @var DelimitedList\ConstElementList */
    public $constElements;

    /** @var Token */
    public $semicolon;

    const CHILD_NAMES = [
        'attributes',
        'modifiers',
        'constKeyword',
        'constElements',
        'semicolon'
    ];
}
