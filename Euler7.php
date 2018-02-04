<?php

	/*
	|------------------------------------------------------
	| Find the 10,001st prime
	|------------------------------------------------------
	|
	*/


	/*
	|------------------------------------------------------
	| Brute force mechanism to find primes
	|------------------------------------------------------
	|
	*/
	function isPrime($number, Array $foundPrimes){
		foreach($foundPrimes as $prime){
			if($number % $prime === 0){
				return false;
			}
		}
		return true;
	}

	$counter = 1;
	$num = 3;
	$primes = array();
	$primes[1] = 2;
	while($counter <= 10001){
		if(isPrime($num, $primes)){
			$primes[] = $num;
			$counter++;
		}
		$num += 2;
	}

	echo "The 10,001st prime is: {$primes[10001]}\n";



