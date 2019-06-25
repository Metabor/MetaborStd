<?php

declare(strict_types=1);

namespace MetaborStd;

/**
 * @author Oliver Tischlinger
 */
interface StringConverterInterface
{
    /**
     * @param object $source
     *
     * @return string
     */
    public function convertToString(object $source): string;
}
