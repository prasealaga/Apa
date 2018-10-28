<html>
<head>
<script src="js/jquery-1.7.1.min.js"></script>
<script>
$(document).ready(function(){
  // Get Content using Load
  $("#but02").click(function(){
     $("#div2").load("file01.php");
  });

  //Passing value using Data
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
  
    // Passing Value using Load File
    $("#but04").click(function(){
     var n = "Faiz" ;
	 var c = "Jakarta" ;
     $("#div4").load("file02.php", {name:n,city:c});
    });
});
</script>
</head>
<body>
<button id="but02">Get Content From PHP File Using Load</button>
<div id="div2">
<h1>This is Content of Layer 2</h1>
</div>

<hr>
<button id="but03">Get Content From PHP File Using Data and Passing Value</button>
<div id="div3">
<h1>This is Content of Layer 3</h1>
</div>

<hr>
<button id="but04">Get Content From PHP File Using Load and Passing Value</button>
<div id="div4">
<h1>This is Content of Layer 4</h1>
</div>
</body>
</html>
