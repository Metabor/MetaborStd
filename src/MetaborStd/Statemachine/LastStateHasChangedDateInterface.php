<?php

declare(strict_types=1);

namespace MetaborStd\Statemachine;

use DateTime;

/**
 * @author Oliver Tischlinger
 */
interface LastStateHasChangedDateInterface
{
    /**
     * @return DateTime
     */
    public function getLastStateHasChangedDate(): DateTime;
}
