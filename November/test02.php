<html>
<head>
<body>
<?php	
$servername="localhost";
$username="root";
$password="";
$databasename="novemberrain";
$conn =new mysqli($servername, $username, $password, $databasename);
$sql = "select wilayah from customer group by wilayah";
$result = $conn->query($sql);
echo "<option>---Pilih---</option>";
while ($row=$result->fetch_assoc())
{
echo "<option value=".$row['wilayah'].">".$row['wilayah']."</option>";
}
$conn->close();
?>
</body>
</html>