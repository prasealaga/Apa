<html>
<head>
<script src="js/jquery-1.7.1.min.js"></script>
<script>
$(document).ready(function(){
  $("#but01").click(function(){
    $.get("file01.php",function(data,status){
       $("#div1").html(data) ;
    });
  });
});
</script>
</head>
<body>
<button id="but01">Get Content From PHP File Using Data</button>
<div id="div1">
<h1>This is Content of Layer 1</h1>
<font size=4>Welcome to Ajax Query.. this example <br>how to Get content from file</font> 
</div>
</body>
</html>
