<?php
require_once 'koneksi.php';

$sql = "SELECT * FROM prodi where id=?";
$statement1 = $dbh->prepare($sql);
$statement1->execute([1]);
$row = $statement1->fetch();

echo 'ID: '.$row['id'].' - Nama: '.$row['nama'];

$statement2 = $dbh->prepare($sql);
$statement2->execute([3]);
$row2 = $statement2->fetch(PDO::FETCH_OBJ);

echo '<br>';
echo 'ID: '.$row2->id.' - Nama: '.$row2->nama;

?>

