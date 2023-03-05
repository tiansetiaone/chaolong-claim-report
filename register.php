<?php 
session_start();
if($_SESSION){
    if($_SESSION['level']=="Administrator")
    {
        header("Location: admin.php");
    }
    if($_SESSION['level']=="QC")
    {
        header("Location: qc.php");
    }
}


include('konfig.php'); 
?>
<?php 

include 'konfig.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
 $username = $_POST['username'];
 $nama = $_POST['nama'];
 $password = md5($_POST['password']);
 $cpassword = md5($_POST['cpassword']);
 $level = $_POST['level'];

 if ($password == $cpassword) {
  $sql = "SELECT * FROM user WHERE username='$username'";
  $result = mysqli_query($conn, $sql);
  if (!$result->num_rows > 0) {
   $sql = "INSERT INTO user (username, nama, password, level)
     VALUES ('$username', '$nama', '$password','$level')";
   $result = mysqli_query($conn, $sql);
   if ($result) {
    echo "<script>alert('Selamat, registrasi berhasil!')</script>";
    $username = "";
    $nama = "";
    $_POST['password'] = "";
    $_POST['cpassword'] = "";
    $level= "";
   } else {
    echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
   }
  } else {
   echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
  }
  
 } else {
  echo "<script>alert('Password Tidak Sesuai')</script>";
 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CHAO LONG MOTOR PARTS CORP | REGISTER</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href='img/chao.png' rel='shortcut icon'>

  <style>
    body {
      background-image : url("https://aldrichmotor.com/wp-content/uploads/2015/03/motorcycle-exploded-view-2.jpg");
      background-size : 2000pt 1000pt;
      background-position : center center;
    }
  </style>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h2"><b>USER</b>  REGISTRATION</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?php echo $nama; ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button name="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
          </div>
            <a href="index.php" class="text-center">I already have a membership</a>
        </div>
        </div>
      </form>

      <div class="social-auth-links text-center">
   
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
