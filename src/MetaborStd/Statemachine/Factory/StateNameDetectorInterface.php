<?php

namespace MetaborStd\Statemachine\Factory;

/**
 * @author otischlinger
 */
interface StateNameDetectorInterface
{
    /**
     * @param object $subject
     *
     * @return string
     */
    public function detectCurrentStateName(object $subject): ?string;
}
