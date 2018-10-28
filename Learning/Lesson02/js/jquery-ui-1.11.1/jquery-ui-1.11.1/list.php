<?php
$con=mysqli_connect("localhost","root","","northwind");
$result=mysqli_query($con,"Select Country from customers group by Country") ;

$negara="";
 while ($row = mysqli_fetch_array($result)) {
    $negara  = $negara . $row['Country'] . "," ;
 }

  echo $negara ;
 
 ?>