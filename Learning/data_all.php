<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "trading";
 $p = $_GET['pil'];

if ($p==1) wilayah();
if ($p==2) city();

 

function wilayah()
{
global $servername, $username, $password, $dbname ;

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT wilayah from customers group by wilayah";
$result = $conn->query($sql);
 echo "<option> --- Pilih ---</option>";
 while($row = $result->fetch_assoc()) 
	{
	  echo "<option value='" . $row["wilayah"] . "'>" . $row["wilayah"]  ;
    }
	$conn->close();
}

function city()
{
global $servername,$username,$password,$dbname ;

$wil = $_GET["x"];
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT city from customers where wilayah='$wil' group by city";
$result = $conn->query($sql);
 echo "<option> --- Pilih ---</option>";
 while($row = $result->fetch_assoc()) 
	{
	  echo "<option value=" . $row["city"] . ">" . $row["city"]  ;
    }
	$conn->close();
}	
?>

