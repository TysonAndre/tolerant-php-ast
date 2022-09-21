<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Statement;

use Phan\TolerantPhpAst\FunctionLike;
use Phan\TolerantPhpAst\NamespacedNameInterface;
use Phan\TolerantPhpAst\NamespacedNameTrait;
use Phan\TolerantPhpAst\Node\FunctionBody;
use Phan\TolerantPhpAst\Node\FunctionHeader;
use Phan\TolerantPhpAst\Node\FunctionReturnType;
use Phan\TolerantPhpAst\Node\StatementNode;

class FunctionDeclaration extends StatementNode implements NamespacedNameInterface, FunctionLike {
    use FunctionHeader, FunctionReturnType, FunctionBody;
    use NamespacedNameTrait;

    const CHILD_NAMES = [
        // FunctionHeader
        'attributes',
        'functionKeyword',
        'byRefToken',
        'name',
        'openParen',
        'parameters',
        'closeParen',

        // FunctionReturnType
        'colonToken',
        'questionToken',
        'returnTypeList',

        // FunctionBody
        'compoundStatementOrSemicolon'
    ];

    public function getNameParts() : array {
        return [$this->name];
    }
}
