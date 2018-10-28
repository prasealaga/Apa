<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trading";
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
?>

