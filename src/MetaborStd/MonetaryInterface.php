<?php
namespace MetaborStd;

/**
 *
 * @author Oliver Tischlinger
 *
 */
interface MonetaryInterface
{

    /**
     *
     * @return string
     */
    public function getCurrency();

    /**
     *
     * @return number
     */
    public function getAmount();

}
