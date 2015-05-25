<?php
/*
 * Copyright (c) 2015 KUBO Atsuhiro <kubo@iteman.jp>,
 * All rights reserved.
 *
 * This file is part of Domain Kata.
 *
 * This program and the accompanying materials are made available under
 * the terms of the BSD 2-Clause License which accompanies this
 * distribution, and is available at http://opensource.org/licenses/BSD-2-Clause
 */

namespace PHPMentors\DomainKata\InOut;

use PHPMentors\DomainKata\Entity\EntityInterface;

/**
 * @since Interface available since Release 1.4.0
 */
interface InOutInterface extends EntityInterface
{
    /**
     * @param mixed $input
     */
    public function setInput($input);

    /**
     * @return mixed
     */
    public function getInput();

    /**
     * @param mixed $output
     */
    public function setOutput($output);

    /**
     * @return mixed
     */
    public function getOutput();
}
