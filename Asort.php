<html>                                                                  
<body>                                                                  
<?php                
$flowers=array("Sunflower","Rose","Dahlia");
sort($flowers);  
$clength=count($flowers);
echo"<br><b>Sort Flowers In Ascending Order</br><br>";
for($x=0;$x<$clength;$x++)
 {
   echo"<br>";   
   echo $flowers[$x];
   echo "<br>";
 }  
$flowers=array("Sunflower","Rose","Dahlia");
rsort($flowers);
$clength=count($flowers);
echo"<br><b>Sort Flowers In Descending Order</b><br>"; 
for($x=0;$x<$clength;$x++)
 {  
   echo"<br>";
   echo $flowers[$x];
   echo "<br>";
 }


$flower=array("one"=>"Sunflower","two"=>"Rose","three"=>"Dahlia");
asort($flower);
echo"<br><b>Sorts an associative array in ascending order,according to the value</b></br>";
foreach($flower as $x=> $x_value)
 { 
   echo"<br>";
   echo "<br>Key=".$x.",Value=".$x_value;  
   echo"<br>"; 
 } 

 
$flower=array("one"=>"Sunflower","two"=>"Rose","three"=>"Dahlia"); 
ksort($flower); 
echo"<br><b>Sorts an associative array in ascending order,according to the key</b></br>";  
foreach($flower as $x=> $x_value) 
 {  
   echo"<br>";
   echo "<br>Key=".$x.",Value=".$x_value;  
   echo"<br>";
 }

$flower=array("one"=>"Sunflower","two"=>"Rose","three"=>"Dahlia"); 
arsort($flower); 
echo"<br><b>Sorts an associative array in descending order,according to the value</b></br>";  
foreach($flower as $x=> $x_value) 
 {
   echo"<br>";
   echo "<br>Key=".$x.",Value=".$x_value;  
   echo"<br>";
 }


$flower=array("one"=>"Sunflower","two"=>"Rose","three"=>"Dahlia"); 
krsort($flower); 
echo"<br><b>Sorts an associative array in descending order,according to the key</b></br>";  
foreach($flower as $x=> $x_value) 
 {
   echo"<br>";
   echo "<br>Key=".$x.",Value=".$x_value;  
   echo"<br>";
 }
?>
</body>
</html>



