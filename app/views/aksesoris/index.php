<div class="container mt-5">
	
	<div class="row">
		<div class="col-6">
			<h3>Daftar Aksesoris</h3>
			<?php foreach ($data['aksesoris'] as $key) : ?>
				<ul class="list-group">
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<?= $key['merk'] ?>
						<a href="<?= BASEURL; ?>/aksesoris/detail/<?= $key['id']; ?>" class="badge badge-primary">Detail</a>
					</li>
				</ul>
			<?php endforeach; ?>
		</div>
	</div>
</div>