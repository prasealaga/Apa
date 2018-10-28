<style>
table a:link {
	color: #666;
	font-weight: bold;
	text-decoration:none;
}
table a:visited {
	color: #999999;
	font-weight:bold;
	text-decoration:none;
}
table a:active,
table a:hover {
	color: #bd5a35;
	text-decoration:underline;
}
table {
	font-family:Arial, Helvetica, sans-serif;
	color:#666;
	font-size:12px;
	text-shadow: 1px 1px 0px #fff;
	background:#eaebec;
	margin:20px;
	border:#ccc 1px solid;

	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;

	-moz-box-shadow: 0 1px 2px #d1d1d1;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
}
table th {
	padding:21px 25px 22px 25px;
	border-top:1px solid #fafafa;
	border-bottom:1px solid #e0e0e0;

	background: #ededed;
	background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
	background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
}
table th:first-child {
	text-align: left;
	padding-left:20px;
}
table tr:first-child th:first-child {
	-moz-border-radius-topleft:3px;
	-webkit-border-top-left-radius:3px;
	border-top-left-radius:3px;
}
table tr:first-child th:last-child {
	-moz-border-radius-topright:3px;
	-webkit-border-top-right-radius:3px;
	border-top-right-radius:3px;
}
table tr {
	text-align: center;
	padding-left:20px;
}
table td:first-child {
	text-align: left;
	padding-left:20px;
	border-left: 0;
}
table td {
	padding:18px;
	border-top: 1px solid #ffffff;
	border-bottom:1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;

	background: #fafafa;
	background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
	background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
}
table tr.even td {
	background: #f6f6f6;
	background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
	background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
}
table tr:last-child td {
	border-bottom:0;
}
table tr:last-child td:first-child {
	-moz-border-radius-bottomleft:3px;
	-webkit-border-bottom-left-radius:3px;
	border-bottom-left-radius:3px;
}
table tr:last-child td:last-child {
	-moz-border-radius-bottomright:3px;
	-webkit-border-bottom-right-radius:3px;
	border-bottom-right-radius:3px;
}
table tr:hover td {
	background: #f2f2f2;
	background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
	background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);	
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