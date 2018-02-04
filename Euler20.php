<?php 

class Number
{
	protected $number;

	function __construct(Array $number){
		$this->number = $number;
	}

	public function printNumber(){
		$count = count($this->number);
		for($i = $count-1; $i >= 0; $i--){
			echo "{$this->number[$i]}";
		}
	}

	public function sumOfDigits(){
		$count = count($this->number);
		$sum = 0;
		for($i = $count-1; $i >= 0; $i--){
			$sum += $this->number[$i];
		}
		return $sum;
	}

	public function multiplyBy($factor){
		$count = count($this->number);
		$result = array();
		for($i = 0; $i < $count; $i++){
			$result[$i] = 0;
		}


		for($i = 0; $i < $count; $i++){
			/*$result_number = new Number($result);
			echo "Multiplying {$factor} by {$this->number[$i]} with partial result: ";
			$result_number->printNumber();*/
			if(($this->number[$i] * $factor) + $result[$i] > 9){
				$j = $i;
				$temp = $this->number[$i] * $factor + $result[$i];
				while($temp > 0){
					if($i !== $j){
						$temp = (isset($result[$j])) ?  $result[$j] + $temp : $temp;
					}
					$result[$j] = $temp % 10;
					$temp -= $temp % 10;
					$temp /= 10;
					$j++;
				}
			}else{
				$result[$i] += $this->number[$i] * $factor;
			}
			/*echo " results in: ";
			$result_number = new Number($result);
			$result_number->printNumber();
			echo "\n";*/
		}
		$this->number = $result;
		return $this;
	}
}

$number = new Number([1]);

for($i = 2; $i < 101; $i++){
	$number->multiplyBy($i);
}

echo $number->sumOfDigits();
















