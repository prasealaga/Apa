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

  $("#but02").click(function(){
     $("#div2").load("file01.php");
  });

  $("#but03").click(function(){
  $.post("file02.php",
  {
    name:"Zidan",
    city:"Cibinong"
  },
  function(data){
    $("#div3").html(data) ;
  });
  });

  $("#but03").click(function(){
  $.post("file02.php",
  {
    name:"Zidan",
    city:"Cibinong"
  },
  function(data){
    $("#div3").html(data) ;
  });
  });  

    $("#but04").click(function(){
     var n = "Indah" ;
	 var c = "Jakarta" ;
     $("#div4").load("file02.php", {name:n,city:c});
	 //alert("ssdf");
    });

});
</script>
</head>
<body>
<button id="but01">Get Content From Text File Using Data</button>
<div id="div1">
<h1>This is Content of Layer 1</h1>
<font size=4>Welcome to Ajax Query.. this example <br>how to Get content from file</font> 
</div>
<br><br>
<button id="but02">Get Content From Text File Using Load</button>
<div id="div2">
<h1>This is Content of Layer 2</h1>
<font size=4>Welcome to Ajax Query.. this example <br>how to Get content from file</font> 
</div>


<br>
<button id="but03">Get Content From Text File Using Load</button>
<div id="div3">
<h1>This is Content of Layer 2</h1>
<font size=4>Welcome to Ajax Query.. this example <br>how to Get content from file</font> 
</div>

<br>
<button id="but04">Get Content From Text File Using Load</button>
<div id="div4">
<h1>This is Content of Layer 2</h1>
<font size=4>Welcome to Ajax Query.. this example <br>how to Get content from file</font> 
</div>
</body>
</html>
