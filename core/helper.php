<?php 
/* Jika koneksi menggunkan msqli
function login($userid){
	$_SESSION['userdb'] = $userid;
	$_SESSION['loggedin'] = true;
	global $db;
	$date = date("Y-m-d H:i:s");
	$db->query("UPDATE member SET lastlogin = '$date' WHERE id = '$userid' ");
	header('Location: userarea.php');
}
*/
function login($userid){
	$_SESSION['userdb'] = $userid;
	$_SESSION['loggedin'] = true;
	global $db;
	$date = date("Y-m-d H:i:s");
	$lastlogin = $db->prepare("UPDATE member SET lastlogin = :tgl WHERE id = :id ");
	$lastlogin->bindParam(':tgl', $date);
	$lastlogin->bindParam(':id', $userid);
	$lastlogin->execute();
	header('Location: userarea.php');

}


?>