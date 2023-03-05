<?php 
if ($_POST['Submit'] == "Submit") {
  $no_claim    = $_POST['no_claim'];
  $why_loose          = $_POST['why_loose'];
  $counter2     = $_POST['counter2'];
  $pic2        = $_POST['pic2'];
  $duedate2         = $_POST['duedate2'];
  $cresult2      = $_POST['cresult2'];
    include 'konfig.php';
    mysqli_query($conn,"UPDATE countermeasures2 SET no_claim = '$no_claim', why_loose = '$why_loose', counter2 = '$counter2', pic2 = '$pic2', duedate2 = '$duedate2', cresult2 = '$cresult2' where no_claim='$no_claim'");
      // periska query apakah ada error
     {
        echo "<script>alert('Data berhasil diubah.');window.location='countermeasures.php';</script>";
      }
    }
    ?>
<?php 
