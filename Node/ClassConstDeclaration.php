<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node;
use PhpParser\NodeKind;
use PhpParser\Token;

class ClassConstDeclaration extends Node {

    /** @var Token[] */
    public $modifiers;

    /** @var Token */
    public $constKeyword;

    /** @var DelimitedList */
    public $constElements;

    /** @var Token */
    public $semicolon;

    public function __construct() {
        parent::__construct(NodeKind::ClassConstDeclaration);
    }
}