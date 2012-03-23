<?php

use Flevour\Kata\Four\Football\Application;

class ApplicationTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Application
     */
    protected $app;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->app = new Application;
    }

    /**
     * @test
     * @dataProvider dataProviderShouldPrintResultWhenRunWithFilename
     */
    public function shouldPrintResultWhenRunWithFilename($filename, $expectation)
    {
        $result = $this->app->run($filename);
        $this->assertEquals($expectation, $result);
    }
    
    public function dataProviderShouldPrintResultWhenRunWithFilename() {
        return array(
            array('file-1.dat', "Result: 1"),
            array('file-2.dat', "Result: 2"),
        );
    }

}
