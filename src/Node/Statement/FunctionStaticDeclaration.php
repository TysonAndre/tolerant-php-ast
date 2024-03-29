<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node\Statement;

use Phan\TolerantPhpAst\Node\DelimitedList;
use Phan\TolerantPhpAst\Node\StatementNode;
use Phan\TolerantPhpAst\Token;

class FunctionStaticDeclaration extends StatementNode {

    /** @var Token */
    public $staticKeyword;

    /** @var DelimitedList\StaticVariableNameList */
    public $staticVariableNameList;

    /** @var Token */
    public $semicolon;

    const CHILD_NAMES = [
        'staticKeyword',
        'staticVariableNameList',
        'semicolon'
    ];
}
