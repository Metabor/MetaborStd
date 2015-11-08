<?php

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
    public function acquireLock($resourceName);

    /**
     * @param $resourceName
     *
     * @return bool
     */
    public function releaseLock($resourceName);

    /**
     * @param $resourceName
     *
     * @return bool
     */
    public function isLocked($resourceName);
}
