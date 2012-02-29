<?php

class FootballData implements DataInterface {
	private $file;

	public function __construct(SplFileInfo $file) {
		$this->file = $file;
		$this->initialize();
	}

	public function getLines() {
		return $this->lines;
	}

	private function initialize() {
		$lines = file($this->file->getPathName());
		$lines = array_filter($lines, function($line) {
			return preg_match('/^\d+\./', trim($line));
		});
		$lines = array_map(function($line) {
			return new FootballLine($line);
		}, $lines);
		$this->lines = $lines;
	} 
}