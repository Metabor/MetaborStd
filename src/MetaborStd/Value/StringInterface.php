<?php

declare(strict_types=1);

namespace MetaborStd\Value;

/**
 * @author Oliver Tischlinger
 */
interface StringInterface extends ScalarInterface
{
    /**
     * @return string
     */
    public function getValue(): string;
}
