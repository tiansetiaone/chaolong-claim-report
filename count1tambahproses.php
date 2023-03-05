<?php 
if ($_POST['Submit'] == "Submit") {
  $no_claim     = $_POST['no_claim'];
  $why_make    = $_POST['why_make'];
  $counter    = $_POST['counter'];
  $pic1          = $_POST['pic1'];
  $duedate1        = $_POST['duedate1'];
  $cresult1        = $_POST['cresult1'];
  //validasi data data kosong
  if (empty($_POST['no_claim'])||empty($_POST['why_make'])||empty($_POST['counter'])||empty($_POST['pic1'])||empty($_POST['duedate1'])||empty($_POST['cresult1'])) {
      ?>
          <script language="JavaScript">
              alert('Data Harap Dilengkapi!');
              document.location='countermeasures.php';
          </script>
      <?php
  }
  else {
  include 'konfig.php';
  //cek NIP di database
  $cek=mysqli_num_rows (mysqli_query($conn,"SELECT no_claim FROM countermeasures1 WHERE no_claim='$_POST[no_claim]'"));
  if ($cek > 0) {
  ?>
      <script language="JavaScript">
      alert('No Pengujian sudah dipakai!, silahkan ganti No Pengujian yang lain');
      document.location='countermeasures.php';
      </script>
  <?php
  }
  //Masukan data ke Table
  $input    ="INSERT INTO countermeasures1 (no_claim,why_make,counter,pic1,duedate1,cresult1) VALUES ('$no_claim','$why_make','$counter','$pic1','$duedate1','$cresult1')";
  $query_input =mysqli_query($conn,$input);
  if ($query_input) {
  //Jika Sukses
  ?>
      <script language="JavaScript">
      alert('Input Data Berhasil');
      document.location='countermeasures.php';
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