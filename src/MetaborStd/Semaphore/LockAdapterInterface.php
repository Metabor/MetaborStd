<?php

declare(strict_types=1);

namespace MetaborStd\Semaphore;

/**
 * @author Oliver Tischlinger
 */
interface LockAdapterInterface
{
    /**
     * @param string $resourceName
     *
     * @return bool
     */
    public function acquireLock(string $resourceName): bool;

    /**
     * @param string $resourceName
     *
     * @return bool
     */
    public function releaseLock(string $resourceName): bool;

    /**
     * @param string $resourceName
     *
     * @return bool
     */
    public function isLocked(string $resourceName): bool;
}
