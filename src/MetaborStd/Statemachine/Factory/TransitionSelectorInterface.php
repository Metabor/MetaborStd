<?php
namespace MetaborStd\Statemachine\Factory;

/**
 * @author otischlinger
 *
 */
interface TransitionSelectorInterface
{
    /**
     * @param \Traversable $transitions
     * @return \MetaborStd\Statemachine\TransitionInterface | null
     */
    public function selectTransition(\Traversable $transitions);
}
