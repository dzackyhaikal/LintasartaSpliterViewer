<?php 
session_start();

if (!isset($_SESSION["login"])) {
  # code...
  header("Location: ../Home.php");
  exit();
}

include '../tampil/Admin/header.php';
include '../tampil/Admin/sidebar.php';
include 'wiki.php';
include '../tampil/footer.php';
?>