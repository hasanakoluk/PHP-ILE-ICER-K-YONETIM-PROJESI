<?php
	require "../class/category_class.php";
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		echo "Kategori Yönetimine Hoşgeldiniz, ".$_SESSION['sessionUserName'];
		echo "<br>";
		$category = new Category();
		$result = $category->getCategory();
	} else {
		header("Location:../index.php");
	}
	include "../sidebar.php";
	/*DELETE sorgusu örneklenecek.*/
?>
<a style="float: right; border: 1px solid Black;padding: 10px 20px;color: Black" href="category_add.php">Kategori Ekle</a>
<table border="1">
	<tr>
		<th>Başlık</th>
		<th>Açıklama</th>
		<th>Kategori</th>
		<th>Ana Sayfa</th>	
		<th>Resim</th>	
		<th>Durum</th>		
		<th>Aktif/Pasif</th>
		<th colspan="2">İşlemler</th>
	</tr>
	<?php foreach($result as $key => $value) { ?>
		<tr>
			<td><?php echo $value['title'] ?></td>
			<td><?php echo substr($value['description'],0,100) ?>...</td>
			<td><?php 
				if($value['level'] == 0) {
					echo "Ana Kategori";
				} else {					
					$titleName = $category->getCategoryTitle($value['level']);
					echo $titleName['title'];
				}
			
			?></td>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<td style="text-align: center"><?php 
			if($value['showhomepage'] == 0) {
				echo '<i style="color:Green" class="fa fa-check" aria-hidden="true"></i>';
			} else {
				echo '<i style="color:Red" class="fa fa-times" aria-hidden="true"></i>';
			}
			?></td>
			<td><img src="../uploads/category/<?php echo $value['image']?>" height="75" /></td>
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
			<a href="category_status.php?ctgid=<?php echo $value['id'] ?>" style="color: Red">Pasif Et</a>
			<?php } else { ?>			
			<a href="category_status.php?ctgid=<?php echo $value['id'] ?>" style="color: Green">Aktif Et</a>
			<?php } ?>
			</td>
			<td><a href="category_update.php?ctgid=<?php echo $value['id'] ?>">Düzenle</a></td>
			<td>
			<?php if($value['level'] == 0) { ?>
				<del><a href="">Sil</a></del>
			<?php } else { ?>
				<a href="category_remove.php?ctgid=<?php echo $value['id'] ?>">Sil</a>
			<?php } ?>
			</td>
		</tr>
	<?php } ?>
</table>