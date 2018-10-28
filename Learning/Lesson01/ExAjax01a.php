<html>
<head>
<script src="js/jquery-1.7.1.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").load("data.txt");
  });
});
</script>
</head>
<body>
<button>Get Content From Text File</button>
<div id="div1">
<h1>This is Content of Layer</h1>
<font size=4>
Welcome to Ajax Query.. this example <br>how to Get content from file
</font> 
</div>

</body>
</html>
