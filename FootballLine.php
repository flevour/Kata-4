<?php
class FootballLine implements LineInterface {
	private $line, $name, $arg1, $arg2;

	public function __construct($line) {
		$this->line = $line;
		$this->initialize();
	}

	private function initialize() {
		$pieces = array_filter(explode(' ', $this->line));
		$pieces = array_slice($pieces, 0); // reset keys
		$this->name = $pieces[1];
		$this->arg1 = $pieces[6];
		$this->arg2 = $pieces[8];
	}

	public function getName() {
		return $this->name;
	}

	public function getArg1() {
		return $this->arg1;
	}

	public function getArg2() {
		return $this->arg2;
	}


	public function __toString() {
		return sprintf('team %s (min %d, max %d)', $this->name, $this->arg1, $this->arg2);
	}
}