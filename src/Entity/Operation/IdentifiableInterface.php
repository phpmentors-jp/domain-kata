<?php
/*
 * Copyright (c) 2015 GOTO Hidenori <hidenorigoto@gmail.com>,
 * All rights reserved.
 *
 * This file is part of Domain Kata.
 *
 * This program and the accompanying materials are made available under
 * the terms of the BSD 2-Clause License which accompanies this
 * distribution, and is available at http://opensource.org/licenses/BSD-2-Clause
 */

namespace PHPMentors\DomainKata\Entity\Operation;

/**
 * @since Interface available since Release 1.4.0
 */
interface IdentifiableInterface extends OperationInterface
{
    /**
     * @return mixed
     */
    public function getId();
}
