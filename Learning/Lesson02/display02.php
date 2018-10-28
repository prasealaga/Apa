<html>
<head>
<script src="js/jquery-1.7.1.min.js"></script>
<script>
function test(x)
{
   alert(x);
}

$(document).ready(function(){
    // Passing Value using Load File
/*
	$("#tcountry").keyup(function() {
     var n = $(this).val() ;
     $("#div1").load("loading01.php", {cnt:n});
	}) ;
*/
	
    $("#tcountry").keyup(function(){
	var n = $(this).val() ;
    $.get("loading01.php",{cnt : n},function(data){
       $("#div1").html(data) ;
     });
	 });
	

});
</script>
</head>
<body>
<div align = center>
<input type=text id="tcountry">
</div>
<br>
<div id="div1" align = center>
</div>
</body>
</html>
