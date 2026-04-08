<?php

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
     * @return int|float
     */
    public function getAmount(): int|float;
}
