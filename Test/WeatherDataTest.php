<?php
require_once(__DIR__ . "/../myautoload.php");

class WeatherDataTest extends PHPUnit_Framework_TestCase
{

    public function testGetLines()
    {
    	$reader = new WeatherData(new SplFileInfo(__DIR__ . "/../weather.dat"));
    	$lines = $reader->getLines();
    	$this->assertEquals(31, count($lines));
    }
}