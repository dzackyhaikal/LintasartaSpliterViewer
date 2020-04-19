<?php
include '../koneksi.php';

mysqli_query($koneksi,"delete from data_spliter");

header('location: mainclass1.php');
?>