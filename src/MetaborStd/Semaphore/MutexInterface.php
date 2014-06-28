<?php
namespace MetaborStd\Semaphore;

/**
 * @author Oliver Tischlinger
 *
 */
interface MutexInterface
{

    /**
     * @return bool
     */
    public function acquireLock();

    /**
     * @return bool
     */
    public function releaseLock();

    /**
     * @return bool
     */
    public function isLocked();

    /**
     * @return bool
     */
    public function isAcquired();
}
