<?php 
if ($_POST['Submit'] == "Submit") {
  $no_claim    = $_POST['no_claim'];
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
  if(empty($_POST['no_claim'])||empty($_POST['product_name'])||empty($_POST['manufacte_date'])||empty($_POST['material_code'])||empty($_POST['ngqty'])||empty($_POST['model'])||empty($_POST['where1'])||empty($_POST['pro_date'])||empty($_POST['phenomenom'])||empty($_POST['emergency_action'])) {
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
  $cek=mysqli_num_rows (mysqli_query($conn,"SELECT no_claim FROM define_the_claim_situation WHERE no_claim='$_POST[no_claim]'"));
  if ($cek > 0) {
  ?>
      <script language="JavaScript">
      alert('No Pengujian sudah dipakai!, silahkan ganti No Pengujian yang lain');
      document.location='define.php';
      </script>
  <?php
  }
  //Masukan data ke Table
  $input    ="INSERT INTO define_the_claim_situation (no_claim,product_name,manufacte_date,material_code,ngqty,model,where1,pro_date,phenomenom,emergency_action) VALUES ('$no_claim','$product_name','$manufacte_date','$material_code','$ngqty','$model','$where1','$pro_date','$phenomenom','$emergency_action')";
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