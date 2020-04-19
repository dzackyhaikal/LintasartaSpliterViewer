<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-image: url('../dist/img/us2.jpg'); background-size: cover; background-attachment: fixed;">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content container-fluid">
<div class="col-sm-12">


      <!--------------------------
        | Your Page Content Here |
        -------------------------->

		<div class="col-sm-12">
		<h4></h4>




	<br/>
	<br/>
		<div class="row">
        <div class="col-md-12">
 <div class="box box-primary">
            <div class="box-header with-border">
            <center><h3 class="box-title"><font style="font-size: 40px"><strong>Table Data Spliter</strong></font></h3></center>
            </div>
            <br>

	<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from data_spliter where Nama='$id'");
	while ($d = mysqli_fetch_array($data)){

	?>

	<form method="post" action="Update.php">
		<table rules="all" style="margin-left:5%; font-size: 18px" width="800">
			<tr>
			<th height="50">Nama Spliter   </th>
			<td>&nbsp;&nbsp;<?php echo $d['Nama']; ?></td>
			</tr>
			<tr>
			<th height="50">Lokasi Titik Kordinat     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<td>&nbsp;&nbsp;<?php echo $d['Kordinat']; ?></td>
			</tr>
			<tr>
			<th height="50">Node        </th>
			<td>&nbsp;&nbsp;<?php echo $d['Node']; ?></td>
			</tr>
			<tr>
			<th height="50">Input 1     </th>
			<td>&nbsp;&nbsp;<?php echo $d['port_1']; ?></td>
			</tr>
			<tr>
			<th height="50">Input 2     </th>
			<td>&nbsp;&nbsp;<?php echo $d['port_2']; ?></td>
			</tr>
			<th height="50">Output 1    </th>
			<td>&nbsp;&nbsp;<?php echo $d['core_1']; ?></td>
			</tr>
			<th height="50">Output 2    </th>
			<td>&nbsp;&nbsp;<?php echo $d['core_2']; ?></td>
			</tr>
			<th height="50">Output 3    </th>
			<td>&nbsp;&nbsp;<?php echo $d['core_3']; ?></td>
			</tr>
			<th height="50">Output 4    </th>
			<td>&nbsp;&nbsp;<?php echo $d['core_4']; ?></td>
			</tr>
			<th height="50">Output 5    </th>
			<td>&nbsp;&nbsp;<?php echo $d['core_5']; ?></td>
			</tr>
			<th height="50">Output 6    </th>
			<td>&nbsp;&nbsp;<?php echo $d['core_6']; ?></td>
			</tr>
			<th height="50">Output 7    </th>
			<td>&nbsp;&nbsp;<?php echo $d['core_7']; ?></td>
			</tr>
			<th height="50">Output 8    </th>
			<td>&nbsp;&nbsp;<?php echo $d['core_8']; ?></td>
			</tr>
			<tr>
			<th height="50">Keterangan    </th>
			<td>&nbsp;&nbsp;<?php echo $d['Ket']; ?></td>
			</tr>


		</table>

</form>
<br>
</div>
</div>

<center><a href="mainclass1.php" button class="btn btn-danger" style="width: 1000px"><strong><div class="fa fa-reply"> Back</div></strong> </a></center>


<?php
}
	?>
 </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</body>
</html>
