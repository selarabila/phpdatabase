<?php
require_once 'koneksi.php';

$sql = "SELECT * FROM prodi";
$rs = $dbh->query($sql);

foreach ($rs as $row){
	echo $row['id']. ' - '. $row['nama'].'<br>';
}