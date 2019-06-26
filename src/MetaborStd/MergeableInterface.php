<?php

declare(strict_types=1);

namespace MetaborStd;

/**
 * @author Oliver Tischlinger
 */
interface MergeableInterface
{
    /**
     * @param object $source
     */
    public function merge(object $source): void;
}
