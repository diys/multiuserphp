<?php 
require_once '../core/koneksi.php';
session_destroy();
header('Location: login.php');
?>
