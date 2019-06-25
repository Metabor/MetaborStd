<?php

declare(strict_types=1);

namespace MetaborStd\Statemachine\Factory;

use MetaborStd\Statemachine\ProcessInterface;

/**
 * @author otischlinger
 */
interface ProcessDetectorInterface
{
    /**
     * @param object $subject
     *
     * @return ProcessInterface
     */
    public function detectProcess(object $subject): ProcessInterface;
}
