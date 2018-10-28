<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marketing";
$conn = new mysqli($servername, $username, $password, $dbname);

$opt = $_GET["opt"];

if ($opt==1) insert_data();
if ($opt==2) select_data();
if ($opt==3) update_data();
if ($opt==4) delete_data();


function insert_data()
{
  global $servername, $username, $password, $dbname,$conn ;
  $pid = $_GET["pid"];
  $pn  = $_GET["pn"];
  $prc = $_GET["prc"];
  $sql="Insert into product values('$pid','$pn','$prc')";
  $result = $conn->query($sql);
  echo "Insert Data Berhasil";
  
}

function select_data()
{
 global $servername, $username, $password, $dbname,$conn ;
 $pid = $_GET["pid"];
 $sql="Select * from product where productid='$pid'";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 
$myObj = new stdClass() ;
$myObj->pid = $row["productid"];
$myObj->pn =  $row["product_nm"];
$myObj->price= $row["price"];

$myJSON = json_encode($myObj);

echo $myJSON;
}


$conn->close();
?>

