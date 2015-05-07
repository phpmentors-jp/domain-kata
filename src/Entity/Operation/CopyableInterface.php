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

/**
 * @since Interface available since Release 1.1.0
 */
interface CopyableInterface extends OperationInterface
{
    /**
     * @param EntityInterface $source
     *
     * @return void
     */
    public function copyFrom(EntityInterface $source);

    /**
     * @param EntityInterface $destination
     *
     * @return void
     */
    public function copyTo(EntityInterface $destination);
}
