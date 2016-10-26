<?php 
/* koneksi menggunakan msqli
$db = mysqli_connect('127.0.0.1','root','','member');
if (mysqli_connect_errno()) {
	echo "database connect error".mysql_connect_error();
	die();
}
session_start();

if (isset($_SESSION['userdb'])) {
	$memberid = $_SESSION['userdb'];
	$query = $db->query("SELECT * FROM member WHERE id = '$memberid' ");
	$datamember = mysqli_fetch_assoc($query);
	if ($datamember['keangotaan'] == "admin") {
		$_SESSION['admin'] = true;
	}else{
		$_SESSION['admin'] = false;
	}
}
*/

/*memggunakan koneksi PDO*/

try {
    $db = new PDO('mysql:host=localhost;dbname=member', 'root', '');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

session_start();

if (isset($_SESSION['userdb'])) {
	$memberid = $_SESSION['userdb'];
	$query = $db->prepare("SELECT * FROM member WHERE id = :memberid ");
	$query->bindParam(':memberid', $memberid);
	$query->execute();
	$datamember = $query->fetch(PDO::FETCH_ASSOC);
	if ($datamember['keangotaan'] == "admin") {
		$_SESSION['admin'] = true;
	}else{
		$_SESSION['admin'] = false;
	}
}

?>