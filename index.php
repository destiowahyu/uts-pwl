<?php
    // session start();
    if(!empty($_SESSION)){ }else{ session_start(); }
?>
<!doctype html>
<html>
    <head>
        <title>Login - Toko ABC Destio</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>

    <style>
/*untuk teks heading di tag <body>*/

body
{
    background-image: url('img/bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>




    <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <br/><br/>
                <div id="logout">
                    <?php if(isset($_GET['signout'])){?>
                        <div class="alert alert-success">
                            <small>Anda Berhasil Logout</small>
                        </div>
                    <?php }?>
                </div>
                <div id="notifikasi">
                    <div class="alert alert-danger">
                        <small>Username atau password salah, kalau belum punya bikin dulu dong :)</small>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Silahkan Login</h4>
                    </div>
                    <div class="card-body">
						<!-- form berfungsi mengirimkan data input 
						dengan method post ke proses login dengan paramater get aksi login -->
                        <form method="post" action="proses/crud.php?aksi=login" id="formlogin">
                        <div class="form-group">
                            <label>Username</label>
                            <input name="user" class="form-control" placeholder="Masukkan username" type="text" required="required" autocomplete="off">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label>Password</label>
                            <input name="pass" class="form-control" placeholder="Masukkan Password" type="password" required="required" autocomplete="off">
                        </div> <!-- form-group// --> 
                        <div class="form-group">
                            <button type="submit" name="proses_login" class="btn btn-primary btn-block"
                            style=
                            "border-radius:20px;
                            background:#7289e4;
                            border:none;"> Login  </button>
                        </div> <!-- form-group// -->                                                           
                    </form>
                        <div class="form-group">
                            <a style="color:#72ace4;" href="tambah.php"> Belum punya akun?  </a>
                        </div> <!-- form-group//-->
                </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div> 
    </div>
    <script>
      // notifikasi gagal di hide
      <?php if(empty($_GET['get'])){?>
        $("#notifikasi").hide();
      <?php }?>
        var logingagal = function(){
            $("#logout").fadeOut('slow');
            $("#notifikasi").fadeOut('slow');
        };
        setTimeout(logingagal, 4000);
    </script> 
    </body>
</html>