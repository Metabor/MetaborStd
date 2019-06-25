<?php

declare(strict_types=1);

namespace MetaborStd\Statemachine;

use MetaborStd\NamedInterface;

/**
 * @author Oliver Tischlinger
 */
interface ProcessInterface extends NamedInterface, StateCollectionInterface
{
    /**
     * @return StateInterface
     */
    public function getInitialState(): StateInterface;
}
