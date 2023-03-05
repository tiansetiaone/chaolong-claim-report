<?php 
include("konfig.php");
$no_claim = $_POST['no_claim'];
$tampil=mysqli_query($conn,"SELECT * FROM data_claim WHERE no_claim='$no_claim'");
$jml=mysqli_num_rows($tampil);
 
if($jml > 0){    
    while($r=mysqli_fetch_array($tampil)){
        ?>
        <option value="<?php echo $r['no_claim'] ?>"><?php echo $r['product_name'] ?></option>
        <?php        
    }
}else{
    echo "<option selected>- Data Wilayah Tidak Ada, Pilih Yang Lain -</option>";
}
 
?>