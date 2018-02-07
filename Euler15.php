<?php

	$start = microtime(true);

	/**
	 * See Euler15Note.pdf for explanation of code
	 */


	$n = isset($argv[1]) ? $argv[1] : 20;

	$result = 1;

	/**
	 * Calculates 2^n
	 */
	for($i = 0; $i < $n; $i++){
		$result *= 2;
	}

	/**
	 * Calculates 2^n * 1 * 3 * ... * 2n - 1
	 */
	for($i = 1; $i <= (2*$n) - 1; $i += 2){
		$result *= $i;
	}

	/**
	 * Divides by n factorial
	 */

	for($i = 1; $i <= $n; $i++){
		$result /= $i;
	}

	echo "Number of paths: {$result}\n";
	echo "Program ran in " . (microtime(true) - $start) . " seconds\n";