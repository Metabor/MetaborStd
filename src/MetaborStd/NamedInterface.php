<?php

declare(strict_types=1);

namespace MetaborStd;

/**
 * @author Oliver Tischlinger
 */
interface NamedInterface
{
    /**
     * @return string
     */
    public function getName(): string;
}
