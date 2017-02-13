d>
    <title></title>
  </head>
  <body>
    <p>
      <?php
      class Person {

	//static is used so you don't have to create an instance of a class
	//to call the properties or methods of it
          
          public static function say() {
              echo "Here are my thoughts!"; 
              
          }

      }
      
    class Blogger extends Person {
        const cats = 50;
    }      
    //below is an example of using scope resolution "::"
    Blogger::say(); 
    
    echo Blogger::cats; 
      
      
      
      
      
      
      
      
      ?>
    </p>
  </body>
</html>
