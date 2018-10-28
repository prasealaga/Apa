<style>
table { 
  width: 60%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left;
  font-family:verdana;
  font-size:10pt; 
}
</style>

<?php

$conn = mysql_connect("localhost", "root", "");
mysql_select_db("account");

//mencari banyak data yang ada dalam tabel
$sqlCount = "select count(*) from account";
$rsCount = mysql_fetch_array(mysql_query($sqlCount));
$banyakData = $rsCount[0];

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 20;
$mulai_dari = $limit * ($page - 1);
$sql_limit = "select * from account order by AccountNo limit $mulai_dari, $limit";
$hasil = mysql_query($sql_limit);

//menampilkan data
echo '<table border="1">
 <tr>
 <td>AccountNo</td>
 <td>Account Name</td>
 <td>BegBal</td>
 <td>CurrBal</td>
 </tr>';
 
while($dataSiswa = mysql_fetch_array($hasil)){
 echo '<tr>';
 echo '<td>'.$dataSiswa['AccountNo'].'</td>';
 echo '<td>'.$dataSiswa['AccountName'].'</td>';
 echo '<td>'.$dataSiswa['BegBal'].'</td>';
 echo '<td>'.$dataSiswa['CurrBal'].'</td>';
 echo '</tr>';
}
echo '</table>';

//membuat pagination
$banyakHalaman = ceil($banyakData / $limit);
echo 'Halaman: ';

for($i = 1; $i <= $banyakHalaman; $i++){
 if($page != $i){
 echo '[<a href="Paging.php?page='.$i.'">'.$i.'</a>] ';
 }else{
 echo "[$i] ";
 }
}
?>