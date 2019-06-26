<?php

declare(strict_types=1);

namespace MetaborStd\Tests;

use MetaborStd\NamedInterface;
use PHPUnit\Framework\TestCase;

/**
 * NamedInterface test case.
 */
abstract class NamedInterfaceTest extends TestCase
{
    /**
     * @return NamedInterface
     */
    abstract protected function createTestInstance(): NamedInterface;

    public function testHasAName(): void
    {
        $instance = $this->createTestInstance();
        $name = $instance->getName();
        $this->assertIsString($name);
        $this->assertNotEmpty($name);
    }
}
