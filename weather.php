<?php
require_once('autoload.php');
$argv = $_SERVER['argv'];
list($command, $file) = $argv;

$parser = new Parser($file);
$result = $parser->parse();

echo sprintf('Result: day %d (min %d, max %d)', $result[0], $result[1], $result[2]);