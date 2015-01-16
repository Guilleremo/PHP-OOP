<?php
class Animals {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;

	function __construct($scientificName, $firstName, $lastName, $gender, $weight) {
		$this->scientificName = $scientificName;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->weight = $weight;
	}

	function getName() {
		return "my " . $this->firstName .
		" and " . $this->lastName;
		"and this is my scientificName".$this->$scientificName;
	}
}

class Cat extends Animals {
	function __construct($scientificName, $firstName, $lastName, $gender, $weight){
			parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
		$this->weight = $weight;
	}
	function greet() {
		return $this->weight;
	}
}

class Dog extends Animals {
	function __construct($scientificName, $firstName, $lastName, $gender, $weight){
			parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
		$this->weight = $weight;
	}
	function hello() {
		return $this->weight;
	}
}


$cat = new Cat("Cat", "Mellow", "Yellow. ", "male", "15");
print "Animal 1 is " . $cat->getName();
?>

<?php
class School {
	public $name;
	public $district;
	public $bathrooms;
	public $classrooms;
	public $teachers;
	public $students;
	public $parents;

	function __construct($name, $district, $bathrooms, $classrooms, $teachers, $students, $parents) {
		$this->name = $name;
		$this->district = $district;
		$this->bathrooms = $bathrooms;
		$this->classrooms = $classrooms;
		$this->teachers = $teachers;
		$this->students = $students;
		$this->parents = $parents;
	}

	function getName() {
		return "I am " . $this->name .
		" and I am district " . $this->lastName;
		"and I have ".$this->$classrooms;
	}
}

class Teachers extends School {
	function __construct($name, $district, $bathrooms, $classrooms, $teachers, $students, $parents){
			parent::__construct($name, $district, $bathrooms, $classrooms, $teachers, $students, $parent);
		$this->homework = $homework;
	}
	function greet() {
		return $this->hello;
	}
}

class Parents extends School {
	function __construct($name, $district, $bathrooms, $classrooms, $teachers, $students, $parents){
			parent::__construct($name, $district, $bathrooms, $classrooms, $teachers, $students, $parent);
		$this->feedback = $feedback;
	}
	function hello() {
		return $this->feedback;
	}

}


// $parent = new Parent("Father", "Worried", "Mexican", "male", "45");
// print "My parent's name is " . $parent->getName();
?>

<?php
class Animal {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;

	function __construct($scientificName, $firstName, $lastName, $gender, $weight) {
		$this->scientificName = $scientificName;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->weight = $weight;
	}

	function getName() {
		return " a " . $this->firstName .
		" and " . $this->lastName;
		"and this is my scientificName".$this->$scientificName;
	}
}


class Tiger extends Animal {
	function __construct($scientificName, $firstName, $lastName, $gender, $weight){
			parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
		$this->weight = $weight;
	}
	function greet() {
		return $this->weight;
	}
}

$tiger = new Tiger("Hyper", "Tiger", "Striped.", "male", "5");
print "My animal is " . $tiger->getName();
?>
