
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-image: url('../dist/img/jem.jpg'); background-size: cover; background-attachment: fixed;">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content container-fluid">
<div class="col-sm-12">


      <!--------------------------
        | Your Page Content Here |
        -------------------------->
<div class="col-sm-12">
    <h2 style="color: white"><strong>Data Spliter Lintasarta</strong></h2>
<!-- Search engine -->
<br>
<form action="" method="post">
  <input type="general" style="height: 32px;" name="keyword" size="40" placeholder=" Enter Keyword"  autocomplete="off" autofocus>
  <button class="btn btn-info" type="submit" name="cari"><div class="fa fa-search"></div></button>
</form>
<br>
<table class="table">
  <thead>
  <head>
    <tr style="background-color: #00c0ef">
      <th>NO</th>
      <th>Nama</th>
      <th>Lokasi Kordinat</th>
      <th>Node</th>

      <th colspan="2">Keterangan</th>
    </tr>
  </thead>
  </head>
<?php

  include '../koneksi.php';


  $no = 1;
  $data = mysqli_query($koneksi,"select * from data_spliter");

if (isset($_POST['cari'])) {
  $data =  cari(addslashes($_POST['keyword']));
}

foreach ($data as $d )
  {
    ?>
  <tr style="background-color: lightskyblue">
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['Nama']; ?></td>
    <td><?php echo $d['Kordinat']; ?></td>
    <td><?php echo $d['Node']; ?></td>
<style>
    .button {
    background-color: green; /* Green */
    border: none;
    color: white;
    padding: 10px;
    width: 150px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button1 {
    background-color: #00cc00;
    color: black;
    border: 2px solid #4CAF50;
</style>


    <td><a href="mainclass2.php?id=<?php echo $d['Nama']; ?>" button class="button button1" ><i class="fa fa-edit "> Show Data</i></a>
      </td>
  </tr>
  <?php
}
?>
</table>
</div>
<br><br><br>

    </section>
    <!-- /.content -->
  </div>

</body>
</html>
