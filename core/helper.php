<?php 

function login($userid){
	$_SESSION['userdb'] = $userid;
	$_SESSION['loggedin'] = true;
	global $db;
	$date = date("Y-m-d H:i:s");
	$db->query("UPDATE member SET lastlogin = '$date' WHERE id = '$userid' ");
	header('Location: userarea.php');
}



?>