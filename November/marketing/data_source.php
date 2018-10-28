<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marketing";
$conn = new mysqli($servername, $username, $password, $dbname);

$opt = $_GET["opt"];

if ($opt==1) fill_category();
if ($opt==2) fill_product();
if ($opt==9) get_product();
if ($opt==11) insert_data();
if ($opt==12) select_data();
if ($opt==13) update_data();
if ($opt==14) delete_data();

function fill_category()
{
 global $servername, $username, $password, $dbname,$conn ;
 $sql="Select * from category";
 $result = $conn->query($sql);
 
 echo "<option> ---- Pilih ----";
 while($row = $result->fetch_assoc()) 
	{
	  echo "<option value=" . $row["categoryid"] . ">" . $row["categoryname"]  ;
    }
}

function fill_product()
{
 global $servername, $username, $password, $dbname,$conn ;
 
 $catid = $_GET['catid'];
 $sql="Select * from product_market where categoryid='$catid' ";
 $result = $conn->query($sql);
 
 echo "<option> ---- Pilih ----";
 while($row = $result->fetch_assoc()) 
	{
	  echo "<option value=" . $row["productid"] . ">" . $row["productid"]  ;
    }
}

function get_product()
{
 global $servername, $username, $password, $dbname,$conn ;
 $pid = $_GET["pid"];
 $sql="Select * from product_market where productid='$pid'";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 
$myObj = new stdClass() ;
$myObj->pn =  $row["productname"];
$myObj->price= $row["price"];

$myJSON = json_encode($myObj);

echo $myJSON;
}

function insert_data()
{
  global $servername, $username, $password, $databasename,$conn ;
  $pid = $_GET["pid"];
  $pn  = $_GET["pn"];
  $prc = $_GET["prc"];
  $sql="Insert into product values('$pid','$pn','$prc')";
  $result = $conn->query($sql);
  echo "Insert Data Berhasil";
  
}

function select_data()
{
 global $servername, $username, $password, $databasename,$conn ;
 $pid = $_GET["pid"];
 $sql="Select * from product where productid='$pid'";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 
$myObj = new stdClass() ;
$myObj->pid = $row["productid"];
$myObj->pn =  $row["productname"];
$myObj->price= $row["price"];

$myJSON = json_encode($myObj);

echo $myJSON;
}

function update_data()
{
  global $servername, $username, $password, $databasename,$conn ;
  $pid = $_GET["pid"];
  $pn  = $_GET["pn"];
  $prc = $_GET["prc"];
  $sql="update product set productname='$pn', price='$prc'
  where productid='$pid'";
  $result = $conn->query($sql);
  echo "Update Data Berhasil";
  
}

function delete_data()
{
  global $servername, $username, $password, $databasename,$conn ;
  $pid = $_GET["pid"];
  $sql="delete from  product where productid='$pid'";
  $result = $conn->query($sql);
  echo "Delete Data Berhasil";
  
}

function category_data()
{
global $servername, $username, $password, $databasename;

$conn = new mysqli ($servername, $username, $password, $databasename);
$sql = "select categoryid  from product_market group by categoryid ";
$result = $conn->query($sql);
echo"<option> ---Pilih---</option>";
while ($row = $result->fetch_assoc())
{
echo "<option value='" . $row["categoryid "] . "'>" . $row["categoryid "] ;
}
$conn->close();
}

function product_data()
{

global $servername, $username, $password, $databasename;

$pro = $_GET["x"];
$conn = new mysqli ($servername, $username, $password, $databasename);
$sql = "select  productid  from product_market where categoryid='$pro' group by productid";
$result = $conn->query($sql);
echo "<option> --- Pilih ---</option>";
while($row = $result->fetch_assoc())
{
echo "<option value=" . $row["productid"] . ">" . $row["productid"] ;
}
$conn->close();
}
$conn->close();
?>

