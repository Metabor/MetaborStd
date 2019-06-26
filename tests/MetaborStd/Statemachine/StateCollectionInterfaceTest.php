<?php

declare(strict_types=1);

namespace MetaborStd\Tests\Statemachine;

use MetaborStd\Statemachine\StateCollectionInterface;
use MetaborStd\Statemachine\StateInterface;
use PHPUnit\Framework\TestCase;

/**
 * @author Oliver Tischlinger
 */
abstract class StateCollectionInterfaceTest extends TestCase
{
    /**
     * @return StateCollectionInterface
     */
    abstract protected function createTestInstance(): StateCollectionInterface;

    /**
     * @return string
     */
    abstract protected function getOneStateNameOfTheCollection(): string;

    public function testContainsStates(): void
    {
        $instance = $this->createTestInstance();
        $states = $instance->getStates();
        $this->assertIsIterable($states);
        $this->assertContainsOnlyInstancesOf(StateInterface::class, $states);
    }

    public function testCanReplyIfItContainsAStateByName(): void
    {
        $instance = $this->createTestInstance();
        $name = $this->getOneStateNameOfTheCollection();
        $hasState = $instance->hasState($name);
        $this->assertTrue($hasState);
    }

    public function testReturnsAStateByName(): void
    {
        $instance = $this->createTestInstance();
        $name = $this->getOneStateNameOfTheCollection();
        $state = $instance->getState($name);
        $this->assertInstanceOf(StateInterface::class, $state);
    }
}
