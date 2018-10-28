<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trading";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT wilayah from customers group by wilayah";
$result = $conn->query($sql);
 echo "<option> --- Pilih ---</option>";
 while($row = $result->fetch_assoc()) 
	{
	  echo "<option value='" . $row["wilayah"] . "'>" . $row["wilayah"]  ;
    }
	$conn->close();
?>

