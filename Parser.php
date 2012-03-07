<?php

class Parser {
	private $filename;
	public function __construct($filename) {
		$this->filename = $filename;
	}
	public function parse() {
		$lines = file($this->filename);
		$lines = array_slice($lines, 8);
		$pieces = array_filter(explode(' ', $lines[0]));
		$pieces = array_merge($pieces); // reset index
		list($day, $max, $min, $other) = $pieces;
		return array(1, $min, $max);
	}
}