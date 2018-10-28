<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "novemberrain";
$a = $_GET['nov'];

if ($a==1) wilayah();
if ($a==2) city();

function wilayah ()
{
global $servername, $username, $password, $databasename;

$conn = new mysqli ($servername, $username, $password, $databasename);
$sql = "select wilayah from customer group by wilayah";
$result = $conn->query($sql);
echo"<option> ---Pilih---</option>";
while ($row = $result->fetch_assoc())
{
echo "<option value='" . $row["wilayah"] . "'>" . $row["wilayah"] ;
}
$conn->close();
}

function city()
{

global $servername, $username, $password, $databasename;

$wil = $_GET["x"];
$conn = new mysqli ($servername, $username, $password, $databasename);
$sql = "select city from customer where wilayah='$wil' group by city";
$result = $conn->query($sql);
echo "<option> --- Pilih ---</option>";
while($row = $result->fetch_assoc())
{
echo "<option value=" . $row["city"] . ">" . $row["city"] ;
}
$conn->close();
}
?>