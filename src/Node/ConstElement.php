<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node;

use Phan\TolerantPhpAst\NamespacedNameInterface;
use Phan\TolerantPhpAst\NamespacedNameTrait;
use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Token;

class ConstElement extends Node implements NamespacedNameInterface {
    use NamespacedNameTrait;

    /** @var Token */
    public $name;

    /** @var Token */
    public $equalsToken;

    /** @var Expression */
    public $assignment;

    const CHILD_NAMES = [
        'name',
        'equalsToken',
        'assignment'
    ];

    public function getNameParts() : array {
        return [$this->name];
    }

    public function getName() {
        return $this->name->getText($this->getFileContents());
    }
}
