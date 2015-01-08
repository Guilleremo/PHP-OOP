<?php
	class Cat {
		public $firstName = "Juan";
		public $lastName = "Carlos";
		public $gender = "male";
		public $price = "0";

		function getName() {
		return “{$this->firstName}” .
		“{$this->lastName}”;
	}
}
		$cat1 = new Cat();
		$cat1->firstName = "Juan";
		$cat1->lastName = "Carlos";
		print "The cat’s name is {$cat1>getName()}.";

	class Tiger {
		public $firstName = "Juanita";
		public $lastName = "Lopez";
		public $gender = "female";
		public $price = "$100,000";

		function getName() {
		return “{$this->firstName}” .
		“{$this->lastName}”;
	}
}
		$tiger1 = new Tiger();
		$tiger1->firstName = "Juanita";
		$tiger1->lastName = "Lopez";
		print "The cat’s name is {$tiger1>getName()}.";

	class Elephant {
		public $firstName = "Junior";
		public $lastName = "Rodriguez";
		public $gender = "male";
		public $price = "$100,000,000";

		function getName() {
		return “{$this->firstName}” .
		“{$this->lastName}”;
	}
}
		$elephant1 = new Elephant();
		$elephant1->firstName = "Junior";
		$elephant1->lastName = "Rodriguez";
		print "The cat’s name is {$elephant1>getName()}.";


	class Cat {
		public $firstName;
		public $lastName;
		public $breed;
			
			function __construct($title, $firstName, $lastName, $breed) {
			$this->Juan = $firstName;
			$this->Carlos = $lastName;
			$this->siamese = $breed;
			}

			function getName() {
			return "{$this­>firstName}" .
			"{$this­>lastName}";
			}
}


	class Tiger {
		public $firstName;
		public $lastName;
		public $breed;
			
			function __construct($title, $firstName, $lastName, $breed) {
			$this->Juanita = $firstName;
			$this->Rodriguez = $lastName;
			$this->siberian = $breed;
			}

			function getName() {
			return "{$this­>firstName}" .
			"{$this­>lastName}";
			}
}

