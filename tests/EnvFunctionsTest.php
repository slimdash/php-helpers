<?php

class EnvFunctionsTest extends PHPUnit_Framework_TestCase
{
    public function testEnvReturnsDefaultValue()
    {
        $result = env('hi', 'default');

        $this->assertEquals($result, 'default');
    }
}
