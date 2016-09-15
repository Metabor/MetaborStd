<?php

namespace MetaborStd\Semaphore;

/**
 * @author Oliver Tischlinger
 */
interface MutexFactoryInterface
{
    /**
     * @param $subject
     * @return MutexInterface
     */
    public function createMutex($subject);
}
