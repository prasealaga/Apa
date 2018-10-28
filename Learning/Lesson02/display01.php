<html>
<head>
<script src="js/jquery-1.7.1.min.js"></script>
<script>
$(document).ready(function(){
      $.get("loading02.php",{negara:"",opt:1}, function(data){
      $("#country").html(data) ;
	   });
  
   $("#country").click(function(){
    $.get("loading02.php",{negara : $("#country").val() ,opt:2},function(data){
       $("#city").html(data) ;
     });
   
  });
});
</script>
</head>
<body>
<div id="div1">
Country  : <select id="country"></select>
City     : <select id="city"></select>
</div>

</body>
</html>
