<!DOCTYPE html>
<html>
<head>
<script>
function Test()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML="This is My After Text";
    }
  }

xmlhttp.open("GET","",true);
xmlhttp.send();
}
</script>
</head>
<body>

<div id="myDiv"><h2>This is My Current Text</h2></div>
<button type="button" onclick="Test()">Change Content</button>

</body>
</html>
