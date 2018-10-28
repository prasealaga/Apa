<html>
<body>
<table border="1">
<tr><td>No</td><td>Customer</td><td>Contact</td><td>City</td><td>Wilayah</td></tr>
<?php
$n= $_GET['x'];
include 'connection.php';
$sql = "select * from customer where contact like '%$n%' or city like '%$n%' or wilayah like '%$n%'";
$result = $conn->query($sql);
$no=1;
echo " <h1><i>Sugeng Rawuh</i></h1> ";
//echo "<table border =1>";
while ($row = $result-> fetch_assoc()) {
echo "<tr>";
echo "<td>". $no."</td>";
echo "<td>". $row["custid"]."</td>";
echo "<td>". $row["contact"]."</td>";
echo "<td>". $row["city"]."</td>";
echo "<td>". $row["wilayah"]."</td>";

echo "</tr>";
$no++;
}
$conn->close();
?>

</body>
</html>