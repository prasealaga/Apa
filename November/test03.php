<html>
<head>
<body>
<?php	
$servername="localhost";
$username="root";
$password="";
$databasename="novemberrain";
$wil = $_GET['x'];
$conn =new mysqli($servername, $username, $password, $databasename);
$sql = "select city from customer where='$wil' group by city";
$result = $conn->query($sql);
echo "<option>---Pilih---</option>";
while ($row=$result->fetch_assoc())
{
echo "<option value=".$row["city"].">".$row["city"]."</option>";
}
$conn->close();
?>
</body>
</html>