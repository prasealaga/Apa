<?php

if (isset($_GET['cari']))
  $tcari = $_GET['cari'];
  else
  $tcari = "";

echo $tcari . "<br>" ;
echo "
<table border=1>
<tr>
<td>No</td><td>Nama</td><td>Nilai</td?
</tr>
<tr>
<td>1</td><td>Indah Sekali</td><td>80</td?
</tr>
<tr>
<td>2</td><td>Budiman</td><td>60</td?
</tr>
<tr>
<td>3</td><td>Permana</td><td>70</td?
</tr>
</table> " ;

?>