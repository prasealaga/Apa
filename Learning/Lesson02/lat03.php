<html>
<head><title> Passing Value </title>
<script src="js/jquery-2.1.4.js"></script>
<script>
$(function() {
 $("#b1").click(function() {
  $.get("file01.php",{x:"test Nilai"}, function(tampil) {
     $("#div1").html(tampil) ;
  }) 
  })
})

</script>
</head>

<body>
<button id="b1">OK</button>
<div id="div1">
  Ini nilai Div awal
</div>
</body>

</html>
