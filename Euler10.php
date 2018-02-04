<?php

	/*
	|------------------------------------------------------
	| Find the sum of all primes below two million
	|------------------------------------------------------
	|
	*/

	define("MAX_NUMBER", 2000000);

	$primes = array();
	$sqrt = ceil(sqrt(MAX_NUMBER));


	for($i = 2; $i < MAX_NUMBER; $i++){
		$primes[$i] = true;
	}

	for($i = 2; $i < $sqrt; $i++){
		for($j = 2; $i * $j < MAX_NUMBER; $j++){
			$primes[$i * $j] = false;
		}
	}

	$sum = 0;

	foreach($primes as $number => $prime){
		if($prime){
			$sum += $number;
		}
	}

	echo "The sum is {$sum}\n";