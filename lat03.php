<?php
require_once 'koneksi.php';

$sql = "INSERT INTO prodi (kode,nama) VALUES (?,?)";
$statement1 = $dbh->prepare($sql);
$ar_data = ['TE','TeknikElektro'];
// $statement1->execute($ar_data);

$statement2 = $dbh->prepare("DELETE FROM prodi where id=?");
$statement2-excute([22]);