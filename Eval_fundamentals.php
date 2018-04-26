<?php 
	/*
		Created by: Mark Angelo Resma Gonzales
		on:4/26/2018 MM-DD-YY
		Title: Loading Station OOP CONCEPT
		Special thanks to: Traversy

		Follow me on my accounts:

		Instagram:instagram/qwevoc
		Facebook:facebook/markangelogonzales13
		Git: github/chromaticphdevs
		or message me at gonzalesmarkangeloph@gmail.com
	*/

	class LoadSource{

		protected $name;
		protected $number;
		protected static $numLength = 11;


		//Set the username and the numberr
		public function __construct($name,$number){
			//check if the given number is valid
			if(self::checkNumber($number)){
				$this->name = $name;
				$this->number = $number;
			}
		}

		//Check if number if valid
		public static function checkNumber($number){

			if(strlen($number) == self::$numLength){
				return true;
			}
			else{
				return false;
			}
		}

	}

	class LoadInformation extends LoadSource{
		protected $balance = 0;

		//calling the parent construct
		public function __construct($name,$number,$balance){
			$this->balance = $balance;
			parent::__construct($name,$number);
		}

		//setting magic get method for every property
		public function __get($property){
			if(property_exists($this, $property)){
				return $this->$property;
			}
		}
	}
	$number = '09126485778';

	$user1 = new LoadInformation('Mark',$number,300);

	echo $user1->__get('balance') . " your name is " .$user1->__get('name');

	#output::300 your name is Mark
?>