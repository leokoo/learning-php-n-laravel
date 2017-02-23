<?php 

class Car {
    
    static $wheels = 4;
    var $hood = 1;

  
   function MoveWheels(){
    
      Car::$wheels = 10;
        
    } 
    
    
}

$bmw = new Car();

//$bmw->wheels;

Car::MoveWheels();

//echo Car::$wheels;




?>