<?php
	require "../class/content_class.php";
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		echo " İçerik Yönetimine Hoşgeldiniz, ".$_SESSION['sessionUserName'];
		echo "<br>";
		$content = new Content();
		$result = $content->getContent();
	} else {
		header("Location:../index.php");
	}
	include "../sidebar.php";
	/*DELETE sorgusu örneklenecek.*/
?>
<a style="float: right; border: 1px solid Black;padding: 10px 20px;color: Black" href="content_add.php">İçerik Ekle</a>
<table border="1">
	<tr>
		<th>Başlık</th>
		<th>Özet</th>
		<th>Açıklama</th>
		<th>Durum</th>		
		<th>Aktif/Pasif</th>
		<th colspan="2">İşlemler</th>
	</tr>
	<?php foreach($result as $key => $value) { ?>
		<tr>
			<td><?php echo $value['title'] ?></td>
			<td><?php echo substr($value['summary'],0,50) ?>...</td>
			<td><?php echo substr($value['description'],0,100) ?>...</td>
			<td><?php 
			if($value['status'] == 0) {
			echo "<p style='color: Green'>Aktif</p>";
			} else {
			echo "<p style='color: Red'>Pasif</p>";
			}				
			?></td>
			<td>
			<?php 
			if($value['status'] == 0) { ?>
			<a href="content_status.php?cid=<?php echo $value['id'] ?>" style="color: Red">Pasif Et</a>
			<?php } else { ?>			
			<a href="content_status.php?cid=<?php echo $value['id'] ?>" style="color: Green">Aktif Et</a>
			<?php } ?>
			</td>
			<td><a href="content_update.php?cid=<?php echo $value['id'] ?>">Düzenle</a></td>
			<td><a href="remove_content.php?cid=<?php echo $value['id'] ?>">Sil</a></td>
		</tr>
	<?php } ?>
</table>