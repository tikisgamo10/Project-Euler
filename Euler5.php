<?php

	/*
	|------------------------------------------------------
	| Find the smallest positive number that is evenly divisble by all integers from 1 to 20
	|------------------------------------------------------
	|
	*/

	$tests = array(14, 15, 16, 17, 18, 19, 20);
	define("MAX_ITERATIONS", 100000000000);

	function isDivisibleBy(Array $tests, $number){

		foreach($tests as $test){
			if($number % $test !== 0){
				return false;
			}
		}
		return true;
	}


	$largest = "error";

	//2520 is the smallest number divisible by numbers 1 through 20
	//So it is safe to assume we need a bigger number



	$start = microtime(true);

	/*
	|------------------------------------------------------
	| 2520 is the smallest number divisible by numbers 1-10. Since it is not divisible by 11 it
	| the number we are looking for is > 2520. Since 11 * 12 * 13 = 1716 < 2520, we may take steps of this size
	| and avoid checking every number. (Taking steps of this size means we don't need to check for
	| divisibility by these numbers as it is given by our method.
	|------------------------------------------------------
	|
	*/
	$step = 11 * 12 *13;
	$i = 0;
	while($i < MAX_ITERATIONS){
		if(isDivisibleBy($tests, $i) and $i !== 0){
			$start = microtime(true) - $start;
			echo "The smallest number that is evenly divisible by all numbers from 1 to 20 is:\n {$i}\n";
			echo"\nSolution took: {$start} seconds\n";
			die();
		}
		$i = $i + $step;
	}
echo "Did not work!\n";


