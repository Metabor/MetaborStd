<?php

declare(strict_types=1);

namespace MetaborStd\Event;

use MetaborStd\CallbackInterface;
use MetaborStd\NamedInterface;
use SplSubject;

/**
 * @author Oliver Tischlinger
 */
interface EventInterface extends NamedInterface, SplSubject, CallbackInterface
{
    /**
     * @return array
     */
    public function getInvokeArgs(): array;

    /**
     * @return iterable
     */
    public function getObservers(): iterable;
}
