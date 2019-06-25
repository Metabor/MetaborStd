<?php

declare(strict_types=1);

namespace MetaborStd\Statemachine;

/**
 * @author Oliver Tischlinger
 */
interface StatefulInterface
{
    /**
     * @return string
     */
    public function getCurrentStateName(): string;

    /**
     * @param string $stateName
     */
    public function setCurrentStateName(string $stateName);
}
