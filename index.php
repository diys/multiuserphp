<?php 
require_once  'core/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/startertemplate.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/e400d98d33.js"></script>

  <style>
    .fa-5 {
    font-size: 12em;
    }
  </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost/phpmember/index.php">Member Area</a>>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
       
        <ul class="nav navbar-nav navbar-right">
        <?php if (isset($_SESSION['loggedin']) == false ): ?>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Member <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://localhost/phpmember/user/login.php">Login</a></li>
            <li><a href="http://localhost/phpmember/user/register.php">Register</a></li>
          </ul>
        </li>
        <?php else :?>
        <li><a href="http://localhost/phpmember/user/userarea.php"><span class="glyphicon glyphicon-user"></span><?=$datamember['nama_depan'];?></a></li>
        <li><a href="http://localhost/phpmember/user/logout.php"></a>Logout<span class="glyphicon glyphicon-user"></span> </li>
        <?php endif;?>
      </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

    <div class="container">

      <div class="starter-template">
        <h1>Selamat Datang</h1>
        <p class="lead">Bergabunglah dengan situs kamu untuk mendapat konten-konten istimewa</p>
      </div>

      <div class="row">
      <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
      <h3>video Eksklusif</h3>
      <i class="fa fa-play-circle fa-5" aria-hidden="true"></i>
      <div class="caption">
        
        <p>Dapatkan konten video eksklusif dari situs kami dengan mendaftat</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
      </div>
      </div>

      <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
      <h3>Artikel Eksklusif</h3>
      <i class="fa fa-file-text-o fa-5" aria-hidden="true"></i>
      <div class="caption">
        
        <p>Dapatkan konten Artikel eksklusif dari situs kami dengan mendaftat</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
      </div>
      </div>

      <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
      <h3>Kontel Lain Eksklusif</h3>
      <i class="fa fa-star fa-5" aria-hidden="true"></i>
      <div class="caption">
        
        <p>Dapatkan konten lainnya eksklusif dari situs kami dengan mendaftat</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
      </div>
      </div>

</div>



      
    </div>  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="asset/js/jquery-1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="asset/js/bootstrap.min.js"></script>
  </body>
</html>