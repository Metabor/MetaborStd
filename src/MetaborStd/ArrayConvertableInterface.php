<?php

declare(strict_types=1);

namespace MetaborStd;

/**
 * @author Oliver Tischlinger
 */
interface ArrayConvertableInterface
{
    /**
     * @return array
     */
    public function toArray(): array;
}
