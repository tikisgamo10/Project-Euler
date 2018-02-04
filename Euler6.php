<?php

	/*
	|------------------------------------------------------
	| Find the difference between the sum of the squares of the first 100 natural numbers
	| and the square of the sum of the first 100 natural numbers
	|------------------------------------------------------
	|
	*/


		$start = microtime(true);
		$sumOfSquares = $squareOfSum = $sum = 0;

		for ($i = 1; $i <= 100; $i++){
			$sumOfSquares += ($i * $i);
			$sum += $i;
		}

		$squareOfSum = $sum * $sum;
		$difference = $squareOfSum - $sumOfSquares;
		$end = microtime(true) - $start;
		echo "The difference is: {$difference} \n";
		echo "Solution took: ${end} seconds\n";




