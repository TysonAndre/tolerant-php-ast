<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node;

use Phan\TolerantPhpAst\Node\DelimitedList\AttributeElementList;
use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Token;

class AttributeGroup extends Node {
    /** @var Token */
    public $startToken;

    /** @var AttributeElementList */
    public $attributes;

    /** @var Token */
    public $endToken;

    const CHILD_NAMES = [
        'startToken',
        'attributes',
        'endToken'
    ];
}
