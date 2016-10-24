<?php 
require_once '../core/koneksi.php';
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost/phpmember/">Member Area</a>>
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
        <li><a href="http://localhost/phpmember/user/logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a> </li>
        <?php endif;?>
      </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>