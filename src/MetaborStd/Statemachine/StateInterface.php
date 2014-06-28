<?php
namespace MetaborStd\Statemachine;

use MetaborStd\NamedInterface;
use Metabor\Event\Event;

/**
 *
 * @author Oliver Tischlinger
 *
 */
interface StateInterface extends NamedInterface
{
    /**
     *
     * @return \Traversable | array
     */
    public function getEventNames();

    /**
     *
     * @param string $name
     * @return Event
     */
    public function getEvent($name);

    /**
     *
     * @param string $name
     * @return boolean
     */
    public function hasEvent($name);

    /**
     *
     * @return \Traversable
     */
    public function getTransitions();
}
