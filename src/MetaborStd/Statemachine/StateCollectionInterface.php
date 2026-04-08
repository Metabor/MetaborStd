<?php

namespace MetaborStd\Statemachine;

/**
 * @author Oliver Tischlinger
 */
interface StateCollectionInterface
{
    /**
     * @return \Traversable
     */
    public function getStates(): \Traversable;

    /**
     * @param string $name
     *
     * @return StateInterface
     */
    public function getState(string $name): StateInterface;

    /**
     * @param string $name
     *
     * @return bool
     */
    public function hasState(string $name): bool;
}
