<?php

namespace MetaborStd\Statemachine;

use MetaborStd\NamedInterface;

/**
 * @author Oliver Tischlinger
 */
abstract class StatemachineInterfaceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @return \MetaborStd\Statemachine\StatemachineInterface
     */
    abstract protected function createTestInstance();

    /**
     *
     */
    public function testProvidesCurrentState(): void
    {
        $instance = $this->createTestInstance();
        $currentState = $instance->getCurrentState();
        $this->assertInstanceOf('\MetaborStd\Statemachine\StateInterface', $currentState);
    }

    /**
     *
     */
    public function testProvidesStatefulSubject(): void
    {
        $instance = $this->createTestInstance();
        $subject = $instance->getSubject();
        $this->assertIsObject($subject);
    }

    /**
     * @return \MetaborStd\Statemachine\TransitionInterface
     */
    abstract protected function getTransitionForTriggerTest();

    /**
     * @return \MetaborStd\Statemachine\StatemachineInterface
     */
    protected function getTestInstanceForTriggerTest()
    {
        return $this->createTestInstance();
    }

    /**
     * @param NamedInterface $expected
     * @param NamedInterface $actual
     */
    protected function assertNameEquals(NamedInterface $expected, NamedInterface $actual)
    {
        $this->assertEquals($expected->getName(), $actual->getName());
    }

    /**
     *
     */
    public function testHandleEventsThatAreTriggered(): void
    {
        $instance = $this->getTestInstanceForTriggerTest();
        $testTransition = $this->getTransitionForTriggerTest();
        $instance->triggerEvent($testTransition->getEventName());
        $this->assertNameEquals($testTransition->getTargetState(), $instance->getCurrentState());
    }

    /**
     * @return \MetaborStd\Statemachine\TransitionInterface
     */
    abstract protected function getTransitionForCheckTest();

    /**
     * @return \MetaborStd\Statemachine\StatemachineInterface
     */
    protected function getTestInstanceForCheckTest()
    {
        return $this->createTestInstance();
    }

    /**
     *
     */
    public function testChecksIfConditionsAreTrue(): void
    {
        $instance = $this->getTestInstanceForCheckTest();
        $testTransition = $this->getTransitionForCheckTest();
        $instance->checkTransitions();
        $this->assertNameEquals($testTransition->getTargetState(), $instance->getCurrentState());
    }
}
