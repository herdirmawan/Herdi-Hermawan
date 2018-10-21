<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <title>Halaman Aksesoris<?= $data['judul'] ?></title>
          <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL ?>">Aksesoris</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL ?>/about">Tentang Kami</a>
                    </li>
                    <form action="<?= BASEURL; ?>/aksesoris/" method="post">
                      <center>
                        <input type="text" name="merk">
                        <button type="submit" name="cari">Cari Aksesoris</button>
                      </center>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
                    
          
