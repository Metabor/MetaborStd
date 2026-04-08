<?php

namespace MetaborStd\Statemachine;

/**
 * @author Oliver Tischlinger
 */
interface LastStateHasChangedDateInterface
{
    /**
     * @return \DateTimeInterface
     */
    public function getLastStateHasChangedDate(): \DateTimeInterface;
}
