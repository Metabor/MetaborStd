<?php

declare(strict_types=1);

namespace MetaborStd\Semaphore;

/**
 * @author Oliver Tischlinger
 */
interface MutexFactoryInterface
{
    /**
     * @param object $subject
     *
     * @return MutexInterface
     */
    public function createMutex(object $subject): MutexInterface;
}
