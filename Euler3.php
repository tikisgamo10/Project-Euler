<?php

	/*
	|------------------------------------------------------
	| Find the largest prime factor of 600851475143
	|------------------------------------------------------
	|
	*/

	define("NUM_INPUT", 600851475143);

		$largestPrime = 1;
		$quotient = NUM_INPUT;

		for($i = 2; $i < ceil(sqrt(NUM_INPUT)); $i++){
			if($quotient % $i === 0){
				$largestPrime = $i;
				$quotient = $quotient / $i;
			}
		}

		echo "The largest prime factor is: {$largestPrime}\n\n";
