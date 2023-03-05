<?php 
if ($_POST['Submit'] == "Submit") {
  $no_claim    = $_POST['no_claim'];
  $why_make           = $_POST['why_make'];
  $counter     = $_POST['counter'];
  $pic1        = $_POST['pic1'];
  $duedate1         = $_POST['duedate1'];
  $cresult1      = $_POST['cresult1'];
    include 'konfig.php';
    mysqli_query($conn,"UPDATE countermeasures1 SET no_claim = '$no_claim', why_make = '$why_make', counter = '$counter', pic1 = '$pic1', duedate1 = '$duedate1', cresult1 = '$cresult1' where no_claim='$no_claim'");
      // periska query apakah ada error
     {
        echo "<script>alert('Data berhasil diubah.');window.location='countermeasures.php';</script>";
      }
    }
    ?>
<?php 
