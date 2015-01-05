<?php
/*
 * Copyright (c) 2014 KUBO Atsuhiro <kubo@iteman.jp>,
 * All rights reserved.
 *
 * This file is part of Domain Kata.
 *
 * This program and the accompanying materials are made available under
 * the terms of the BSD 2-Clause License which accompanies this
 * distribution, and is available at http://opensource.org/licenses/BSD-2-Clause
 */

namespace PHPMentors\DomainKata\Repository;

use PHPMentors\DomainKata\Entity\EntityInterface;

interface RepositoryInterface
{
    /**
     * @param EntityInterface $entity
     */
    public function add(EntityInterface $entity);

    /**
     * @param EntityInterface $entity
     */
    public function remove(EntityInterface $entity);
}
