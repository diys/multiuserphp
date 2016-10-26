<?php

require_once '../core/koneksi.php';
include '../include/nav.php';
if ($_SESSION['admin'] == false) {
	header('Location: login.php');
}

/*jika menggunakan konesi msqli
$query = (" SELECT * FROM member");
$resilt = $db->query($query);*/

$query = $db->prepare("SELECT * FROM member");
$query->execute();


$nama1 = ((isset($_POST['namadepan']))?$_POST['namadepan'] : '');
	$nama2 = ((isset($_POST['namabelakang']))?$_POST['namabelakang'] : '');
	$email = ((isset($_POST['email']))?$_POST['email'] : '');
	$alamat = ((isset($_POST['alamat']))?$_POST['alamat'] : '');
	$notelp = ((isset($_POST['notelp']))?$_POST['notelp'] : '');
	$anggota = ((isset($_POST['anggota']))?$_POST['anggota'] : '');

if (isset($_GET['edit']) && !empty($_GET['edit'])) {
	$editid = $_GET['edit'];
	/*Jika menggunkan koneksi msqli
	$esql = "SELECT * FROM member WHERE id = '$editid'";
	$eresult = $db->query($esql);
	$emember = mysqli_fetch_assoc($eresult);*/

	$eresult = $db->prepare("SELECT * FROM member WHERE id = :editid");
	$eresult->bindParam(':editid', $editid);
	$eresult->execute();
	$emember = $eresult->fetch(PDO::FETCH_ASSOC);
}

if (isset($_GET['delete']) && !empty($_GET['delete'])) {
	$deleteid = $_GET['delete'];
	/*koneksi msqli
	$dsql = "DELETE FROM `member` WHERE `member`.`id` = '$deleteid'";
	$db->query($dsql);*/

	$dsql = $db->prepare("DELETE member WHERE id = :deleteid");
	$dsql->bindParam(':deleteid',$deleteid);
	$dsql->query;
	header('Location: admin.php');
}
if ($_POST) {
	/*dengan koneksi msqli
	$sql = "UPDATE `member` SET `nama_depan` = '$nama1', `nama_belakang` = '$nama2', `email` = '$email', `keangotaan` = 'anggota' WHERE `member`.`id` = '$editid' ";
	$db->query($sql);*/
	$sql = $db->prepare("UPDATE member SET nama_depan = :nama1, nama_belakang = :nama2, email = :email, alamat = :alamat WHERE member id = :editid ");
	$sql->bindParam(':nama1',$nama1);
	$sql->bindParam(':nama2',$nama2);
	$sql->bindParam(':email',$email);
	$sql->bindParam(':alamat',$alamat);
	$sql->execute();
	header('Location: admin.php');
}

if (isset($_GET['confirm'])) {
	$kid = $_GET['confirm'];
	/*
	$ksql = "UPDATE member SET konfirmasi = 1 WHERE id = '$kid'";
	$db->query($ksql);*/

	$ksql = $db->prepare("UPDATE member SET konfirmasi = 1 WHERE id = :id ");
	$ksql->bindParam(':id',$kid);
	$ksql->execute();
	header('Location: admin.php');

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="../asset/css/startertemplate.css" rel="stylesheet">
</head>

<body>
<div class="container">
	
	
	<?php if (isset($_GET['edit'])) : ?>
		<h3>Edit Member</h3>
	<div class="row">
		<form action="admin.php?edit=<?=$editid ;?>" method='POST'>
			<div class="col-md-6">
			<div class="form-group">
			<label for="namadepan">Nama Depan</label>
            <input type="text" class="form-control" name="namadepan" placeholder="Nama Depan" value="<?=$emember['nama_depan'];?>">
		</div>
			</div>
			<div class="col-md-6">
		<div class="form-group">
			<label for="namabelakang">Nama Belakang</label>
            <input type="text" class="form-control" name="namabelakang" placeholder="Nama Belakang" value="<?=$emember['nama_belakang'];?>">
		</div>
		</div>

		<div class="col-md-6">
		<div class="form-group">
			<label for="email">Alamat Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" value="<?=$emember['email'] ;?>">
		</div>
		</div>

		<div class="col-md-6">
		<div class="form-group">
			<label for="notelp">Nomer Telepon</label>
           <input type="number" class="form-control" name="notelp" placeholder="Nomer Telepon" value="<?=$emember['nomertelp'] ;?>">
		</div>
		</div>
		<div class="col-md-6">
		<div class="form-group">
			<label for="anggota">Keanggotaan</label>
           <input type="text" class="form-control" name="anggota" placeholder="Keanggotaam" value="<?=$emember['keangotaan'] ;?>">
		</div>
		</div>
		
		<div class="col-md-6">
		<div class="form-group">
            <input type="submit"  value="Kirim" class="btn btn-primary">
		</div>
		</form>
		</div>
	<?php else :?>
		<h3>Data Member</h3>
	<?php endif; ?>
	

	<table class="table table-hover">
		<thead>
			<th>id</th>
			<th>Nama Depan</th>
			<th>Nama Belakang</th>
			<th>E-mail</th>
			<th>No Telp</th>
			<th>Konfirmasi</th>
			<th>Tanggal Bergabung</th>
			<th>Login Terakhir</th>
			<th>edit</th>
			<th>hapus</th>
		</thead>
		<tbody>
		
		<?php while ($row = $query->fetch(PDO::FETCH_ASSOC)) :?>
			<tr>
				<td><?=$row['id'] ;?></td>
				<td><?=$row['nama_depan'] ;?></td>
				<td><?=$row['nama_belakang'] ;?></td>
				<td><?=$row['email'] ;?></td>
				<td><?=$row['nomertelp'] ;?></td>
				<td><?php if ($row['konfirmasi'] == 0 ) :?>
				<a href="admin.php?confirm=<?=$row['id'] ;?>" class="btn btn-success">Konfrimasi</a>
			<?php else : ?>
				<?="Sudah Dikonfirmasi";?>
			<?php endif ;?>
				</td>
				<td><?=$row['joindate'] ;?></td>
				<td><?=$row['lastlogin'] ;?></td>
				<td><a href="admin.php?edit=<?=$row['id'] ;?>"><span class="glyphicon glyphicon-pencil"></span></a></td> 
				<td><a href="admin.php?delete=<?=$row['id'] ;?>"><span class="glyphicon glyphicon-trash"></span></a></td>
			</tr>
		<?php endwhile ;?>
		</tbody>
	</table>
</div>
</body>
</html>