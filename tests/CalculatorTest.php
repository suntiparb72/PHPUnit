<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testAdd()
    {
        $calc = new App\Calculator;
        $result = $calc->add(20, 5);

        $this->assertEquals(25, $result);
    }

    public function testDevide()
    {
        $calc = new App\Calculator;
        $result = $calc->subtract(20, 10);

        $this->assertEquals(10, $result);
    }

}
