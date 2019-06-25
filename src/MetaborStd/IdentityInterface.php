<?php

declare(strict_types=1);

namespace MetaborStd;

/**
 * @author Oliver Tischlinger
 */
interface IdentityInterface
{
    /**
     * @return string
     */
    public function getUniqueIdentifier(): string;
}
