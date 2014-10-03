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

interface EquatableInterface
{
    /**
     * @param \PHPMentors\DomainKata\Entity\EntityInterface $target
     * @return bool
     */
    public function equalTo(EntityInterface $target);
}
