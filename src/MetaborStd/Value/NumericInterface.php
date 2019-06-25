<?php

declare(strict_types=1);

namespace MetaborStd\Value;

/**
 * @author Oliver Tischlinger
 */
interface NumericInterface extends ScalarInterface
{
    /**
     * @return int|float
     */
    public function getValue();
}
