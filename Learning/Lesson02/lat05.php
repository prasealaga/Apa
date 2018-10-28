<html>
<head><title> Passing Value </title>
<script src="js/jquery-2.1.4.js"></script>
<script>
$(function() {
	
   $.get("listNegara.php",{x:"1",ngr :""}, function(tampil) {
   $("#negara").html(tampil) ;
  })
  
  $("#negara").click(function() {
	$.get("listNegara.php",{x:"2",ngr : $("#negara").val()}, function(tampil) {
	  $("#kota").html(tampil)	 ;
	})  
  })
})

</script>
</head>

<body>
Country : <select id="negara"></select>
City    : <select id="kota"></select> 

</body>

</html>
