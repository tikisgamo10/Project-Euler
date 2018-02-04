<?php

	/*
	|------------------------------------------------------
	| Find the pythagorean triplet for whoc==ich a + b + c = 1000
	|------------------------------------------------------
	|
	*/

	function isPythagoreanTriplet($i, $j){
		$c = sqrt($i * $i + $j * $j);
		if(ceil($c) === $c){
			return $c;
		}
		return false;
	}

	for($i = 1; $i < 1000; $i++){
		for($j = $i; $j < 1000; $j++){
			if(isPythagoreanTriplet($i, $j) !== false){
				$c = isPythagoreanTriplet($i, $j);
				if($i + $j + $c == 1000){
					echo "Triplet is: {$i}, {$j}, ${c}";
					die();
				}

			}
		}
	}
	echo "Not found";