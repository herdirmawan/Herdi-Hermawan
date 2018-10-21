<div class="container mt-5">
     <div class="container mt-5">
     <h3 style="text-align: center">Edit Aksesoris</h3><br>
     <form action="<?= BASEURL; ?>/aksesoris/editAksesoris/$data['aksesoris']['merk']" method="post">
          <div class="for-group col-4" style="margin: auto">
               <input type="hidden" name="id" value="<?= $data['aksesoris']['id'] ?>">
          </div>
          <div class="form-group col-4" style="margin: auto">
               <label>Merk:</label>
               <input type="text" class="form-control" name="merk" value="<?= $data['aksesoris']['merk'] ?>">
          </div><br>
          <div class="form-group col-4" style="margin: auto">
               <label>Jenis:</label>
               <input type="text" class="form-control" name="jenis" value="<?= $data['aksesoris']['jenis'] ?>">
          </div><br>
          <div class="form-group col-4" style="margin: auto">
               <label>Bahan:</label>
               <input type="text" class="form-control" value="<?= $data['aksesoris']['bahan'] ?>" name="bahan">
          </div><br>
          <div class="form-group col-4" style="margin: auto">
               <label>Harga:</label>
               <input type="text" class="form-control" value="<?= $data['aksesoris']['harga'] ?>" name="harga">
          </div><br>
          <div class="form-group col-4" style="margin: auto">
               <label>Stok:</label>
               <input type="text" class="form-control" value="<?= $data['aksesoris']['stok'] ?>" name="stok">
          </div><br><br>
          <center><button type="submit" id="submit" name="submit" class="btn btn-primary">Edit Aksesoris</button></center>
     </form>
     </div>
</div>
