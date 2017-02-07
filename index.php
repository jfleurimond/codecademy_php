<!DOCTYPE html>
	<html>
			<head>
		  <title>Reconstructing the Person Class</title>
		<link type='text/css' rel='stylesheet' href='style.css'/>
			</head>
<body>
	<p>
									
	<?php
	class Person{
		public $isAlive = true;
		public $firstname;
		public $lastname;
		public $age;

			public function __construct($firstname, $lastname, $age){
					$this-> firstname = $firstname; 
					$this-> lastname=  $lastname; 
					$this-> age = $age; 
						}

			}

			$teacher = new Person("boring", "12345", 12345);
			$student =new Person("Justin", "Juice", "32");
			echo "$teacher->isAlive <br>";
			echo $student->age; 
	?> 
									 
		</p>
</body>
</html>