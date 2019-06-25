<?php

declare(strict_types=1);

namespace MetaborStd;

/**
 * @author Oliver Tischlinger
 */
interface WeightedInterface
{
    /**
     * @return float
     */
    public function getWeight(): float;
}
