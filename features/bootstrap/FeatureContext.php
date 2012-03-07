<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;


require_once(__DIR__ . "/../../autoload.php");
//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param   array   $parameters     context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @Given /^there is a "([^"]*)" file$/
     */
    public function thereIsAFile($filename)
    {
        $content =<<<WEATHER
(Unofficial, Preliminary Data). Source: <a
href="http://www.erh.noaa.gov/er/box/dailystns.html">www.erh.noaa.gov/er/box/dailystns.html</a>

<pre>
 MMU June 2002

  Dy MxT   MnT   AvT   HDDay  AvDP 1HrP TPcpn WxType PDir AvSp Dir MxS SkyC MxR MnR AvSLP

   1  88    59    74          53.8       0.00 F       280  9.6 270  17  1.6  93 23 1004.5
WEATHER;
        file_put_contents($filename, $content);
    }

    /**
     * @Given /^there is a "([^"]*)" file with min temp (\d+) and max temp (\d+)$/
     */
    public function thereIsAFileWithMinTempAndMaxTemp($filename, $min, $max)
    {
        $content =<<<WEATHER
(Unofficial, Preliminary Data). Source: <a
href="http://www.erh.noaa.gov/er/box/dailystns.html">www.erh.noaa.gov/er/box/dailystns.html</a>

<pre>
 MMU June 2002

  Dy MxT   MnT   AvT   HDDay  AvDP 1HrP TPcpn WxType PDir AvSp Dir MxS SkyC MxR MnR AvSLP

   1  $max    $min    74          53.8       0.00 F       280  9.6 270  17  1.6  93 23 1004.5
WEATHER;
        file_put_contents($filename, $content);    }


    /**
     * @When /^I execute "([^"]*)"$/
     */
    public function iExecute($command)
    {
        $output = shell_exec($command);
        $this->output = $output;
    }

    /**
     * @Then /^I should see "([^"]*)"$/
     */
    public function iShouldSee($argument1)
    {
        if ($this->output != $argument1) {
            throw new Exception('diversi');
        }
    }

    /**
     * @When /^I pass "([^"]*)" to a class Parser$/
     */
    public function iPassToParser($filename)
    {
        $this->parser = new Parser($filename);
    }

    /**
     * @Then /^I should get an array with elements "([^"]*)", "([^"]*)", "([^"]*)"$/
     */
    public function iShouldGetAnArrayWithElements($argument1, $argument2, $argument3)
    {
        $result = $this->parser->parse();
        $array = func_get_args();
        if ($result != $array) {
            throw new Exception('array diversi');
        }
    }
}
