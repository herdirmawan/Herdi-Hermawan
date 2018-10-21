<div class="container mt-5">
  <h3 style="text-align: center">Tambah Aksesoris</h3><br>
  <form action="<?= BASEURL; ?>/aksesoris/insertAksesoris" method="post">
    <div class="form-group col-4" style="margin: auto">
      <label>Merk:</label>
      <input type="text" class="form-control" placeholder="Masukkan Merk" name="merk">
    </div><br>
    <div class="form-group col-4" style="margin: auto">
      <label>Jenis:</label>
      <input type="text" class="form-control" placeholder="Masukkan Jenis" name="jenis">
    </div><br>
    <div class="form-group col-4" style="margin: auto">
      <label>Bahan:</label>
      <input type="text" class="form-control" placeholder="Masukkan Bahan" name="bahan">
    </div><br>
    <div class="form-group col-4" style="margin: auto">
      <label>Harga:</label>
      <input type="text" class="form-control" placeholder="Masukkan Harga" name="harga">
    </div><br><br>
    <div class="form-group col-4" style="margin: auto">
      <label>Stok:</label>
      <input type="text" class="form-control" placeholder="Masukkan Stok" name="stok">
    </div><br><br>
    <center>
      <button type="submit" id="submit" name="submit" class="btn btn-primary">Tambah</button>
    </center>
  </form>
</div>
