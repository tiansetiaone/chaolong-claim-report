<?php
//script php dimodifikasi berdasarkan script
//http://www.phpeasystep.com/phptu/18.html

//koneksi ke database
include "konfig.php";

//menangkap posting dari field input form
$no_claim        = $_POST['no_claim'];
$emergency_action        = $_POST['emergency_action'];

$namafolder="img/"; //folder tempat menyimpan file
if (!empty($_FILES["gambar"]["tmp_name"]))
{
$jenis_gambar=$_FILES['gambar']['type']; //memeriksa format gambar
if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
{
$lampiran = $namafolder . basename($_FILES['gambar']['name']);

//mengupload gambar dan update row table database dengan path folder dan nama image
if (move_uploaded_file($_FILES['gambar']['tmp_name'], $lampiran)) {

$query_insert = "INSERT INTO 4m_analyze (no_claim,emergency_action,gambar)
VALUES ('$no_claim','$emergency_action','$lampiran')";
$insert = mysqli_query($conn,$query_insert);
?>
<script language="JavaScript">
alert('Input Data Berhasil');
document.location='investigation.php';
</script>
<?php

echo"
Data berhasil disimpan <br/>
Nama : $emergency_action <br/>
<br/><br/>
<img src='$lampiran' height='300'>";

//Jika gagal upload, tampilkan pesan Gagal
} else {
echo "Gambar gagal dikirim";
}
} else {
echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
}
} else {
echo "Anda belum memilih gambar";
}
?>