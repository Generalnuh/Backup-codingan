<?php 
   $x = 75; 
   $y = 25;
    
   function penambahan() { 
       $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
   }
    
   penambahan(); 
   echo $z; 
?>
