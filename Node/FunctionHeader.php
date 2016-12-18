<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node;
use PhpParser\NodeKind;
use PhpParser\Token;

trait FunctionHeader {
    /** @var Token */
    public $functionKeyword;
    /** @var Token */
    public $byRefToken;
    /** @var null | Name */
    public $name;
    /** @var Token */
    public $openParen;
    /** @var DelimitedList[] */
    public $parameters;
    /** @var Token */
    public $closeParen;
}