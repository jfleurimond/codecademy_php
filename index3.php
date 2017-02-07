<!DOCTYPE html>
<html>
	<head>
	  <title> Practice makes perfect! </title>
			<link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
			<p>
				<!-- Your code here -->
		<?php
				class Dog {
						
						public $numLegs = 4; 
						public $name; 
						
								public function __construct ($name) {
										$this->name= $name; 
								}
								
								public function bark (){
										return "Woof! <br>";
								}
								
								public function greet() {
										return (" My dog's name is " . $this->name . " " . " and he's an asshole!" )  ;
								}
						
				}
				
				$dog1 = new dog("Barker");
				$dog2 = new dog("Amigo");
				
				echo $dog1-> bark() ;
				
				echo $dog2-> greet(); 
				
				
				
			 
			 
		 ?>
			</p>
		</body>
</html>