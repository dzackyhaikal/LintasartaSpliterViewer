<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim dari form
$id = $_POST['no'];
$Nama = $_POST['Nama'];
$Kordinat = addslashes($_POST['Kordinat']);
$Node = $_POST['Node'];
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
$Ket = $_POST['Ket'];


//update data kedatabase
mysqli_query($koneksi,"update data_spliter set 
	Nama='$Nama',
	Kordinat= '$Kordinat',
	Node = '$Node',
	port_1= '$port_1',
	port_2= '$port_2',
	core_1= '$core_1',
	core_2= '$core_2',
	core_3= '$core_3',
	core_4= '$core_4',
	core_5= '$core_5',
	core_6= '$core_6',
	core_7= '$core_7',
	core_8= '$core_8', 
	Ket= '$Ket'
	where no ='$id'");

//mengalihkan halaman kembali ketampil.php
header("location: mainclass1.php");
?>


