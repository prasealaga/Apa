<?php
$con=mysqli_connect("localhost","root","","northwind");
 $result=mysqli_query($con,"Select Country from customers group by Country") ;
 
 while ($row = mysqli_fetch_array($result)) {
    echo "<option value=" . $row['Country'] . ">" . $row['Country'] . "</option>" ;
 }
 
 ?>