<html>
<head>
<script src="javascript/function02.js"></script>

<script>
getData("data_all.php","wil","1","");
</script>
</head>

<body>
<select id="wil" onchange="getData('data_all.php','city','2',this.value);">
<option>Pilih</option>
</select>

<select id="city">
<option>Pilih</option>
</select>
</body>
</html>