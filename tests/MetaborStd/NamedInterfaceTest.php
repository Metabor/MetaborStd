<?php

namespace MetaborStd;

/**
 * NamedInterface test case.
 */
abstract class NamedInterfaceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @return \MetaborStd\NamedInterface
     */
    abstract protected function createTestInstance();

    /**
     *
     */
    public function testHasAName(): void
    {
        $instance = $this->createTestInstance();
        $name = $instance->getName();
        $this->assertIsString($name);
        $this->assertNotEmpty($name);
    }
}
