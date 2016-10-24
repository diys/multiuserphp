<?php 
require_once  '../core/koneksi.php';
include '../core/helper.php';

$upid = $_SESSION['userdb'];
echo $_SESSION['userdb'];
if (isset($_POST['blankRadio'])) {
 $db->query("UPDATE member SET keangotaan = 'premium' WHERE id = '$upid' ");
header('Location: userarea.php');
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="../asset/css/startertemplate.css" rel="stylesheet">

  
  </head>
  <body>
    <?php include "../include/nav.php"; ?>

    <div class="container">

    <?php if (isset($_SESSION['loggedin']) == true ) :?>
      <div id="formregister">
      <div class="panel panel-default">
      <div class="panel-heading"><h3>Upgrade Premium</h3></div>
      <div class="panel-body">
      <p>Pilih metode pembayaran</p>

      <form action="upgrade.php" method="post">
      <div class="radio">
      <label>
      <input type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="SMS">
      SMS
      </label>
      </div>

      <div class="radio">
      <label>
      <input type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="Paypal">
      Paypal
      </label>
      </div>

      <div class="radio">
      <label>
      <input type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="Bank Transfer">
      Bank Transfer
      </label>
      </div>

      <input type="submit" class="btn btn-primary" value="Konfirmasi">
      </form>
      </div>
      </div>
      </div>
    <?php endif; ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../asset/js/jquery-1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../asset/js/bootstrap.min.js"></script>
  </body>
</html>