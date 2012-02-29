<?php
require_once(__DIR__ . "/../myautoload.php");

class FootballDataTest extends PHPUnit_Framework_TestCase
{

    public function testGetLines()
    {
    	$reader = new FootballData(new SplFileInfo(__DIR__ . "/../football.dat"));
    	$lines = $reader->getLines();
    	$this->assertEquals(20, count($lines));
    }
}