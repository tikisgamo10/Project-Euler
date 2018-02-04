<?php
/*
|------------------------------------------------------
| Find the sum of all the multiples of 3 or 5 below 1000
|------------------------------------------------------
|
*/


function divisibleByThreeOrFive($number){
	if($number % 3 === 0 or $number % 5 === 0){
		return true;
	}
	return false;
}

$sum = 0;

for($i = 0; $i < 1000; $i++){
	if(divisibleByThreeOrFive($i)){
		$sum += $i;
	}
}

echo $sum;
echo "\n\n";
