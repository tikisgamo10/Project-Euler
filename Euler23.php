<?php

	function getProperDivisors($number){
		if($number === 1){
			return array(0);
		}
		$half = ceil($number/2);
		$properDivisors = array();
		for($i=1; $i < $half + 1; $i++){
			if($number % $i === 0){
				$properDivisors[] = $i;
			}
		}

		return $properDivisors;
	}

	$abundant_numbers = array();

	for($i = 2; $i < 28124; $i++){
		if(array_sum(getProperDivisors($i)) > $i){
			$abundant_numbers[] = $i;
		}
	}


	for($i = 1; $i < 28124; $i++){
		$sieve[$i] = false;
	}

	$num_of_abundant_numbers = count($abundant_numbers);

	for($i = 0; $i < $num_of_abundant_numbers; $i++){
		for($j = $i; $j < $num_of_abundant_numbers; $j++){
			$sieve[$abundant_numbers[$i] + $abundant_numbers[$j]] = true;
		}
	}

	$sum = 0;

	for($i = 1; $i < 28124; $i++){
		if($sieve[$i] === false){
			$sum += $i;
		}
	}

	echo "The sum is {$sum}\n";






