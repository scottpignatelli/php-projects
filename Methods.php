<!DOCTYPE html>
<html>
	<head>
	  <title>Reconstructing the Person Class</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <!-- Your code here -->
        <?php
        class Person {
#        $teacher = new Person($firstname , $lastname , $age);
#        $student = new Person($firstname , $lastname , $age);
            public $isAlive = true;
            public $firstName;
            public $lastName;
            public $age;
            public function __construct($firstname, $lastname, $age)
        {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        }
        public function greet(){
            return" Hello, My name is ". $this->firstname . " ". $this->lastname . ".  Nice to meet you! :-)";
        }
    }
        $teacher = new person ("boring", "12345", 12345);
        $student = new person ("your","name",99);

    echo $student->greet();
    echo $teacher->greet();
?>
      </p>
    </body>
</html>