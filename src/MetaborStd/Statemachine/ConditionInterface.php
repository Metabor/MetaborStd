<?php

namespace MetaborStd\Statemachine;

use MetaborStd\NamedInterface;

/**
 * @author Oliver Tischlinger
 */
interface ConditionInterface extends NamedInterface
{
    /**
     * @param object       $subject
     * @param \ArrayAccess $context
     *
     * @return bool
     */
    public function checkCondition(object $subject, \ArrayAccess $context): bool;
}
