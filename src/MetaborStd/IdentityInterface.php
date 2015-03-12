<?php
namespace MetaborStd;

/**
 * @author Oliver Tischlinger
 */
interface IdentityInterface
{
    /**
     * @return string
     */
    public function getUniqueIdentifier();
}
