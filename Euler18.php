<?php
	$start = microtime(true);


	$file = fopen('Euler18-resource.txt', 'r');
	$triangle = array();
	$counter = 0;
	if($file){
		while(($line = fgets($file)) !== false){
			$line = explode(' ', $line);
			foreach ($line as $num){
				$triangle[] = trim($num);
			}
			for($j = $counter + 1; $j < 15; $j++){
				$triangle[$counter * 15 + $j] = "00";
			}
			$counter++;
		}
	}

	$max_sum = 0;


	function findMaxSum($i, $j, $sum){
		if($i === 15){
			global $max_sum;
			if($sum > $max_sum){
				$max_sum = $sum;
			}
		}else{
			global $triangle;
			$sum += $triangle[$i * 15 + $j];
			findMaxSum($i+1, $j, $sum);
			findMaxSum($i+1, $j+1, $sum);
		}
	}

	findMaxSum(0, 0, 0);

	echo "Max sum: $max_sum \n";

	echo "Program ran in " . (microtime(true) - $start) . " seconds\n";