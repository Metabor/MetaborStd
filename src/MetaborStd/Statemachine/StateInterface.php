<?php

declare(strict_types=1);

namespace MetaborStd\Statemachine;

use MetaborStd\Event\EventInterface;
use MetaborStd\NamedInterface;

/**
 * @author Oliver Tischlinger
 */
interface StateInterface extends NamedInterface
{
    /**
     * @return iterable
     */
    public function getEventNames(): iterable;

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
     * @return iterable
     */
    public function getTransitions(): iterable;
}
