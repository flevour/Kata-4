<?php

class Solver {
	private $data, $strategy;
	public function __construct(DataInterface $data, StrategyInterface $strategy) {
		$this->data = $data;
		$this->strategy = $strategy;
	}

	public function solve() {
		$lines = $this->data->getLines();
		$result = $this->strategy->reduce($lines);
		return sprintf("Result: %s", (string) $result);
	}
}