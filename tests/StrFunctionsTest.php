<?php

class StrFunctionsTest extends PHPUnit_Framework_TestCase
{
    public function testStrSlugify()
    {
        $result = str_slugify('What\'s my name?');

        $this->assertEquals($result, 'what-s-my-name');
    }
}
