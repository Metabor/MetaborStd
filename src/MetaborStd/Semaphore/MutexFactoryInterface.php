<?php

namespace MetaborStd\Semaphore;

/**
 * @author Oliver Tischlinger
 */
interface MutexFactoryInterface
{
    /**
     * @param mixed $subject
     * @return MutexInterface
     */
    public function createMutex(mixed $subject): MutexInterface;
}
