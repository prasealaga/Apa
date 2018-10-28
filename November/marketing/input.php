<html>
<head>
<title>Input Data</title>
<script>
function clear_up()
{
  document.getElementById("pid").value="";
  document.getElementById("pn").value="";
  document.getElementById("prc").value="";
  document.getElementById("pid").focus;
  
}
function insert_data()
{
 
 var x = new XMLHttpRequest();
 var pid = document.getElementById("pid").value;
 var pname = document.getElementById("pn").value;
 var price = document.getElementById("prc").value;
 var file_name;
  x.onreadystatechange = function() 
  {
    alert(this.responseText);
  };
  file_name = "marketing.php?opt=1&pid=" + pid + "&pn=" + pname + "&prc=" + price;
  x.open("GET", file_name , true);
  x.send();
  clear_up()
}

function select_data()
{
 
 var x = new XMLHttpRequest();
 var pid = document.getElementById("pid").value;
 var file_name;
  x.onreadystatechange = function() 
  {
    
    var a = JSON.parse(this.responseText);
	document.getElementById("pn").value = a.pn ;
	document.getElementById("prc").value = a.price ;
  };
  file_name = "marketing.php?opt=2&pid=" + pid ;
  x.open("GET", file_name , true);
  x.send();
}

function update_data()
{
 
 var x = new XMLHttpRequest();
 var pid = document.getElementById("pid").value;
 var pname = document.getElementById("pn").value;
 var price = document.getElementById("prc").value;
 var file_name;
  x.onreadystatechange = function() 
  {
    alert(this.responseText);
  };
  file_name = "marketing.php?opt=3&pid=" + pid + "&pn=" + pname + "&prc=" + price;
  x.open("GET", file_name , true);
  x.send();
  clear_up()
}

function delete_data()
{
 
 var x = new XMLHttpRequest();
 var pid = document.getElementById("pid").value;
 var pname = document.getElementById("pn").value;
 var price = document.getElementById("prc").value;
 var file_name;
  x.onreadystatechange = function() 
  {
    alert(this.responseText);
  };
  file_name = "marketing.php?opt=4&pid=" + pid + "&pn=" + pname + "&prc=" + price;
  x.open("GET", file_name , true);
  x.send();
  clear_up()
}


function category_data()
{
var x = new XMLHttpRequest();
x.onreadystatechange = function ()
{
document.getElementById("pro").innerHTML = this.responseText;
};
x.open("GET", "marketing.php?opt=5", true);
x.send();
}

function product_data()
{

var wl = document.getElementById("pro").value;
var x = new XMLHttpRequest();
x.onreadystatechange = function()
{
document.getElementById("productid").innerHTML = this.responseText;
};
x.open("GET","marketing.php?opt=6&x=" + wl , true);
x.send();
}
</script>
</head>
<body>
<?php
include'../sql/connection.php';

?>
<br>
<hr color="red">
<h2 align="center"> Form Input Data</h2>
<table align="center" bgcolor="blue" width="25%" height="20%">
<tr>
    <td>No Trans </td>
    <td><input type="text" id="notrans" placeholder="No Trans" onkeyup="select_data()"></td>
</tr>
<tr>
    <td>Date </td>
	<td><input type="date" id="datetrans"></td>
</tr>

<tr>
    <td>Category </td>
	<td><select id="pro" onchange="product_data()">
<option> Pilih </option>
</select>
</td>
</tr>
<tr>
    <td>Product ID </td>
	<td><select id="productid">
<option> Pilih </option>
</select>
</td>
</tr>
<tr>
    <td>Product Name </td>
    <td><input type="text" id="productname" placeholder="No Trans" ></td>
</tr>
<tr>
    <td>Price </td>
    <td><input type="text" id="pricesales" placeholder="No Trans" ></td>
</tr>
<tr>
    <td>Qty </td>
    <td><input type="text" id="qty" placeholder="No Trans" ></td>
</tr>
<tr>
    <td>Total </td>
    <td><input type="text" id="total" placeholder="No Trans"></td>
</tr>

</table>
<br>
<hr width="30%" color="red" align="center">
<table align="center">
<tr>
   <td><input type="Button" value="Save" id="btnSave" onclick="insert_data()">
       <input type="Button" value="Update" id="btnUpd" onclick="update_data()">
	   <input type="Button" value="Delete" id="btnDel" onclick="delete_data()">
	   <input type="Button" value="Close" id="btnClose" >
   </td>
</tr>   
</table>
</body>
</html>