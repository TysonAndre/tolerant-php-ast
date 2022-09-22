<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace Phan\TolerantPhpAst\Node;

use Phan\TolerantPhpAst\Node;
use Phan\TolerantPhpAst\Token;

class UseVariableName extends Node {
    const CHILD_NAMES = ['byRef', 'variableName'];

    /** @var Token|null */
    public $byRef;

    /** @var Token */
    public $variableName;

    /**
     * @return ?string
     * @suppress PhanPartialTypeMismatchArgumentInternal
     */
    public function getName() {
        // extract varName from $varName in use($varName)
        if (
            $this->variableName instanceof Token &&
            $name = substr($this->variableName->getText($this->getFileContents()), 1)
        ) {
            return $name;
        }
        return null;
    }
}
