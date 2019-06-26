<?php

declare(strict_types=1);

namespace MetaborStd\Semaphore;

/**
 * @author Oliver Tischlinger
 */
interface MutexInterface
{
    /**
     * @return bool
     */
    public function acquireLock(): bool;

    /**
     * @return bool
     */
    public function releaseLock(): bool;

    /**
     * @return bool
     */
    public function isLocked(): bool;

    /**
     * @return bool
     */
    public function isAcquired(): bool;
}
