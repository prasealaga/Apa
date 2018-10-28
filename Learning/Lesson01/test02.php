<!DOCTYPE html>
<html>
<head>
<script>
function Test()
{
    document.getElementById("myDiv").innerHTML="This is My After Text";

  }

}
</script>
</head>
<body>

<div id="myDiv"><h2>This is My Current Text</h2></div>
<button type="button" onclick="Test()">Change Content</button>

</body>
</html>
