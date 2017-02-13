 <title>Override!</title>
  </head>
  <body>
    <p>
      <?php
        class Vehicle {
          public function honk() {
            return "HONK HONK!";
          }
        }
        // Add your code below!
       // static is so you can call properties/methods without creating an instance of class
	// const is to protect the change of a property of a class, final is for methods
      


		 class Bicycle extends Vehicle {
        	 	  public function honk() {
              	 return "Beep beep!"; 
           }
}

	  class Person {
	
	const alive = true; 

	final public static function jump() {
	
		echo "Kris Kross makes you want to jump jump!!!"; 
	}
           
       }



//to access const finals and statics you must use "::" like the "->"


  echo  Person::alive; 


?>


       
       $bicycle = new Bicycle(); 
       
       echo $bicycle->honk();
        
      ?>
    </p>
  </body>
</html>
