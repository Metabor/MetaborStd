<?php
namespace MetaborStd;
/**
 * NamedInterface test case.
 */
abstract class NamedInterfaceTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @return \MetaborStd\NamedInterface
     */
    abstract protected function createTestInstance();

    /**
     * 
     */
    public function testHasAName()
    {
        $instance = $this->createTestInstance();
        $name = $instance->getName();
        $this->assertInternalType('string', $name);
        $this->assertNotEmpty($name);
    }

}
