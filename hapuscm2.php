<?php 
// koneksi database
include 'konfig.php';
 
// menangkap data id yang di kirim dari url
$no_claim = $_GET['no_claim'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from countermeasures2 where no_claim='$no_claim'");
{
// mengalihkan halaman kembali ke index.php
echo "<script>alert('Data berhasil dihapus.');window.location='countermeasures.php';</script>";
}
?>