<?php
/*
 * Copyright (c) 2014 GOTO Hidenori <hidenorigoto@gmail.com>,
 * All rights reserved.
 *
 * This file is part of Domain Kata.
 *
 * This program and the accompanying materials are made available under
 * the terms of the BSD 2-Clause License which accompanies this
 * distribution, and is available at http://opensource.org/licenses/BSD-2-Clause
 */

namespace PHPMentors\DomainKata\Entity\Behavior;

use PHPMentors\DomainKata\Entity\EntityInterface;

interface CopyableInterface
{
    /**
     * @param \PHPMentors\DomainKata\Entity\EntityInterface $from
     * @return bool
     */
    public function copyFrom(EntityInterface $from);
}
