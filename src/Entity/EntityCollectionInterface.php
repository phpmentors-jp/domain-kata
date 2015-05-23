<?php
/*
 * Copyright (c) 2014-2015 KUBO Atsuhiro <kubo@iteman.jp>,
 * All rights reserved.
 *
 * This file is part of Domain Kata.
 *
 * This program and the accompanying materials are made available under
 * the terms of the BSD 2-Clause License which accompanies this
 * distribution, and is available at http://opensource.org/licenses/BSD-2-Clause
 */

namespace PHPMentors\DomainKata\Entity;

/**
 * @since Interface available since Release 1.3.0
 */
interface EntityCollectionInterface extends EntityInterface, \Countable, \IteratorAggregate
{
    /**
     * @param EntityInterface $entity
     */
    public function add(EntityInterface $entity);

    /**
     * @param string|int
     *
     * @return EntityInterface
     */
    public function get($key);

    /**
     * @param EntityInterface $entity
     */
    public function remove(EntityInterface $entity);

    /**
     * @return array
     *
     * @since Method available since Release 1.4.0
     */
    public function toArray();
}
