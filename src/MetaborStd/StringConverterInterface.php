<?php

namespace MetaborStd;

/**
 * @author Oliver Tischlinger
 */
interface StringConverterInterface
{
    /**
     * @param mixed $source
     *
     * @return string
     */
    public function convertToString($source);
}
