<?php

declare(strict_types=1);

namespace MetaborStd\Tests\Statemachine;

use MetaborStd\NamedInterface;
use MetaborStd\Statemachine\StateInterface;
use MetaborStd\Statemachine\StatemachineInterface;
use MetaborStd\Statemachine\TransitionInterface;
use PHPUnit\Framework\TestCase;

/**
 * @author Oliver Tischlinger
 */
abstract class StatemachineInterfaceTest extends TestCase
{
    /**
     * @return StatemachineInterface
     */
    abstract protected function createTestInstance(): StatemachineInterface;

    public function testProvidesCurrentState(): void
    {
        $instance = $this->createTestInstance();
        $currentState = $instance->getCurrentState();
        $this->assertInstanceOf(StateInterface::class, $currentState);
    }

    public function testProvidesStatefulSubject(): void
    {
        $instance = $this->createTestInstance();
        $subject = $instance->getSubject();
        $this->assertIsObject($subject);
    }

    /**
     * @return TransitionInterface
     */
    abstract protected function getTransitionForTriggerTest(): TransitionInterface;

    /**
     * @return StatemachineInterface
     */
    protected function getTestInstanceForTriggerTest(): StatemachineInterface
    {
        return $this->createTestInstance();
    }

    /**
     * @param NamedInterface $expected
     * @param NamedInterface $actual
     */
    protected function assertNameEquals(NamedInterface $expected, NamedInterface $actual): void
    {
        $this->assertEquals($expected->getName(), $actual->getName());
    }

    public function testHandleEventsThatAreTriggered(): void
    {
        $instance = $this->getTestInstanceForTriggerTest();
        $testTransition = $this->getTransitionForTriggerTest();
        $instance->triggerEvent($testTransition->getEventName());
        $this->assertNameEquals($testTransition->getTargetState(), $instance->getCurrentState());
    }

    /**
     * @return TransitionInterface
     */
    abstract protected function getTransitionForCheckTest(): TransitionInterface;

    /**
     * @return StatemachineInterface
     */
    protected function getTestInstanceForCheckTest(): StatemachineInterface
    {
        return $this->createTestInstance();
    }

    public function testChecksIfConditionsAreTrue(): void
    {
        $instance = $this->getTestInstanceForCheckTest();
        $testTransition = $this->getTransitionForCheckTest();
        $instance->checkTransitions();
        $this->assertNameEquals($testTransition->getTargetState(), $instance->getCurrentState());
    }
}
