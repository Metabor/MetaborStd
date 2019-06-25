<?php

declare(strict_types=1);

namespace MetaborStd\Event;

use MetaborStd\CallbackInterface;

/**
 * @author Oliver Tischlinger
 */
interface DispatcherInterface extends CallbackInterface
{
    /**
     * @param EventInterface         $event
     * @param array                  $arguments
     * @param CallbackInterface|null $onReadyCallback
     */
    public function dispatch(
        EventInterface $event,
        array $arguments = [],
        ?CallbackInterface $onReadyCallback = null
    ): void;

    /**
     * @return bool
     */
    public function isReady(): bool;
}
