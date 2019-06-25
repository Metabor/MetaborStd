<?php

declare(strict_types=1);

namespace MetaborStd\Value;

/**
 * @author Oliver Tischlinger
 */
interface IntegerInterface extends NumericInterface
{
    /**
     * @return int
     */
    public function getValue(): int;
}
