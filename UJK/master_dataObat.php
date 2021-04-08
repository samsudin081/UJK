<?php 
require_once 'database.php';
 ?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
          body{
                margin:90px;
          }
      form{
            margin: 30px;
      }
    </style>
  </head>
  <body>
   <div class="container">

                  
                    <h1 align="center">MASTER DATA OBAT</h1>
                  <form action="proses_insertObt.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="id_obat" required class="form-control" placeholder="Masukkan ID obat"> </div>
                        <div class="form-group">
                            <input type="text" name="kategori" required class="form-control" placeholder="Masukkan kategori Obat"> </div>
                        <div class="form-group">
                            <input type="text" name="nama obat" required class="form-control" placeholder="Masukkan nama obat"> </div>
                        <div class="form-group">
                            <input type="text" name="harga" required class="form-control" placeholder="Masukkan harga"> </div>
                        <div class="form-group">
                            <input type="text" name="stok" required class="form-control" placeholder="Masukkan stok"> </div>
                        <div class="form-group">
                            <input type="text" name="farmasi" required class="form-control" placeholder="Masukkan farmasi"> </div>
                            
                            <input type="submit" class="btn btn-primary btn-block" value="Kirim"/></div>
 						
			       
                        <?php 
                            $sql = "SELECT * FROM tb_tamu ORDER BY id_tamu ASC";
                            $result	=$koneksi->query($sql);
                        ?>
          
             
                    </form>
                        <?php 
                            $sql = "SELECT * FROM tb_obat ORDER BY id_obat ASC";
                            $result	=$koneksi->query($sql);
                        ?>
            
                    <table  id="myTable" class="table table-striped table-bordered table-hover" >
			      
				        <thead>
        					<tr align="center">
        						<th width="50">No</th>
        						<th>ID Obat</th>
        						<th>Kategori</th>
        						<th>Nama Buku</th>
        						<th>Harga</th>
                                <th>Stok</th>
        						<th>farmasi</th>
        						<th>Aksi</th>
            					</tr>
            			</thead>
            			<tbody>
					<?php 
						if ($result->num_rows>0) {
							$no = 1;
							while ($row = $result->fetch_assoc()){
								?>
								<tr align="center">
									<td><?=$no;?></td>
									<td><?=$row['id_obat'];?></td>
									<td><?=$row['kategori'];?></td>
									<td><?=$row['nama_obat'];?></td>
									<td><?=$row['harga'];?></td>
                                    <td><?=$row['stok'];?></td>
									<td><?=$row['farmasi'];?></td>
									<td align="center">
                                                <a href="form_editObt.php?id_obat=<?php echo $row['id_obat'] ?>" class="btn btn-xs btn-warning" title="Ubah">
                                                    <i class="fa fa-pencil"></i>
                                                <a href="proses_hapusObt.php?id_obat=<?=$row['id_obat'] ?>" class="btn btn-xs btn-danger" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus?')" >
                                                <i class="fa fa-trash"></i>
                                                </a>
                                                </a>
                                                </td>
								</tr>
						<?php 
								$no++;
							}
						}
					 ?>

                        <?php 
                            $sql = "SELECT * FROM tb_farmasi ORDER BY id_farmasi ASC";
                            $result	=$koneksi->query($sql);
                        ?>

                    <table  id="myTable" class="table table-striped table-bordered table-hover" >
			    
                  <thead>
                      <tr align="center">
                          <th width="50">No</th>
                          <th>ID farmasi</th>
                          <th>nama farmasi</th>
                          <th>alamat</th>
                          <th>kota</th>
                          <th>telepon</th>
                          <th>Action</th>
                          
                          </tr>
                  </thead>
                  <tbody>
              <?php 
                  if ($result->num_rows>0) {
                      $no = 1;
                      while ($row = $result->fetch_assoc()){
                          ?>
                          <tr align="center">
                              <td><?=$no;?></td>
                              <td><?=$row['id_farmasi'];?></td>
                              <td><?=$row['nama_farmasi'];?></td>
                              <td><?=$row['alamat'];?></td>
                              <td><?=$row['kota'];?></td>
                              <td><?=$row['telepon'];?></td>
                            
                              <td align="center">
                                         
                                          <a href="form_editObt.php?id_obat=<?php echo $row['id_obat'] ?>" class="btn btn-xs btn-warning" title="Ubah">
                                              <i class="fa fa-pencil"></i>
                                             <a href="proses_hapusObt.php?id_obat=<?=$row['id_obat'] ?>" class="btn btn-xs btn-danger" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus?')" >
                                                <i class="fa fa-trash"></i>
                                          </a>
                                          </td>
                          </tr>
                  <?php 
                          $no++;
                      }
                  }
               ?>

                     <?php 
				$sql = "SELECT * FROM tb_farmasi ORDER BY id_farmasi ASC";
				$result	=$koneksi->query($sql);
			 ?>
					 
					
				</tbody>

			</table>


 		</div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
   



</body>
</html>