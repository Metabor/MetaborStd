<?php
namespace MetaborStd\Statemachine;

use MetaborStd\NamedInterface;
use MetaborStd\Event\EventInterface;

/**
 * @author Oliver Tischlinger
 */
interface StateInterface extends NamedInterface
{
    /**
     * @return \Traversable | array
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
     * @return boolean
     */
    public function hasEvent($name);

    /**
     * @return \Traversable
     */
    public function getTransitions();
}
