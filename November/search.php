<html>
<head>
<title>Belajar Ajax</title>

<script>
function loadDoc(){
//alert("111"); berfungsi untuk test hasil coding dengan cara diletakkan dibawahnya
var tc = document.getElementById("tcari").value;
var x = new XMLHttpRequest ();
x.onreadystatechange = function(){
document.getElementById("div01").innerHTML = this.responseText;
};
x.open ("GET", "data.php?x=" + tc, true);
x.send();
}

</script>
</head>
<body>
<input type="text" id ="tcari" placeholder="Search" onkeyup="loadDoc()">
<div id ="div01">
&copy Adi
</div>
</body>
</html>