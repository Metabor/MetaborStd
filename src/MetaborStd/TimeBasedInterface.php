<?php

declare(strict_types=1);

namespace MetaborStd;

use DateTime;

/**
 * @author Oliver Tischlinger
 */
interface TimeBasedInterface
{
    /**
     * @return DateTime
     */
    public function getDate(): DateTime;
}
