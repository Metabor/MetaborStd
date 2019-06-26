<?php

declare(strict_types=1);

namespace MetaborStd\Statemachine;

use ArrayAccess;
use SplSubject;

/**
 * @author Oliver Tischlinger
 */
interface StatemachineInterface extends SplSubject
{
    /**
     * @return StateInterface
     */
    public function getCurrentState(): StateInterface;

    /**
     * @param string           $name
     * @param ArrayAccess|null $context
     */
    public function triggerEvent(string $name, ?ArrayAccess $context = null): void;

    /**
     * @param ArrayAccess|null $context
     */
    public function checkTransitions(?ArrayAccess $context = null): void;

    /**
     * returns the owning object.
     *
     * @return object
     */
    public function getSubject(): object;
}
