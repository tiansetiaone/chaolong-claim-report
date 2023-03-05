<?php 
if ($_POST['Submit'] == "Submit") {
  $product_id    = $_POST['product_id'];
  $product_name    = $_POST['product_name'];
  $model          = $_POST['model'];
  $pro_date        = $_POST['pro_date'];
  $stok        = $_POST['stok'];
  //validasi data data kosong
  if (empty($_POST['product_id'])||empty($_POST['product_name'])||empty($_POST['model'])||empty($_POST['pro_date'])||empty($_POST['stok'])) {
      ?>
          <script language="JavaScript">
              alert('Data Harap Dilengkapi!');
              document.location='dataproduktambah.php';
          </script>
      <?php
  }
  else {
  include 'konfig.php';
  //cek NIP di database
  $cek=mysqli_num_rows (mysqli_query($conn,"SELECT product_id FROM products WHERE product_id='$_POST[product_id]'"));
  if ($cek > 0) {
  ?>
      <script language="JavaScript">
      alert('No Pengujian sudah dipakai!, silahkan ganti No Pengujian yang lain');
      document.location='dataproduktambah.php';
      </script>
  <?php
  }
  //Masukan data ke Table
  $input    ="INSERT INTO products (product_id,product_name,model,pro_date,stok) VALUES ('$product_id','$product_name','$model','$pro_date','$stok')";
  $query_input =mysqli_query($conn,$input);
  if ($query_input) {
  //Jika Sukses
  ?>
      <script language="JavaScript">
      alert('Input Data Berhasil');
      document.location='dataproduk.php';
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