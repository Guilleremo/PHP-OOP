<?php
class Animals {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;
	public $bark;
	public $meow;

	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark, $meow) {
		$this->scientificName = $scientificName;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->weight = $weight;
		$this->bark = $bark;
		$this->meow = $meow;
	}

	function getName() {
		return "This is my " . $this->firstName .
		" and last " . $this->lastName;
		"and this is my scientificName".$this->$scientificName;
	}


class Cat extends Animals {
	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $meow){
			parent::__construct($scientificName, $firstName, $lastName, $gender, $weight, $meow);
		$this->meow = $meow;
	}
	function greet() {
		return $this->meow;
	}
}

class Dog extends Animal {
	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark){
			parent::__construct($scientificName, $firstName, $lastName, $gender, $weight, $bark);
		$this->bark = $bark;
	}
	function hello() {
		return $this->bark;
	}
}


$cat = new Cat("Cat", "Mellow", "Yellow", "male", "15");
print "Animal 1 is a " . $cat->getName();
?>

<?php
class School {
	public $name;
	public $district;
	public $bathrooms;
	public $classrooms;
	public $teachers;
	public $students;
	public $parents;

	function __construct($name, $district, $bathrooms, $classrooms, $teachers, $students, $parents) {
		$this->name = $name;
		$this->district = $district;
		$this->bathrooms = $bathrooms;
		$this->classrooms = $classrooms;
		$this->teachers = $teachers;
		$this->students = $students;
		$this->parents = $parents;
	}

	function getName() {
		return "I am " . $this->name .
		" and I am district " . $this->lastName;
		"and I have ".$this->$classrooms;
	}


class Teachers extends School {
	function __construct($name, $district, $bathrooms, $classrooms, $teachers, $students, $parents){
			parent::__construct($name, $district, $bathrooms, $classrooms, $teachers, $students, $parents);
		$this->homework = $homework;
	}
	function greet() {
		return $this->hello;
	}
}

class Parents extends School {
	function __construct($name, $district, $bathrooms, $classrooms, $teachers, $students, $parents){
			parent::__construct($name, $district, $bathrooms, $classrooms, $teachers, $students, $parents);
		$this->feedback = $feedback;
	}
	function hello() {
		return $this->feedback;
	}
}


$parents = new Parent("Parent", "Worried", "Mexican", "male", "45");
print "My parent's name is " . $parent->getName();
?>

<?php
class Animal {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;

	public $meow;

	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark, $meow) {
		$this->scientificName = $scientificName;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->weight = $weight;
		$this->bark = $bark;
		$this->meow = $meow;
	}

	function getName() {
		return "This is my " . $this->firstName .
		" and last " . $this->lastName;
		"and this is my scientificName".$this->$scientificName;
	}


class Tiger extends Animal {
	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $meow){
			parent::__construct($scientificName, $firstName, $lastName, $gender, $weight, $meow);
		$this->meow = $meow;
	}
	function greet() {
		return $this->meow;
	}
}

$tiger = new Tiger("Tiger", "Hyper", "Striped", "male", "5");
print "My animal is a " . $tiger->getName();
?>
