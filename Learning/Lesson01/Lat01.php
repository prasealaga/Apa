<html>
<head>
<script src="js/jquery-1.7.1.min.js"></script>
<script>
$(document).ready(function(){
  $("#but01").click(function(){
    $.get("file01.php",function(data){
       $("#div1").html(data) ;
	   $("#div2").text(data) ;
	   $("#nama").val(data) ;
	   $("#baris1").html(data) ;
    });
  });
});
</script>
</head>
<body>
<button id="but01">Get Content From PHP File Using Data</button>

<div id="div1">
 <h1>This is Content of Layer 1</h1>
</div>
<hr>
<div id="div2">
 <h1>This is Content of Layer 2</h1>
</div>
<hr>
<input type text id="nama">
<table border=1><tr><td id="baris1"></td></tr></table>

</body>
</html>
