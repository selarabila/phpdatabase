<?php
require_once 'koneksi.php';

$sql1 = "CREATE TABLE prodi (id integer primary key auto_increment, kode varchar (2) unique, nama varchar (50) not null)";
//$dbh->exec($sql1);

$sql2 = "INSERT INTO prodi values (default, 'TI', 'Informatika')";
//$dbh->exec($sql2);

$sql3 = " INSERT INTO prodi values (deafult, 'SI', 'Sistem Informasi')";
$dbh->exec($sql3);