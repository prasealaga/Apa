<html>
<head>
<script src="js/jquery-1.7.1.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").load("file01.php");
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
<?php
  error_reporting(0);
//try
{
 // do something that can go wrong
  echo "OK" ;
  include "pjpp.php";
}
//catch (Exception $e)
{
 //throw new Exception( 'Something really gone wrong', 0, $e);
//  echo "Wrong";
}

?>

</body>
</html>
