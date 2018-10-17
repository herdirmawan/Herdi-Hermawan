<div class="container mt-5">
	<div class="card" style="width: 18rem;">
		<div class="card-body">
			<h5 class="card-title"><?= $data['aksesoris']['merk'] ?></h5>
			<h6 class="card-subtitle mb-2 text-muted"><?= $data['aksesoris']['jenis'] ?></h6>
			<p class="card-text"><?= $data['aksesoris']['bahan'] ?></p>
			<p class="card-text"><?= $data['aksesoris']['harga'] ?></p>
			<p class="card-text"><?= $data['aksesoris']['stok'] ?></p>
			<a href="<?= BASEURL ?>/aksesoris" class="card-link">Kembali</a>
		</div>
	</div>
</div>