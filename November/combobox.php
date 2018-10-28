<html>
<head>
<title>Belajar Ajax</title>

<script>
loadlDoc();
function loadDoc(){
//alert("111"); berfungsi untuk test hasil coding dengan cara diletakkan dibawahnya
var x = new XMLHttpRequest ();
x.onreadystatechange = function(){
document.getElementById("wil").innerHTML = this.responseText;
};
x.open ("GET", "test02.php", true);
x.send();
}

</script>
</head>
<body>
<select id ="wil"> 
</select>
&copy Adi
</div>
</body>
</html>