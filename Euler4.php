<?php

	/*
	|------------------------------------------------------
	| Find the largest palindrome made from the product of two 3-digit numbers
	|------------------------------------------------------
	|
	*/


	function isPalindrome($number){
		$reverse = 0;
		$original = $number;
		while($number > 1){
			$reverse = ($reverse * 10) + ($number % 10);
			$number = intdiv($number, 10);
		}
		if($reverse == $original){
			return true;
		}
		return false;
	}

	$largestPalindrome = 1;

	for($i = 1; $i < 1000; $i++){
		for($j=$i; $j < 1000; $j++){
			if(isPalindrome($i * $j) and $i * $j > $largestPalindrome){
				$largestPalindrome = $i * $j;
			}
		}
	}

	echo "The largest palindrome made as the product is {$largestPalindrome}\n";