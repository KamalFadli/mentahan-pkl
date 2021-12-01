<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

   <!-- Style CSS-->
    <link rel="stylesheet" href="style.css">  

      <title>Hello, world!</title>  
  </head>
  <body>
    <!-- Login -->
    <?php
        if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
        echo "<div class='alert'>Username dan Password Salah !</div>";
            }
        }
    ?>
  
    <div class="auth">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="card-body">
         				      <h1 class="mb-5"><img src="img/logosmk.png" width="100" height="100" class="d-inline-block"></h1>
                        <h3 class="mb-5">MASUK</h3>
                        <form>
                            <div class="form-group">
                              <input type="id" class="form-control" name="id" placeholder="Masukan id">
                            </div>
                            <div class="form-group">
                              <input type="password" class="form-control" name="Password" placeholder="Masukan Password">
                            </div>
                            <div class="row">
                                <div class="col-6 text-left">
                                    <div class="from-group from-check ml-2">
                                        <input type="checkbox" class="form-check-input" id="remember">
                                        <label class="form-check-label ml-2  text-white" for="remember">Ingat Password</label> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group my-4">
                                <a href="koneksi.php" class="btn btn-primary form-control">Masuk</a>
                            </div>
                          </form>
                          

                    </div>
                </div>
            </div>
            <div class="footer">
              <div class="card-body">
                <img src="img/smkbisahebat.png" width="150" height="150" class="d-inline-block float-right">
                <blockquote class="blockquote mb-0">
                  <p class="text-white">SMKN 11 KABUPATEN TANGERANG</p>
                  <footer class="blockquote-footer">Jl. Saradan RT.03 RW.01 Kel. Pangkat <br> Kec.Jayanti Kab. Tangerang - Banten 15610 <br> Telp : 0812-9922-0831 </footer>
                </blockquote>
              </div>
              <div class="text-center p-3 text-white" style="background-color: rgba(0, 0, 0, 0.2);">
                © Copyright - SMKN 11 Kab. Tangerang
              </div>
            </div>
        </div>
    </div>


    <!-- Footer-->
    <!-- Optional JavaScript -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>