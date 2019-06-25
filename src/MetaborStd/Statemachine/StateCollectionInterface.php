<?php

declare(strict_types=1);

namespace MetaborStd\Statemachine;

/**
 * @author Oliver Tischlinger
 */
interface StateCollectionInterface
{
    /**
     * @return iterable
     */
    public function getStates(): iterable;

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
