<?php

namespace MetaborStd;

/**
 * @author Oliver Tischlinger
 */
interface TimeBasedInterface
{
    /**
     * @return \DateTimeInterface
     */
    public function getDate(): \DateTimeInterface;
}
