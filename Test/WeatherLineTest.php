<?php

class WeatherLineTest extends PHPUnit_Framework_TestCase {
	public function testShouldIsolateDataCorrectly() {
		$line = new WeatherLine('   1  88    59    74          53.8       0.00 F       280  9.6 270  17  1.6  93 23 1004.5');
		$this->assertEquals('1', $line->getName());
		$this->assertEquals(88, $line->getArg1());
		$this->assertEquals(59, $line->getArg2());
	}
}