<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-1.7.1.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").load("data.txt",function(responseTxt,statusTxt,xhr){
      if(statusTxt=="success")
        alert("External content loaded successfully!");
      if(statusTxt=="error")
        alert("Error: "+xhr.status+": "+xhr.statusText);
    });
  });
});
</script>
</head>
<body>

<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>
<button>Get External Content</button>

</body>
</html>
