<?php 
if ($_POST['Submit'] == "Submit") {
  $no_claim     = $_POST['no_claim'];
  $ng_product    = $_POST['ng_product'];
  $procustion         = $_POST['procustion'];
  //validasi data data kosong
  if(empty($_POST['no_claim'])||empty($_POST['ng_product'])||empty($_POST['procustion'])) {
    ?>
          <script language="JavaScript">
              alert('Data Harap Dilengkapi!');
              document.location='rootcause.php';
          </script>
      <?php
  }
  else {
  include 'konfig.php';
  //cek NIP di database
  $cek=mysqli_num_rows (mysqli_query($conn,"SELECT no_claim FROM root_cause WHERE no_claim='$_POST[no_claim]'"));
  if ($cek > 0) {
  ?>
      <script language="JavaScript">
      alert('No Pengujian sudah dipakai!, silahkan ganti No Pengujian yang lain');
      document.location='rootcause.php';
      </script>
  <?php
  }
  //Masukan data ke Table
  $input    ="INSERT INTO root_cause (no_claim,ng_product,procustion) VALUES ('$no_claim','$ng_product','$procustion')";
  $query_input =mysqli_query($conn,$input);
  if ($query_input) {
  //Jika Sukses
  ?>
      <script language="JavaScript">
      alert('Input Data Berhasil');
      document.location='rootcause.php';
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