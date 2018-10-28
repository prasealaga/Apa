<?php
$con=mysqli_connect("localhost","root","","northwind");
// Check connection

$country = $_GET["cnt"];
$result = mysqli_query($con,"SELECT * FROM customers where country like '%$country%'");

echo "<table border='1' align=center>
<tr bgcolor=yellow>
<th>No</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Country</th>
<th>City</th>
</tr>";

$No = 0 ;
while($row = mysqli_fetch_array($result)) {
   $No++ ;
  echo "<tr bgcolor=lightblue>";
  echo "<td width=20>" . $No . "</td>";
  echo "<td width=250>" . $row['ContactName'] . "</td>";
  echo "<td width=350>" . $row['CompanyName'] . "</td>";
  echo "<td width=150 >" . $row['Country'] . "</td>";
  $kota = str_replace(" ","%20",$row['City']) ;
  echo "<td width=100><a href=javascript:test('$kota')>" . $row['City'] . "</a></td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);  

?>