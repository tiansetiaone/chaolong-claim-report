<?php

//membuat koneksi ke database
include 'konfig.php';

//variabel nim yang dikirimkan form.php
$username = $_GET['username'];

//mengambil data
$query = mysqli_query($conn, "select * from user where username='$username'");
$input = mysqli_fetch_array($query);
$data = array(
            'level'      =>  @$input['level'],);

//tampil data
echo json_encode($data);
?>
