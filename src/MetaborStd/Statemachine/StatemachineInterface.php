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
     * @param \ArrayAccess $context
     */
    public function triggerEvent($name, \ArrayAccess $context = null);

    /**
     */
    public function checkTransitions();

    /**
     * returns the owning object.
     *
     * @return object
     */
    public function getSubject();
}
