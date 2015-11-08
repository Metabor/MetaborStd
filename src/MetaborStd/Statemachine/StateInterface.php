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
    public function getEventNames();

    /**
     * @param string $name
     *
     * @return EventInterface
     */
    public function getEvent($name);

    /**
     * @param string $name
     *
     * @return bool
     */
    public function hasEvent($name);

    /**
     * @return \Traversable
     */
    public function getTransitions();
}
