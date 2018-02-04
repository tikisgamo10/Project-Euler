<?php

	/*
	|------------------------------------------------------
	| Find the sum of the even-valued Fibonnaci numbers whose value does not exceed 4 million
	|------------------------------------------------------
	|
	*/


	$fib1 = $fib2 = 1;
	$sum = 0;

	function getNextFibonnaci(&$fib1, &$fib2){
		$temp = $fib1 + $fib2;
		$fib1 = $fib2;
		$fib2 = $temp;
		return $fib2;
	}

	while(getNextFibonnaci($fib1, $fib2) < 4000000){
		if($fib2 % 2 === 0){
			$sum += $fib2;
		}
	}

	echo "The sum is: {$sum}\n\n";