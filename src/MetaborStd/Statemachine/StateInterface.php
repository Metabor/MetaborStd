<?php

namespace MetaborStd\Statemachine;

use MetaborStd\Event\EventInterface;
use MetaborStd\NamedInterface;

/**
 * @author Oliver Tischlinger
 */
interface StateInterface extends NamedInterface
{
    /**
     * @return \Traversable|array
     */
    public function getEventNames(): \Traversable|array;

    /**
     * @param string $name
     *
     * @return EventInterface
     */
    public function getEvent(string $name): EventInterface;

    /**
     * @param string $name
     *
     * @return bool
     */
    public function hasEvent(string $name): bool;

    /**
     * @return \Traversable
     */
    public function getTransitions(): \Traversable;
}
