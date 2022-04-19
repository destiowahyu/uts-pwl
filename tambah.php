

<!DOCTYPE HTML>
<html>
	<head>
		<title>Tambah User</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
    <body style="background:#eaeaea;">
		<div class="container">
			<br/>

			<div class="float-right">	 
				<a href="logout.php" style=" background:#4b6fff; border:none;" class="btn btn-danger btn-md float-right">Login Ulang</a>
			</div>		
			<br/><br/><br/>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-lg-6">
					<br/>
					
					<div class="card">
						<div class="card-header">
						<p>Gabisa login karena gapunya akun?</p>
						<h4 class="card-title">Buat akun dulu disini</h4>
						</div>
						<div class="card-body">
							<form action="proses/crud.php?aksi=tambah" method="POST">
								<div class="form-group">
									<label>Nama </label>
									<input type="text" value="" class="form-control" name="nama">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="harga" value="" class="form-control" name="email">
								</div>
								<div class="form-group">
									<label>Telepon</label>
									<input type="number" value="" class="form-control" name="telepon">
								</div>
								<div class="form-group">
									<label>Username</label>
									<input type="text" value="" class="form-control" name="user">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" value="" class="form-control" name="pass">
								</div>
								<div class="form-group">
									<label>Peran</label>
									<input name="peran" class="form-control"></textarea>
								</div>
								<button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"> </i> Tambah User</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</body>
</html>