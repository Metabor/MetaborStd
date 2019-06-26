<?php

declare(strict_types=1);

namespace MetaborStd;

/**
 * @author Oliver Tischlinger
 */
interface MonetaryInterface
{
    /**
     * @return string
     */
    public function getCurrency(): string;

    /**
     * @return float
     */
    public function getAmount(): float;
}
