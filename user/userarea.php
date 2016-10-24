<?php 
require_once '../core/koneksi.php';
include '../core/helper.php';

if ($_SESSION['loggedin'] == false) {
	header('Location: login.php');
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Member Area</title>

    <!-- Bootstrap -->
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="../asset/css/startertemplate.css" rel="stylesheet">

  
  </head>
  <body>
    <?php include "../include/nav.php"; ?>

    <div class="container">   

<?php if ($datamember['konfirmasi'] == 0 )  : ?>



<h3>Harap Tunggu Konfirmasi dari Admin</h3>
<?php else : ?>
<div class="starter-template">
        <h1>Selamat Datang <?= $datamember['nama_depan'] ;?></h1>
        <?php if ($datamember['keangotaan'] != 'premium') :?>
        <p class="lead">Selamat menikmati konten-konten eksklusif disitus kami dapatkan konten premium dengan upgrade keanggotaan Premium </p>
      </div>
   <div class="center"><a href="upgrade.php" class="btn btn-primary btn-lg">UPGRADE PREMIUM</a></div>
<?php else : ?>
  <p class="lead">Selamat bergabung dengan keanggotaan Premium disitus kami nikmati konten eksklusif premium kami</p>

<?php endif;?> 
<h3 style="text-align: center;">Konten Reguler</h3>
      <div class="row">     
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    <h3>Video Reguler</h3>
      <img src="..." alt="...">
      <div class="caption">
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    <h3>Artikel Reguler</h3>
      <img src="..." alt="...">
      <div class="caption">
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    <h3>Konten Reguler lainnya</h3>
      <img src="..." alt="...">
      <div class="caption">
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
<?php endif;?>

<?php if ($datamember['keangotaan'] == 'premium') :?>
<h3 style="text-align: center;">Konten Premium</h3>
<div class="row">     
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    <h3>Video Reguler</h3>
      <img src="..." alt="...">
      <div class="caption">
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    <h3>Artikel Reguler</h3>
      <img src="..." alt="...">
      <div class="caption">
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    <h3>Konten Reguler lainnya</h3>
      <img src="..." alt="...">
      <div class="caption">
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
<?php endif ;?>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../asset/js/jquery-1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../asset/js/bootstrap.min.js"></script>
  </body>
</html>