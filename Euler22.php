<?php
	
	$value_of_letters = array(
		1 => 'A',
		2 => 'B',
		3 => 'C',
		4 => 'D', 
		5 => 'E',
		6 => 'F',
		7 => 'G',
		8 => 'H',
		9 => 'I', 
		10 => 'J',
		11 => 'K',
		12 => 'L',
		13 => 'M',
		14 => 'N', 
		15 => 'O',
		16 => 'P',
		17 => 'Q',
		18 => 'R',
		19 => 'S', 
		20 => 'T',
		21 => 'U',
		22 => 'V',
		23 => 'W',
		24 => 'X', 
		25 => 'Y',
		26 => 'Z'
		);

	$file_contents = file_get_contents('names.txt');

	if($file_contents){

		$names = explode(",", $file_contents);
		$names = str_replace('"', "", $names);
		if(!sort($names, SORT_STRING | SORT_FLAG_CASE)){
			throw new Exception('Error sorting');
		}

		$score = 0;

		$num_names = count($names);
		for($i = 0; $i < $num_names; $i++){
			$name = $names[$i];
			$name_as_array = str_split($name);
			$temp = 0;
			foreach($name_as_array as $letter){
				$temp += array_search($letter, $value_of_letters);
			}
			$score += $temp * ($i + 1);
		}

		echo "Score: {$score}\n";
	}else{
		throw new Exception('Error reading from file');
	}













