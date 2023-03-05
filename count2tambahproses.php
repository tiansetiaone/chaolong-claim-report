<?php 
if ($_POST['Submit'] == "Submit") {
  $no_claim    = $_POST['no_claim'];
  $why_loose    = $_POST['why_loose'];
  $counter2    = $_POST['counter2'];
  $pic2          = $_POST['pic2'];
  $duedate2        = $_POST['duedate2'];
  $cresult2        = $_POST['cresult2'];
  //validasi data data kosong
  if (empty($_POST['no_claim'])||empty($_POST['why_loose'])||empty($_POST['counter2'])||empty($_POST['pic2'])||empty($_POST['duedate2'])||empty($_POST['cresult2'])) {
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
  $cek=mysqli_num_rows (mysqli_query($conn,"SELECT no_claim FROM countermeasures2 WHERE no_claim='$_POST[no_claim]'"));
  if ($cek > 0) {
  ?>
      <script language="JavaScript">
      alert('No Pengujian sudah dipakai!, silahkan ganti No Pengujian yang lain');
      document.location='countermeasures.php';
      </script>
  <?php
  }
  //Masukan data ke Table
  $input    ="INSERT INTO countermeasures2 (no_claim,why_loose,counter2,pic2,duedate2,cresult2) VALUES ('$no_claim','$why_loose','$counter2','$pic2','$duedate2','$cresult2')";
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