<?php 

class Car {
    
  
    function MoveWheels(){
    
        echo "Wheels move";
        
    
    }
    
    

}

if(method_exists("Car", "MoveWheels")) {

echo "The Method Exist";

} else {

echo "no it does not";

}





?>