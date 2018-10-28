<?php
$n = $_GET['x'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trading";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * From customers where contact like '%$n%'";
$result = $conn->query($sql);
echo "<table border=1>";
    while($row = $result->fetch_assoc()) 
	{
	    echo "<tr>" ;
        echo "<td>" . $row["custid"] . "</td>" ;
		echo "<td>" . $row["contact"] . "</td>" ;
		echo "<td>" . $row["city"] . "</td>" ;
		echo "<tr>";
    }
	$conn->close();
?>

