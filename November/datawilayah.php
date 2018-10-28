<html>
<body>
<table border="1">
<tr><td>No</td><td>Customer</td><td>Contact</td><td>City</td><td>Wilayah</td></tr>
<?php
include 'connection.php';
$sql = "select wilayah from customer  group by wilayah ";
$result = $conn->query($sql);
//$no=1;
echo " <h1><i>Sugeng Rawuh</i></h1> ";
//echo "<table border =1>";
echo "<option>--Pilih</option>";
while ($row = $result-> fetch_assoc()) {
{
echo "<option value =".$row["wilayah"].">".$row["wilayah"];
}
//echo "<tr>";
//echo "<td>". $no."</td>";
//echo "<td>". $row["custid"]."</td>";
//echo "<td>". $row["contact"]."</td>";
//echo "<td>". $row["city"]."</td>";
//echo "<td>". $row["wilayah"]."</td>";
//echo "</tr>";
//$no++;
}
$conn->close();
?>

</body>
</html>