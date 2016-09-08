<?php

namespace Bee\Tests\PHP\Model;
use Bee\PHP\Test\Contract\Type;
use Prophecy\Argument;
use TheSeer\DirectoryScanner\Exception;

class ContractTest extends \PHPUnit_Framework_TestCase
{
    public function test_it_can_construct_bee_type()
    {
        $bee_type = new Type('Queen');
        $this->assertInstanceOf('Bee\PHP\Test\Contract\Type', $bee_type);
        $this->assertEquals('Queen', $bee_type->getName());
    }

    /**
     * @expectedException     Exception
     */
    public function test_it_will_throw_exception_upon_setting_an_invalid_name()
    {
        $bee_type = new Type('Lion');
    }
}
