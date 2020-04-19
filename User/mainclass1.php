<?php 
session_start();

if (!isset($_SESSION["login"])) {
  # code...
  header("Location: ../Home.php");
  exit();
}

include '../tampil/header.php';
include '../tampil/sidebar.php';
include 'contenTampil.php';
include '../tampil/footer.php';
?>