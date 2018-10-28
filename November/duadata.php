<html>
<head>
<script>
wilayah();
function wilayah()
{
var x = new XMLHttpRequest();
x.onreadystatechange = function ()
{
document.getElementById("wil").innerHTML = this.responseText;
};
x.open("GET", "data_all.php?nov=1", true);
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
x.open("GET","data_all.php?nov=2&x=" + wl , true);
x.send();
}
</script>
</head>

<body>
<select id="wil" onchange="getCity()">
<option> Pilih </option>
</select>

<select id="city">
<option> Pilih </option>
</select>
</body>