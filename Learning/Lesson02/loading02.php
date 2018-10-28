<?php
$con=mysqli_connect("localhost","root","","northwind");


$opt = $_GET["opt"] ;
$country = $_GET["negara"];

if ($opt==1)
  {
   // Data utuk mengisi Drop Down Country
   $result = mysqli_query($con,"SELECT Country FROM customers Group By Country");
   while($row = mysqli_fetch_array($result)) 
   {
    echo "<option value=" . $row['Country'] . ">" . $row['Country'] . "</option>";
   }
  }   
   else
  {
   // Data Untuk mengisi Drop Down City
   $result = mysqli_query($con,"SELECT City FROM customers where Country='$country' group by city ");
   echo "<option>--Pilih Kota--</option>";
   while($row = mysqli_fetch_array($result)) 
    {
     echo "<option value=" . $row['City'] . ">" . $row['City'] . "</option>";
    }
   }

mysqli_close($con);  

?>