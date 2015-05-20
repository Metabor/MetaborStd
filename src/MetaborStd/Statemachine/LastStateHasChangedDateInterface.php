<?php
namespace MetaborStd\Statemachine;

/**
 * @author Oliver Tischlinger
 */
interface LastStateHasChangedDateInterface
{
    /**
     * @return \DateTime
     */
    public function getLastStateHasChangedDate();
}
