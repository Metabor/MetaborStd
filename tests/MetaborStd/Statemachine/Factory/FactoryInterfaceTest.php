<?php
namespace MetaborStd\Statemachine\Factory;

/**
 * 
 * @author Oliver Tischlinger
 *
 */
abstract class FactoryInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return \MetaborStd\Statemachine\Factory\FactoryInterface
     */
    abstract protected function createTestInstance();

    /**
     * 
     */
    abstract protected function getSubject();

    /**
     * 
     */
    public function testCreatesAStatemachineInstanceForTheSubject()
    {
        $instance = $this->createTestInstance();
        $subject = $this->getSubject();
        $statemachine = $instance->createStatemachine($subject);
        $this->assertInstanceOf('\MetaborStd\Statemachine\StatemachineInterface', $statemachine);
    }
}
