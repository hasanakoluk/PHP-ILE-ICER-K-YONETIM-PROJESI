<?php
	require "../class/user_class.php";
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		echo " Kullanıcı Yönetimine Hoşgeldiniz, ".$_SESSION['sessionUserName'];
		echo "<br>";
		$user = new User();
		$result = $user->getAllUser();
	} else {
		header("Location:../index.php");
	}
	include "../sidebar.php";
	/*DELETE sorgusu örneklenecek.*/
?>
<a style="float: right; border: 1px solid Black;padding: 10px 20px;color: Black" href="user_add.php">Kullanıcı Ekle</a>
<table>
	<tr>
		<th>Kullanıcı Id</th>
		<th>Kullanıcı Adı</th>
		<th>Durum</th>
		<th>Aktif/Pasif</th>
		<th colspan="2">İşlemler</th>
	</tr>
	<?php foreach($result as $key => $value) { ?>
	<tr style="text-align: center;">
		<td><?php echo $value['id']; ?></td>
		<td><?php echo $value['username']; ?></td>
		<td>
		<?php if($value['status'] == 0) { ?>
			<p style="color: Green">Aktif</p>
		<?php } else { ?>
			<p style="color: Red">Pasif</p>
		<?php } ?>
		</td>
		<?php if($value['status'] == 0) { ?>
			<td><a href="user_status.php?uid=<?php echo $value['id'] ?>" style="color: Red">Pasif Et</a></td>
		<?php } else { ?>
			<td><a href="user_status.php?uid=<?php echo $value['id'] ?>" style="color: Green">Aktif Et</a></td>
		<?php } ?>
		<td><a href="user_update.php?uid=<?php echo $value['id'] ?>">Düzenle</a></td>
		<td><a href="user_remove.php?uid=<?php echo $value['id'] ?>">Sil</a></td>
	</tr>
	<?php } ?>
</table>