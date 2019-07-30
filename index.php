<?php 
$author = "Scott Adams";

 echo ' <h1> TEST</h1>';
 echo "$author";
 for ($count= 1; $count <10; $count++)
 {
       if ($count == 5)        continue;
     echo "$count";
    
 }
 ///
function tet ($a)
 {
    $b =$a +10;
    return $b;
 }
 $c = tet(15);
 echo "<br>$c";
 ///
 $name = name("Well", "will", "WALL");
 echo $name[0]. " ".$name[1]." ".$name[2];
 function name($n1,$n2,$n3)
 {
     $n1 = ucfirst(strtolower($n1));
     $n2 = ucfirst(strtolower($n2));
     $n3 = ucfirst(strtolower($n3));
     return array($n1, $n2, $n3);
     
 }
 echo "<br>";
 ///
  
   require_once 'test.php';
 