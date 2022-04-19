<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
    require '../proses/panggil.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Toko ABC Destio</title>
		<!-- BOOTSTRAP 4-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <!-- DATATABLES BS 4-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- jQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <!-- DATATABLES BS 4-->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <!-- BOOTSTRAP 4-->
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

        <link rel="stylesheet" href="css/style.css">

	</head>
    <body style="background:#eaeaea;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">

                    <?php if(!empty($_SESSION['ADMIN'])){?>
                    <br/>
                    <span style="color:#363636";>Selamat Datang, <?php echo $sesi['nama_pengguna'];?></span>
                    <div class="float-right">	
				        <a style="border-radius:15px;
                        padding:10px; 
                        background:#7f81c2; 
                        margin-right:20px;
                        border:none;" 
                        href="../daftaruser.php" class="btn btn-success btn-md" style="margin-right:1pc;">Daftar User</a> 

				        <a style="border-radius:15px; 
                        padding:10px; 
                        background:#35a4b6; 
                        margin-right:20px;
                        border:none;"
                        href="../logout.php" class="btn btn-danger btn-md float-right"><span class="fa fa-sign-out"></span> Logout</a>
			        </div>
                    
                    <br/><br/><br/>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Barang Toko ABC Destio</h4>
                        </div>
                        <div class="card-body">
      <div class="tambah_brg">
      <?php
	  require_once'database.php';
	  $db=new Database();
	  $hasil=$db->produkAll();  
	  echo "<a href='addBrg.php' class='btn btn-success text-white'>Tambah Barang </a>";
      ?>
      </div>
      
      <?php
	  if ($hasil->num_rows>0) {
		echo "<table class='table table-striped'>
		   <thead>
			<tr>					
			<th scope='col'>Kode Barang</th>
			<th scope='col'>Nama</th>
			<th scope='col'>Harga</th>
			<th scope='col'>Gambar</th>
			<th scope='col'>Stok</th>
			<th scope='col'>Keterangan</th>
			<th scope='col'>Opsi</th>
			</tr>
		    </thead>
		    <tbody>";
			while ($row=$hasil->fetch_assoc()){
				$teks="<tr>";
				$teks.="<td>".$row["id"]."</td>";
				$teks.="<td>".$row["nama"]."</td>";			
				$teks.="<td>".$row["hrg"]."</td>";
				$teks.="<td><img src='img/".$row["foto"]."' style='height:100px;'></img></td>";
				$teks.="<td>".$row["jml"]."</td>";
				$teks.="<td>".$row["keterangan"]."</td>";
                ?>

                <div class="tbl_opsi">
                <?php
				$teks.="<td><a href='editBrg.php?id=".htmlentities($row["id"])."'  ' class='tbl_opsi'>Edit </a>";
				$teks.="<a href='delBrg.php?id=".htmlentities($row["id"])."'' ' class='tbl_opsi''>Hapus</a></td>";
                ?>
                </div>

                <?php
				$teks.="</tr>";	
				echo $teks;
			}		
			echo "</tbody>
			      </table>";
		
		} else {
			echo "jml rec: 0 " ;
		}
		//$conn->close();
	?>	




                            
                        </div>
                    </div>
                    <?php }else{?>
                        <br/>
                        <div class="alert alert-info">
                            <h3> Hayooo mau ngapain? Login dulu dong...</h3>
                            <p>Silahkan klik tombol login dibawah</p>
                            <hr/>
                            <p><a href="../index.php">Login Disini</a></p>
                        </div>
                    <?php }?>
			    </div>
			</div>
		</div>
        <script>
            $('#mytable').dataTable();
        </script>
	</body>
</html>
