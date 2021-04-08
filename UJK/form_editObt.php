<?php 
require_once 'database.php';
$id = $_GET['id_obat'];
$sql = "SELECT * FROM tb_obat WHERE id_obat='$id'";
$result = $koneksi->query($sql);
while ($row = $result->fetch_assoc()) {
	$kate	= $row['kategori'];
	$namaobat= $row['nama_obat'];
	$harga	= $row['harga'];
    $stok	= $row['stok'];
	$farmasi= $row['farmasi'];
}
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <!-- <link href="asset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet"> -->
    <!-- Custom CSS -->
    <link href="asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <title>Input Data Buku Tamu</title>
  </head>
  <body>
   <div class="container">
 		<div class="card-header">
 			<h3>Form EditPersediaan</h3>
 		</div>
 		<div class="card-body">
 			<form action="proses_updateObt.php?id=<?php echo $_GET['id_obat'] ?>" method="POST">
                
 				<div class="form-group">
 					<input type="text" name="id_obat" value="<?php echo $_GET['id_obat'] ?>"readonly required class="form-control"> </div>
 				<div class="form-group">
 					<input type="text" name="kategori" value="<?php echo $kate ?>" required class="form-control" > </div>
 				<div class="form-group">
 					<input type="text" name="nama_obat" value="<?php echo $namaobat ?>" required class="form-control" readonly> </div>
				<div class="form-group">
 					<input type="text" name="harga" value="<?php echo $harga ?>" required class="form-control" readonly> </div>
 				<div class="form-group">
 					<input type="text" name="stok" value="<?php echo  $stok ?>" required class="form-control" placeholder="masukan stok obat"> </div>
                <div class="form-group">
 					<input type="text" name="farmasi" value="<?php echo $farmasi ?>" required class="form-control" readonly> </div>
			
			
 				<div class="form-group">
 					<input type="submit" class="btn btn-primary btn-block" onclick="return confirm('Apakah anda yakin ingin mengubah data?')" value="Ubah"/></div>
 						
			</form>
			<?php 
				$sql = "SELECT * FROM tb_obat ORDER BY id_obat ASC";
				$result	=$koneksi->query($sql);
			 ?>

			

 		</div>
 		<div class="card-footer">
 			<a href="hal_persediaan.php"><i class="fa fa-arrow-left"></i> Kembali</a>
 		</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>