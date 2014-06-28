<?php
namespace MetaborStd\Event;

use MetaborStd\CallbackInterface;
use MetaborStd\NamedInterface;

/**
 *
 * @author Oliver Tischlinger
 *
 */
interface EventInterface extends NamedInterface, \SplSubject, CallbackInterface
{
    /**
     *
     * @return array
     */
    public function getInvokeArgs();

    /**
     * @return \Traversable
     */
    public function getObservers();
}
