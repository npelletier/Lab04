<?php
  echo "<table>";
   for($x=0;$x<=100;$x++){
     echo "<tr>";
     for($y=0;$y<=100;$y++){
       if($x==0 && $y==0){
         echo "<td>" . "&nbsp" . "</td>";
       }
       else if($x==0){
         echo "<td><b>" . $y . "<b></td>";
       }
       else if($y==0){
         echo "<td><b>" . $x . "<b></td>";
       }
       else{
        echo "<td>" . $x*$y . "</td>";
      }
     }
     echo "</tr>";
   }
  echo "</table>";
?>
