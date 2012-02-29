<?php

require_once('myautoload.php');

$strategy = new MinimalDifferenceStrategy();
$solverFootball = new Solver(new FootballData(new SplFileInfo(__DIR__ . "/football.dat")), $strategy);
echo $solverFootball->solve();

$solverWeather = new Solver(new WeatherData(new SplFileInfo(__DIR__ . "/weather.dat")), $strategy);
echo $solverWeather->solve();

