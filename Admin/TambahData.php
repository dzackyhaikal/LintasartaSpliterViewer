<?php
include '../koneksi.php';
$Nama = $_POST['Nama'];
$Kordinat = addslashes($_POST['Kordinat']);
$Node   = $_POST['Node'];
$port_1 = $_POST['port_1'];
$port_2 = $_POST['port_2'];
$core_1 = $_POST['core_1'];
$core_2 = $_POST['core_2'];
$core_3 = $_POST['core_3'];
$core_4 = $_POST['core_4'];
$core_5 = $_POST['core_5'];
$core_6 = $_POST['core_6'];
$core_7 = $_POST['core_7'];
$core_8 = $_POST['core_8'];
$Ket    = $_POST['Ket'];


mysqli_query($koneksi,"INSERT INTO data_spliter values('',
	'$Nama',
	'$Kordinat',
	'$Node',
	'$port_1',
	'$port_2',
	'$core_1',
	'$core_2',
	'$core_3',
	'$core_4',
	'$core_5',
	'$core_6',
	'$core_7',
	'$core_8',
	'$Ket')");
header('location: mainclass1.php');
?>






