<?php

namespace MetaborStd\Value;

/**
 * @author Oliver Tischlinger
 */
interface BooleanInterface extends ScalarInterface
{
    /**
     * @return bool
     */
    public function getValue();
}
