<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node;

use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Node\DelimitedList\MatchArmConditionList;
use Phan\TolerantPhpAst\Token;

class MatchArm extends Node {

    /** @var MatchArmConditionList */
    public $conditionList;

    /** @var Token */
    public $arrowToken;

    /** @var Expression */
    public $body;

    const CHILD_NAMES = [
        'conditionList',
        'arrowToken',
        'body',
    ];
}
