<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-1.7.1.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $.get("test.php",function(data,status){
      alert("Data: " + data + "\nStatus: " + status);
      $("#test1").load("test.php");
      $("#txt1").val(data);
    });
  });
});
</script>
</head>
<body>

<button>Send an HTTP GET request to a page and get the result back</button>
<div id="test1"></div>
<input type="text" id="txt1">
</body>
</html>
