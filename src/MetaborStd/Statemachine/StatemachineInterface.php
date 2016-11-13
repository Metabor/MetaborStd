<?php

namespace MetaborStd\Statemachine;

/**
 * @author Oliver Tischlinger
 */
interface StatemachineInterface extends \SplSubject
{
    /**
     * @return StateInterface
     */
    public function getCurrentState();

    /**
     * @param string       $name
     * @param \ArrayAccess|null $context
     */
    public function triggerEvent($name, \ArrayAccess $context = null);

    /**
     * @param \ArrayAccess|null $context
     */
    public function checkTransitions(\ArrayAccess $context = null);

    /**
     * returns the owning object.
     *
     * @return object
     */
    public function getSubject();
}
