<?php

namespace MetaborStd\Value;

/**
 * @author Oliver Tischlinger
 */
interface ScalarInterface extends MixedInterface
{
    /**
     * @return bool|float|int|null|string
     */
    public function getValue();
}
