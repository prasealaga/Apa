<html>
<head>
<title>Belajar Ajax</title>

<script>
wilayah();
function wilayah()
{
  var x = new XMLHttpRequest();
  x.onreadystatechange = function() 
  {
    document.getElementById("wil").innerHTML = this.responseText;
  };
  x.open("GET", "test02.php" , true);
  x.send();
}

function getCity()
{
var wl = document.getElementById("wil").value;
  var x = new XMLHttpRequest();
  x.onreadystatechange = function() 
  {
    document.getElementById("city").innerHTML = this.responseText;
  };
  x.open("GET", "test03.php?x=" + wl , true);
  x.send();
}

</script>
</head>

<body>
<select id="wil" onchange="getCity()">
 <option> Pilih </option>
</select>
 
 <select id="city">
 <option>Pilih</option>
 </select>
</body>
</html>