<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
    public function testGetName()
    {
        $user = new App\User;

        $user->setName("Suntiparb");
        $result = $user->getName();

        $this->assertEquals("Suntiparb", $result);
    }
}
