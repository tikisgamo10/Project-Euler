<?php
	$start = microtime(true);
	function addNumsAsArray($number, $number_2){
		$result = array();
		$min_count = min(count($number), count($number_2));
		$max_count = max(count($number), count($number_2));
		if($max_count === count($number)){
			$bigger_array = $number;
		}else{
			$bigger_array = $number_2;
		}

		for($i = 0; $i < $max_count; $i++){
			$result[$i] = 0;
		}

		for($i = 0; $i < $min_count; $i++){
			$temp = (isset($result[$i])) ? $result[$i] + $number[$i] + $number_2[$i] : $number[$i] + $number_2[$i];
			if($temp > 9){
				$result[$i] = $temp % 10;
				$result[$i + 1] = 1;
			}else{
				$result[$i] = $temp;
			}
		}

		for($i = $min_count; $i < $max_count; $i++){
			$temp = (isset($result[$i])) ? $result[$i] + $bigger_array[$i] : $bigger_array[$i];
			if($temp > 9){
				$result[$i] = $temp % 10;
				$result[$i + 1] = 1;
			}else{
				$result[$i] = $temp;
			}
		}

		return $result;
	}


	$nums = array();
	for($i=0; $i<100; $i++){
		/**
		 * file_get_contents reads line by line (50 characters, with the offset accounting for carriage return and returns a string which is read by str_split and splits an individual string
		 * into an array with a single number in each entry
		 */
		$nums[] = str_split(file_get_contents('Euler13-resource.txt', NULL, NULL, $i * 51, 50), 1);
	}

	/**
	 * Flip the array since we want our indices to go from right (0) to left (50) as we want numbers to grow on the left.
	 */
	for($i=0; $i<26; $i++){
		for($j = 0; $j < 100; $j++){
			$temp = $nums[$j][$i];
			$nums[$j][$i] = $nums[$j][49-$i];
			$nums[$j][49-$i] = $temp;
		}
	}

	$result = addNumsAsArray($nums[0], $nums[1]);
	for($i = 2; $i < 100; $i++){
		$result = addNumsAsArray($result, $nums[$i]);
	}

	for($i = count($result) - 1; $i >= 0; $i--){
		echo "$result[$i]";
	}
	echo "\n" . "Result took: " . (microtime(true) - $start) . " seconds to run.\n";



