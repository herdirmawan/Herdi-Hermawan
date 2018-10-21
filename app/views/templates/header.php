<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Halaman <?= $data['judul'] ?></title>
		<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
			<a class="navbar-brand" href="<?= BASEURL ?>">PHP MVC</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					
					<li class="nav-item">
						<a class="nav-link" href="<?= BASEURL ?>/aksesoris">Aksesoris</a>
					</li>
					
				</ul>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="">Tambah Item</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<form action="" method="get" class="navbar-form navbar-left">
							<div class="form-group">
								<input type="search" class="form-control" name="keyword" placeholder="masukan pencarian..." size="30" autocomplete="off" id="keyword">
							</div>
							<button type="submit" name="cari" id="cari">Cari !</button>
						</form>
					</ul>
				</div><!-- /.navbar-collapse -->
		</nav>
		</div>