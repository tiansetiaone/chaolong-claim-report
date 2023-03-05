<?php 

include 'konfig.php';

error_reporting(0);
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CHAO LONG MOTOR PARTS CORP | CLAIM REPORT</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Icon -->
  <link href='img/chao.png' rel='shortcut icon'>
  <script src="dist/js/jquery.min.js"></script>  
  <script src="dist/js/bootstrap.min.js"></script> 
  <style>
    fieldset {
  padding: 0.2em;
  font:100%/1 sans-serif;
  border:2px solid #9B9393;
  }
  legend {
  padding: 0.1em 0.5em;
  border:5px solid #9B9393;
  color:green;
  font-size:90%;
  text-align:center;
  }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a class="nav-link" href="" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 large"><?php echo $_SESSION['username']; ?></span>
              </a>
      </li>
    </ul>
    <div class="form-inline">
    <div class="input-group"  style=padding-left:500px>
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" >
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
</div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="img/chao.png" alt="Chao-Logo" class="brand-image img-circle elevation-2" style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-size:14px"><b>CHAO LONG MOTOR PARTS CORP</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="index.php" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" style="margin-right:10px;margin-left:5px;margin-bottom:8px;" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                </svg><p><b>DASHBOARD</b></p>
                </a>
                <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
              <p>
                Form Claim
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="dataproduk.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="claimreport.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Claim</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="define.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Define the Claim Situation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="investigation.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>4M Anayze</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="rootcause.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Root Cause</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="countermeasures.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Countermeasures</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Claim</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="non.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NCC List</p>
                </a>
              </li>
            </ul>
          </li>
<li class="nav-item">
  <a class="nav-link" href="logout.php">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-check-fill" viewBox="0 0 16 16" style="margin-right:10px;margin-left:5px;margin-bottom:8px;">
  <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
</svg>
    <p>Logout</p></a>
</li>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row g-3">
          <div class="col-sm-6">
            <h1>CLAIM REPORT</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
   <!-- form define  -->
   <form action="definetambah.php" method="POST" name="form_df">
   <div class="col-md-7" style="max-width: 600px;">
   <div class="card card-warning">
   <div class="card-header" style="background-color:#2848F4" >
    <h3 class="card-title" style="color:white">Define the Claim Situation</h3>
    </div>
    <div class="card-body">
   <form class="row g-3">
   <div class="col-md-12">
    <label for="inputmc" class="form-label">ID Product</label>
    <input type="text" class="form-control" onkeyup="isi_otomatis()" id="product_id" id="inputmc" name="id_product">
  </div>
  <div class="col-md-12">
    <label for="inputmd" class="form-label">Product</label>
    <input type="text" class="form-control" name="product_name" id="product_name" readonly>
</div>
  <div class="col-md-12">
    <label for="inputmd" class="form-label">Manufacte Date</label>
    <input type="date" class="form-control" id="inputmd" name="manufacte_date">
  </div>
  <div class="col-md-12">
    <label for="inputmc" class="form-label">Material Code</label>
    <input type="text" class="form-control" id="inputmc" name="material_code">
  </div>
  <div class="col-md-12">
    <label for="inputng" class="form-label">NG Q ty/ Ratio</label>
    <input type="text" class="form-control" id="inputng" name="ngqty">
  </div>
  <div class="col-md-12">
    <label for="inputmodel" class="form-label">Model</label>
    <input type="text" class="form-control" id="inputmodel" name="model">
  </div>
  <div class="col-md-12">
    <label for="inputehere" class="form-label">Where</label>
    <input type="text" class="form-control" id="inputehere" name="where1">
  </div>
  <div class="col-md-12">
    <label for="inputpd" class="form-label">Pro Date</label>
    <input type="date" class="form-control" id="inputpd" name="pro_date">
  </div>
  <div class="col-md-12">
    <label for="inputphenom" class="form-label">Phenomenon</label>
    <input type="text" class="form-control" id="inputphenom" name="phenomenom">
  </div>
  <div class="col-md-12">
  <label for="inputemergency" class="form-label">Emergency Action and Investigation</label>
  <textarea class="form-control" id="inputemergency" name="emergency_action" rows="3" width="10" style="margin-bottom:5px;"></textarea>
</div>
<br/>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-left:400px;margin-bottom:30px;margin-top:20px;">
 <button class="btn btn-primary me-md-2" style="background-color:red;color:black" type="submit"><b>Delete</b></button> &nbsp;&nbsp;
 <button class="btn btn-primary" style="background-color:yellow;color:black" type="submit" name="Submit" value="Submit"><b>Submit</b></button>
</div>
</div>
</div>
</form>
<div> <button class="btn btn-primary me-md-2" style="background-color:green;margin-left:950px;padding-inline:30px;" type="button"><a href="investigation.php">Next</a></button> </div>
 </div>
</div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> Halal
    </div>
    <strong>Copyright &copy; 2022 <a href="">Tian Ahmad Setiawan</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            function isi_otomatis(){
                var product_id = $("#product_id").val();
                $.ajax({
                    url: 'ajax.php',
                    data:"product_id="+product_id ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#product_name').val(obj.product_name);
                });
            }
        </script>
</body>
</html>

<?php 
if ($_POST['Submit'] == "Submit") {
  $id_product    = $_POST['id_product'];
  $product_name           = $_POST['product_name'];
  $manufacte_date     = $_POST['manufacte_date'];
  $material_code        = $_POST['material_code'];
  $ngqty    = $_POST['ngqty'];
  $model          = $_POST['model'];
  $where1    = $_POST['where1'];
  $pro_date        = $_POST['pro_date'];
  $phenomenom     = $_POST['phenomenom'];
  $emergency_action       = $_POST['emergency_action'];
  //validasi data data kosong
  if(empty($_POST['id_product'])||empty($_POST['product_name'])||empty($_POST['manufacte_date'])||empty($_POST['material_code'])||empty($_POST['ngqty'])||empty($_POST['model'])||empty($_POST['where1'])||empty($_POST['pro_date'])||empty($_POST['phenomenom'])||empty($_POST['emergency_action'])) {
    ?>
          <script language="JavaScript">
              alert('Data Harap Dilengkapi!');
              document.location='define.php';
          </script>
      <?php
  }
  else {
  include 'konfig.php';
  //cek NIP di database
  $cek=mysqli_num_rows (mysqli_query($conn,"SELECT id_product FROM define_the_claim_situation WHERE id_product='$_POST[id_product]'"));
  if ($cek > 0) {
  ?>
      <script language="JavaScript">
      alert('No Pengujian sudah dipakai!, silahkan ganti No Pengujian yang lain');
      document.location='define.php';
      </script>
  <?php
  }
  //Masukan data ke Table
  $input    ="INSERT INTO define_the_claim_situation (id_product,product_name,manufacte_date,material_code,ngqty,model,where1,pro_date,phenomenom,emergency_action) VALUES ('$id_product','$product_name','$manufacte_date','$material_code','$ngqty','$model','$where1','$pro_date','$phenomenom','$emergency_action')";
  $query_input =mysqli_query($conn,$input);
  if ($query_input) {
  //Jika Sukses
  ?>
      <script language="JavaScript">
      alert('Input Data Berhasil');
      document.location='define.php';
      </script>
  <?php
  }
  else {
  //Jika Gagal
  echo "Input Data Gagal!, Silahkan diulangi!";
  }
//Tutup koneksi engine MySQL
  mysqli_close($conn);
  }
}
?>

<script type="text/javascript">
	$('#no_claim').change(function() { 
		var no_claim = $(this).val(); 
		$.ajax({
			type: 'POST', 
			url: 'ajax_select.php', 
			data: 'no_claim=' + no_claim, 
			success: function(response) { 
				$('#product_name').html(response); 
			}
		});
	});
 
</script>

