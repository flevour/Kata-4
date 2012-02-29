<?php

interface DataInterface {
	public function __construct(SplFileInfo $file);

	/**
	 * Returns an array of LineInterface.
	 */
	public function getLines();	
}