<?php
namespace MetaborStd\Statemachine;
/**
 * 
 * @author Oliver Tischlinger
 *
 */
abstract class StateCollectionInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return \MetaborStd\Statemachine\StateCollectionInterface
     */
    abstract protected function createTestInstance();

    /**
     * @return string
     */
    abstract protected function getOneStateNameOfTheCollection();

    /**
     * 
     */
    public function testContainsStates()
    {
        $instance = $this->createTestInstance();
        $states = $instance->getStates();
        $this->assertInstanceOf('\Traversable', $states);
        $this->assertContainsOnlyInstancesOf('\MetaborStd\Statemachine\StateInterface', $states);
    }

    /**
     *
     */
    public function testCanReplyIfItContainsAStateByName()
    {
        $instance = $this->createTestInstance();
        $name = $this->getOneStateNameOfTheCollection();
        $hasState = $instance->hasState($name);
        $this->assertTrue($hasState);
    }

    /**
     *
     */
    public function testCanReplyIfItContainsAStateByName()
    {
        $instance = $this->createTestInstance();
        $name = $this->getOneStateNameOfTheCollection();
        $state = $instance->getState($name);
        $this->assertInstanceOf('\MetaborStd\Statemachine\StateInterface', $state);
    }
}
