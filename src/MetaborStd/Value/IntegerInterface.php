<?php

namespace MetaborStd\Value;

/**
 * @author Oliver Tischlinger
 */
interface IntegerInterface extends NumericInterface
{
    /**
     * @return int
     */
    public function getValue();
}
