<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst;

use Phan\TolerantPhpAst\Node\AttributeGroup;

/**
 * Interface for recognizing functions easily.
 * Each Node that implements this interface can be considered a function.
 *
 * @property AttributeGroup[] $attributes
 */
interface FunctionLike {}