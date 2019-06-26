<?php

declare(strict_types=1);

namespace MetaborStd\Tests\Statemachine\Factory;

use MetaborStd\Statemachine\Factory\FactoryInterface;
use MetaborStd\Statemachine\StatemachineInterface;
use PHPUnit\Framework\TestCase;

/**
 * @author Oliver Tischlinger
 */
abstract class FactoryInterfaceTest extends TestCase
{
    /**
     * @return FactoryInterface
     */
    abstract protected function createTestInstance(): FactoryInterface;

    /**
     * @return object
     */
    abstract protected function getSubject(): object;

    public function testCreatesAStatemachineInstanceForTheSubject(): void
    {
        $instance = $this->createTestInstance();
        $subject = $this->getSubject();
        $statemachine = $instance->createStatemachine($subject);
        $this->assertInstanceOf(StatemachineInterface::class, $statemachine);
    }
}
