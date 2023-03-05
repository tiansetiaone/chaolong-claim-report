<?php 
if ($_POST['Submit'] == "Submit") {
  $no_claim    = $_POST['no_claim'];
  $product_name           = $_POST['product_name'];
  $part_name           = $_POST['part_name'];
  $checked_by     = $_POST['checked_by'];
  $approved_by        = $_POST['approved_by'];
  //validasi data data kosong
  if (empty($_POST['no_claim'])||empty($_POST['product_name'])||empty($_POST['part_name'])||empty($_POST['checked_by'])||empty($_POST['approved_by'])) {
      ?>
          <script language="JavaScript">
              alert('Data Harap Dilengkapi!');
              document.location='claimreport.php';
          </script>
      <?php
  }
  else {
  include 'konfig.php';
  //cek NIP di database
  $cek=mysqli_num_rows (mysqli_query($conn,"SELECT no_claim FROM data_claim WHERE no_claim='$_POST[no_claim]'"));
  if ($cek > 0) {
  ?>
      <script language="JavaScript">
      alert('No Pengujian sudah dipakai!, silahkan ganti No Pengujian yang lain');
      document.location='claimreport.php';
      </script>
  <?php
  }
  //Masukan data ke Table
  $input    ="INSERT INTO data_claim (no_claim,product_name,part_name,checked_by,approved_by) VALUES ('$no_claim','$product_name','$part_name','$checked_by','$approved_by')";
  $query_input =mysqli_query($conn,$input);
  if ($query_input) {
  //Jika Sukses
  ?>
      <script language="JavaScript">
      alert('Input Data Berhasil');
      document.location='claimreport.php';
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