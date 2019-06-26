<?php

declare(strict_types=1);

namespace MetaborStd\Statemachine\Factory;

use MetaborStd\Statemachine\TransitionInterface;

/**
 * @author otischlinger
 */
interface TransitionSelectorInterface
{
    /**
     * @param iterable $transitions
     *
     * @return TransitionInterface|null
     */
    public function selectTransition(iterable $transitions): ?TransitionInterface;
}
