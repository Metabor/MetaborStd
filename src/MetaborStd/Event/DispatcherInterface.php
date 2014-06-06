<?php
namespace MetaborStd\Event;

use MetaborStd\CallbackInterface;

/**
 *
 * @author Oliver Tischlinger
 *        
 */
interface DispatcherInterface extends CallbackInterface
{
    /**
     *
     * @param EventInterface $event
     * @param array $arguments
     * @param CallbackInterface $onReadyCallback
     */
    public function dispatch(EventInterface $event, array $arguments = array(), CallbackInterface $onReadyCallback = null);

    /**
     * @return boolean
     */
    public function isReady();
}
