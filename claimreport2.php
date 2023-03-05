<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Icon -->
  <link href='img/chao.png' rel='shortcut icon'>
  <script src="dist/js/jquery.min.js"></script>  
  <script src="dist/js/bootstrap.min.js"></script> 
  <style>
    fieldset {
  padding: 0.2em;
  font:100%/1 sans-serif;
  border:2px solid #9B9393;
  }
  legend {
  padding: 0.1em 0.5em;
  border:5px solid #9B9393;
  color:green;
  font-size:90%;
  text-align:center;
  }
  </style>
</head>
<body>
  <div class="row">
  <div class="col-md-6" >
                <!-- general form elements disabled -->
                <div class="card card-warning" >
              <div class="card-header" style="background-color:#54864F" >
                <h3 class="card-title" style="color:white">Data Claim</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No Claim</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Part Name</label>
                    <div class="col-sm-10">
                      <textarea type="password" class="form-control" rows="3" id="inputPassword3" placeholder="Password"></textarea>
                    </div>
                  </div>
                </div>
                <fieldset>
                <legend>Made By</legend>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group2" style="margin-left:10px;display:flex;">
                      <div class="form-check" style="padding-right:20px;">
                          <label class="form-check-label"><b>Checkbox</b></label>
                        </div>
                        <div class="form-check" style="padding-right:20px;">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Checkbox</label>
                        </div>
                        <div class="form-check" style="padding-right:20px;">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Checkbox</label>
                        </div>
                        <div class="form-check" style="padding-right:20px;">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Checkbox</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group2" style="margin-left:10px;display:flex;">
                      <div class="form-check" style="padding-right:20px;">
                          <label class="form-check-label"><b>Checkbox</b></label>
                        </div>
                        <div class="form-check" style="padding-right:20px;">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Checkbox</label>
                        </div>
                        <div class="form-check" style="padding-right:20px;">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Checkbox</label>
                        </div>
                        <div class="form-check" style="padding-right:20px;">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Checkbox</label>
                        </div>
                      </div>
                      </fieldset>
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-left:500px;margin-bottom:30px;margin-top:20px;">
                      <button class="btn btn-primary me-md-2" style="background-color:red" type="button">Button</button> &nbsp;&nbsp;
                      <button class="btn btn-primary" style="background-color:yellow" type="button">Button</button>
                      </div>
                    </div>
                  </div>
                    </div>
                  </div>
                </form>
                <div class="card card-primary">
                <div class="card-header" style="background-color:#007BFF">
                <h3 class="card-title" style="color:white">Define The Claim Situation</h3>
              </div>
          <div class="tambahform">
<form action="prosestambah.php" method="POST" name="form_tambah" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">No.Registrasi Kendaraan</label>
    <input type="text" class="form-control" name="noreg">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Tahun Pembuatan</label>
    <input type="number" maxlenght="4" class="form-control" name="tahun" >
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nama Pemilik</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Kapasitas Silinder</label>
    <input type="text" class="form-control" name="kapasitas">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Merk Kendaraan</label>
    <input type="text" class="form-control" name="merek">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Pilih Warna</label>
    <td><select class="form-control" name="warna">
                    <option value="-">- Pilih Warna -
                    <option value="Merah">Merah
                    <option value="Hitam">Hitam
                </select></td>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Address</label>
    <textarea type="text" class="form-control" name="alamat"></textarea>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Bahan Bakar</label>
    <input type="text" class="form-control" name="bahan">
  </div>
  <div class="col-md-10">
    <label for="inputEmail4" class="form-label">Address</label>
    <textarea type="text" class="form-control" name="alamat"></textarea>
  </div>

  <div class="col-12" style="padding-left:35px;padding-top:20px;">
    <button type="submit" name="Submit" value="Submit" class="btn btn-primary">Simpan</button>
    <a href='index.php' class="btn btn-primary">Kembali</a>
  </div>
</form>
</div>
          </div>
              </div>
              <!-- /.card-body -->
            </div>  
          </div>
          
</div>

  </div>
</body>
</html>