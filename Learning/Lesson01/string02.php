<html>
<head>
<script src="js/jquery-1.7.1.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $.post("string01.php",function(data,status){
    var nama = data.substr(0,data.length-1);
    var nama1 = nama.split(",");
    
    
    alert(nama1[0]);
    
    
     });
  });
});
</script>
</head>
<body>

<table id="tbl1" border=1>
<tr>
<td>1</td><td>Dinda</td>
</tr>

</table>


</body>
</html>
