<?php
/*
 * Copyright (c) 2014 GOTO Hidenori <hidenorigoto@gmail.com>,
 *               2014 KUBO Atsuhiro <kubo@iteman.jp>,
 * All rights reserved.
 *
 * This file is part of Domain Kata.
 *
 * This program and the accompanying materials are made available under
 * the terms of the BSD 2-Clause License which accompanies this
 * distribution, and is available at http://opensource.org/licenses/BSD-2-Clause
 */

namespace PHPMentors\DomainKata\Entity\Operation;

use PHPMentors\DomainKata\Entity\EntityInterface;

interface CopyableInterface extends OperationInterface
{
    /**
     * @param  \PHPMentors\DomainKata\Entity\EntityInterface $target
     * @return void
     */
    public function copyTo(EntityInterface $target);
}
