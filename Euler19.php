<?php

	/**
	 * 1 Jan 1900 was a Monday.
	 * Thirty days has September,
	 * April, June and November.
	 * All the rest have thirty-one,
	 * Saving February alone,
	 * Which has twenty-eight, rain or shine.
	 * And on leap years, twenty-nine.
	 * A leap year occurs on any year evenly divisible by 4, but not on a century unless it is divisible by 400.
	 */

	class Month {

		protected $num_days;
		protected $current_day = 1;
		public $month_number;

		function __construct($num_days, $month_number){
			$this->num_days = $num_days;
			$this->month_number = $month_number;
		}

		public function changeDay(){

			$this->current_day = ($this->current_day + 1 > $this->num_days) ? 1 : $this->current_day + 1;
			if($this->current_day === 1){
				throw new Exception();
			}
		}

		public function getCurrentDay(){
			return $this->current_day;
		}
	}

	class Year {
		protected $months = [];
		protected $currentMonth;
		public $year;

		function __construct($year){
			$this->year = $year;
			$is_leap_year = $this->is_leap_year($this->year);
			$this->currentMonth = 1;
			$this->months[1] = new Month(31, 1);
			$this->months[2] = ($is_leap_year) ? new Month(29, 2) : new Month(28, 2);
			$this->months[3] = new Month( 31, 3);
			$this->months[4] = new Month(30, 4);
			$this->months[5] = new Month(31, 5);
			$this->months[6] = new Month(30, 6);
			$this->months[7] = new Month(31, 7);
			$this->months[8] = new Month(31, 8);
			$this->months[9] = new Month(30, 9);
			$this->months[10] = new Month(31, 10);
			$this->months[11] = new Month(30, 11);
			$this->months[12] = new Month(31, 12);
		}

		public function changeDay(){
			try{
				$this->months[$this->currentMonth]->changeDay();
			}
			catch (Exception $e){
				$this->currentMonth++;
				if($this->currentMonth > 12){
					throw new Exception();
				}
			}
		}

		public function getCurrentMonth(){
			return $this->months[$this->currentMonth];
		}

		public function is_leap_year($year){
			if($year % 4 === 0){
				if($year % 100 === 0){
					return ($year % 400 === 0) ? true : false;
				}else{
					return true;
				}
			}
			return false;
		}
	}

	$day = 2;
	$counter = 0;
	for($i = 1901; $i < 2001; $i++){
		$bool = true;
		$year = new Year($i);
		while($bool){
			if($day === 7 and $year->getCurrentMonth()->getCurrentDay() === 1){
				$counter++;
			}

			try{
				$year->changeDay();
			}
			catch(Exception $e){
				$bool = false;
			}

			$day = ($day + 1 > 7) ? 1 : $day + 1;
		}
	}

	echo "The number of sundays is: {$counter}\n";


	/*$year = new Year(1902);
	echo $year->is_leap_year(1902) ? 1 : 0;
	echo $year->is_leap_year(1903) ? 1 : 0;
	echo $year->is_leap_year(1904) ? 1 : 0;
	echo $year->is_leap_year(1905) ? 1 : 0;*/

