<?php

namespace MetaborStd\Statemachine\Factory;

/**
 * @author otischlinger
 */
interface ProcessDetectorInterface
{
    /**
     * @param object $subject
     *
     * @return \MetaborStd\Statemachine\ProcessInterface
     */
    public function detectProcess(object $subject): \MetaborStd\Statemachine\ProcessInterface;
}
