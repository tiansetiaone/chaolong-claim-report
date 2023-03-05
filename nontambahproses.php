<?php 
if ($_POST['Submit'] == "Submit") {
  $branch_company    = $_POST['branch_company'];
  $product_name    = $_POST['product_name'];
  $date        = $_POST['date'];
  $customer        = $_POST['customer'];
  $model   = $_POST['model'];
  $phenomenon    = $_POST['phenomenon'];
  $root_cause          = $_POST['root_cause'];
  $occurence        = $_POST['occurence'];
  $flow_out        = $_POST['flow_out'];
  $fm_classify    = $_POST['fm_classify'];
  $customer_put    = $_POST['customer_put'];
  $reoccur          = $_POST['reoccur'];
  $etd        = $_POST['etd'];
  $status        = $_POST['status'];
  $remark        = $_POST['remark'];
  //validasi data data kosong
  if (empty($_POST['branch_company'])||empty($_POST['product_name'])||empty($_POST['date'])||empty($_POST['customer'])||empty($_POST['model'])||empty($_POST['phenomenon'])||empty($_POST['root_cause'])||empty($_POST['occurence'])||empty($_POST['flow_out'])||empty($_POST['fm_classify'])||empty($_POST['customer_put'])||empty($_POST['reoccur'])||empty($_POST['etd'])||empty($_POST['status'])||empty($_POST['remark'])) {
      ?>
          <script language="JavaScript">
              alert('Data Harap Dilengkapi!');
              document.location='nontambah.php';
          </script>
      <?php
  }
  else {
  include 'konfig.php';
  //cek NIP di database
  $cek=mysqli_num_rows (mysqli_query($conn,"SELECT branch_company FROM ncc_list WHERE branch_company='$_POST[branch_company]'"));
  if ($cek > 0) {
  ?>
      <script language="JavaScript">
      alert('No Pengujian sudah dipakai!, silahkan ganti No Pengujian yang lain');
      document.location='nontambah.php';
      </script>
  <?php
  }
  //Masukan data ke Table
  $input    ="INSERT INTO ncc_list (branch_company,product_name,date,customer,model,phenomenon,root_cause,occurence,flow_out,fm_classify,customer_put,reoccur,etd,status,remark) VALUES ('$branch_company','$item','$month','$date','$customer','$model','$phenomenon','$root_cause','$occurence','$flow_out','$fm_classify','$customer_put','$reoccur','$etd','$status','$remark')";
  $query_input =mysqli_query($conn,$input);
  if ($query_input) {
  //Jika Sukses
  ?>
      <script language="JavaScript">
      alert('Input Data Berhasil');
      document.location='nontambah.php';
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