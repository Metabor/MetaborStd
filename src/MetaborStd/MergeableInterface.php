<?php

namespace MetaborStd;

/**
 * @author Oliver Tischlinger
 */
interface MergeableInterface
{
    /**
     * @param mixed $source
     */
    public function merge(mixed $source): void;
}
