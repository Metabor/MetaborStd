<?php

namespace MetaborStd\Statemachine;

use MetaborStd\Event\EventInterface;

/**
 * @author Oliver Tischlinger
 */
interface TransitionInterface
{
    /**
     * @return \MetaborStd\Statemachine\StateInterface
     */
    public function getTargetState(): StateInterface;

    /**
     * @param object         $subject
     * @param \ArrayAccess   $context
     * @param EventInterface $event
     *
     * @return bool
     */
    public function isActive(object $subject, \ArrayAccess $context, ?EventInterface $event = null): bool;

    /**
     * @return string|null
     */
    public function getEventName(): ?string;

    /**
     * @return string|null
     */
    public function getConditionName(): ?string;
}
