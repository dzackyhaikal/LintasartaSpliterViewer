<?php
session_start();

if (!isset($_SESSION["login"])) {
  # code...
  header("Location: ../Home.php");
  exit();
}
?>
<?php

include '../tampil/Admin/header.php';
include '../tampil/Admin/sidebar.php';
include 'contenUpdate.php';
include '../tampil/footer.php';
?>