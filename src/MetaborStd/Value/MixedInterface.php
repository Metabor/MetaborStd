<?php

declare(strict_types=1);

namespace MetaborStd\Value;

/**
 * @author Oliver Tischlinger
 */
interface MixedInterface
{
    /**
     * @return mixed
     */
    public function getValue();
}
