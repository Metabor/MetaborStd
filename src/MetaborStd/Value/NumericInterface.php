<?php

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
