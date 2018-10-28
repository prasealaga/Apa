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
</script>
</head>
<body>
<br>
<hr color="red">
<h2 align="center"> Form Input Data</h2>
<table align="center" bgcolor="black" width="25%" height="20%">
<tr>
    <td>Product ID </td>
    <td><input type="text" id="pid" placeholder="Product ID" onkeyup="select_data()"></td>
</tr>
<tr>
    <td>Product Name </td>
	<td><input type="text" id="pn" placeholder="Product Name"></td>
</tr>

<tr>
    <td>Price </td>
	<td><input type="text" id="prc" placeholder="Price"></td>
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