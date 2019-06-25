<?php

declare(strict_types=1);

namespace MetaborStd;

/**
 * @author Oliver Tischlinger
 */
interface CallbackInterface
{
    /**
     * @return mixed
     */
    public function __invoke();
}
