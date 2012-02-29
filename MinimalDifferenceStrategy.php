<?php

class MinimalDifferenceStrategy implements StrategyInterface {
	public function reduce(array $lines) {
		$globalDiff = PHP_INT_MAX;
		$selection = array_shift($lines);
		foreach ($lines as $line) {
			$currentDiff = abs($line->getArg1() - $line->getArg2());
			if ($currentDiff < $globalDiff) {
				$selection = $line;
				$globalDiff = $currentDiff;
			}
		}
		return $selection;
	}
}