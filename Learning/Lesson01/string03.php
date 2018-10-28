<html>
<head>
<script src="js/jquery-1.7.1.min.js"></script>
    <script>
        $(function() {
            var message = $('#message');
            var tr = $('#tbl').find('tr');
            tr.bind('hover', function(event) {
               var values = '';
               var tds = $(this).find('td');
                $.each(tds, function(index, item) {
                    values = values +  item.innerHTML + ',';
                });
                var n = values.split(",");
                $.post("string01.php",{name:n[1]},function(data){
                    alert(data);
                 });
            });
        });
    </script>
</head>
<body>
<?php

 $con = mysql_connect("localhost","root","");
 if (!$con) {   die('Could not connect: ' . mysql_error());   }
 mysql_select_db("education", $con);

  $result = mysql_query("SELECT * FROM mahasiswa ");
  echo "<table border=1 id=tbl>
        <tr>
        <th>Nim</th><th width=150>Nama</th>
        <tr>" ;

  while($row = mysql_fetch_array($result))
    {
    echo "<tr>
          <td>$row[0]</td>
          <td>$row[1]</td>
          </tr>";
    }
   echo "</table>"; 

?>

    <div id="message">
    </div>
</body>
</html>