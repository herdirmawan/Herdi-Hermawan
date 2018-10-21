<div class="container mt-5">
  <div class="row">
    <div class="col-7" style="margin: auto;">
    <h3 style="text-align: center">Daftar Aksesoris</h3><br>
    <form action="<?= BASEURL; ?>/aksesoris/" method="post">
      <center>
        <input type="text" name="merk">
        <button type="submit" name="cari">Cari Aksesoris</button>
      </center>
    </form>
    <br><br>
    <center><a href="<?= BASEURL; ?>/aksesoris/insertAksesoris" style="text-decoration: none;" class="btn-success btn-lg">Add Aksesoris</a ></center>
    <br>
    <?php foreach ($data['aksesoris'] as $key  ) { ?>
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <span style="width: 300px;"><?= $key['merk']?></span>
          <a href="<?= BASEURL; ?>/aksesoris/detail/<?=$key['id']; ?>" class="badge badge-primary badge">Detail</a>
          <a href="<?= BASEURL; ?>/aksesoris/editAksesoris/<?=$key['id']; ?>" class="badge badge-warning">Edit</a>
          <a href="<?= BASEURL; ?>/aksesoris/hapusAksesoris/<?=$key['id']; ?>" class="badge badge-danger" onclick = 'return confirm("Yakin dihapus?")'>Delete</a>
        </li>
      </ul>
    <?php } ?>   
  </div>
</div>
<br><br>
