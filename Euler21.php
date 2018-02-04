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

$amicable_numbers = array();

for($i = 2; $i < 10000; $i++){
	$possible_amicable_pair = array_sum(getProperDivisors($i));
	if (array_sum(getProperDivisors($possible_amicable_pair)) === $i and $possible_amicable_pair !== $i){
		$amicable_numbers[] = $i;
	}
}

echo array_sum($amicable_numbers);
echo "\n";

