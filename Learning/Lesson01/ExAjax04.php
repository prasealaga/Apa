<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-1.7.1.min.js"></script>
<script>
$(document).ready(function(){
  $("#btn1").click(function() {
     $("#txt1").val($("#br1").text()); 
    
  }
  )  
  $("#txt2").keyup(function()
   {
    $("#div1").text($("#txt2").val());
    $("#br1").text($("#txt2").val());
    $("#txt1").text($("#br1").val());
    
   }
  )
  $("button").click(function(){
    $.post("test_post.php",
    {
      name:"Donald Duck",
      city:"Duckburg"
    },
    function(data,status){
      alert("Data: " + data + "\nStatus: " + status);
      //$("#txt1").val(data);
      var nm = "Indah";
      var cy = $("#txt1").val();
      $("#div1").load("test_post.php",{name:nm,city:cy});
      //$("#div1").text(data);
    });
  });
});
</script>
</head>
<body>

<button>Send an HTTP POST request to a page and get the result back</button>
<div id="div1"></div>
<input type="text" id="txt1">
<input type="text" id="txt2">
<input type="button" id="btn1" value="OK"/>
<table border=1>
<tr><td id="br1">Test</td></tr>
</table>
</body>
</html>
