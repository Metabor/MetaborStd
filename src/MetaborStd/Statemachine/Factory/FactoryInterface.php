<?php

declare(strict_types=1);

namespace MetaborStd\Statemachine\Factory;

use MetaborStd\Statemachine\StatemachineInterface;

/**
 * @author Oliver Tischlinger
 */
interface FactoryInterface
{
    /**
     * @param object $subject
     *
     * @return StatemachineInterface
     */
    public function createStatemachine(object $subject): StatemachineInterface;
}
