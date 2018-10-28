<?php
$con=mysqli_connect("localhost","root","","northwind");

$pilih = $_GET["x"] ;
$negara = $_GET["ngr"] ;

if ($pilih =="1") {
 //ini untuk menampilkan data negara
 $result=mysqli_query($con,"Select Country from customers group by Country") ;
 
 while ($row = mysqli_fetch_array($result)) {
    echo "<option value=" . $row['Country'] . ">" . $row['Country'] . "</option>" ;
 }
}
 else

 {
	// ini untuk menampilkan kota 
 $result=mysqli_query($con,"Select city from customers where country='$negara'") ;
 
   while ($row = mysqli_fetch_array($result)) {
    echo "<option value=" . $row['city'] . ">" . $row['city'] . "</option>" ;
    }
 
 }	 

?>