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

  <div class="col-12" style="padding-left:35px;padding-top:20px;">
    <button type="submit" name="Submit" value="Submit" class="btn btn-primary">Simpan</button>
    <a href='index.php' class="btn btn-primary">Kembali</a>
  </div>
</form>
</div>