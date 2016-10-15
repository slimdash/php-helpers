<?php

class EnvFunctionsTest extends PHPUnit_Framework_TestCase {
	public function test_env_returns_default_value() {
		$result = env('hi', 'default');

		$this->assertEquals($result, 'default');
	}
}
