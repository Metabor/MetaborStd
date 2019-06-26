<?php

declare(strict_types=1);

namespace MetaborStd\Value;

/**
 * @author Oliver Tischlinger
 */
interface BooleanInterface extends ScalarInterface
{
    /**
     * @return bool
     */
    public function getValue(): bool;
}
