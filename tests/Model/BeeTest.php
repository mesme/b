<?php

namespace Bee\Tests\PHP\Model;
use Bee\PHP\Test\Contract\Type;
use Bee\PHP\Test\Model\Bee;
use Prophecy\Argument;

class BeeTest extends \PHPUnit_Framework_TestCase
{
    public function test_it_can_construct_bee()
    {
        $bee = new Bee(100,12, new Type('Queen'));
        $this->assertInstanceOf('Bee\PHP\Test\Model\Bee', $bee);
        $this->assertInstanceOf('Bee\PHP\Test\Contract\Type', $bee->getType());
    }

    public function test_hit_will_return_true()
    {
        $bee = new Bee(100,12, new Type('Queen'));
        $this->assertTrue($bee->hit());
    }

    public function test_hit_will_return_false()
    {
        $bee = new Bee(12,12, new Type('Queen'));
        $this->assertFalse(false, $bee->hit());
        $this->assertSame($bee->getRemaining(), 0);
        $this->assertFalse(false, $bee->hit());
    }
}
