<?php
	class Cat {
		public $firstName;
		public $lastName;
		public $gender = "male";
		public $price = "0";

		function getName() {
		return "{$this->firstName}" .
		"{$this->lastName}";
	}
}

	class Tiger {
		public $firstName = "";
		public $lastName = "";
		public $gender = "female";
		public $price = "$100,000";

		function getName() {
		return "{$this->firstName}" .
		"{$this->lastName}";
	}
}
		$tiger1 = new Tiger();
		$tiger1->firstName = "Juanita ";
		$tiger1->lastName = "Lopez";
		print "The cats name is {$tiger1->getName()}. ";

	class Elephant {
		public $firstName = "";
		public $lastName = "";
		public $gender = "male";
		public $price = "$100,000,000";

		function getName() {
		return "{$this->firstName}" .
		"{$this->lastName}";
	}
}
		$elephant1 = new Elephant();
		$elephant1->firstName = "Junior ";
		$elephant1->lastName = "Rodriguez";
		print "The cats name is {$elephant1->getName()}.";


	class Cat2 {
		public $firstName;
		public $lastName;
		public $breed;
			
			function __construct($title, $firstName, $lastName, $breed) {
			$this->Juan = $firstName;
			$this->Carlos = $lastName;
			$this->siamese = $breed;
			}

			function getName() {
			return "{$this->firstName}" .
			"{$this->lastName}";
			}
}


	class Tiger2 {
		public $firstName;
		public $lastName;
		public $breed;
			
			function __construct($title, $firstName, $lastName, $breed) {
			$this->Juanita = $firstName;
			$this->Rodriguez = $lastName;
			$this->siberian = $breed;
			}

			function getName() {
			return "{$this->firstName}" .
			"{$this->lastName}";
			}
}


// 
// 	if (is_integer('1'))echo "It is an integer )";
// 	else
// 	echo 'It is not an integer';
// 	var_dump(is_integer('2'));
// 	var_dump(is_integer('3'));
// 	var_dump(is_integer('4'));
// 	var_dump(is_integer('5'));
// 

// 
// 	if (is_integer('1'))echo "It is an integer )";
// 	else
// 	echo 'It is not an integer';
// 	var_dump(is_integer('2'));
// 	var_dump(is_integer('3'));
// 	var_dump(is_integer('4'));
// 	var_dump(is_integer('5'));
// 
// 	if (is_integer('1'))echo "It is an integer )";
// 	else
// 	echo 'It is not an integer';
// 	var_dump(is_integer('2'));
// 	var_dump(is_integer('3'));
// 	var_dump(is_integer('4'));
// 	var_dump(is_integer('5'));
// ?>

