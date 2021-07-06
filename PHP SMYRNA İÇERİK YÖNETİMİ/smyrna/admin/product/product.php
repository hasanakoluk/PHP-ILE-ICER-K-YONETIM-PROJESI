<?php
	require "../class/product_class.php";
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		echo "Ürün Yönetimine Hoşgeldiniz, ".$_SESSION['sessionUserName'];
		echo "<br>";
		$product = new Product();
		$result = $product->getProduct();
	} else {
		header("Location:../index.php");
	}
	include "../sidebar.php";
	/*DELETE sorgusu örneklenecek.*/
?>
<a style="float: right; border: 1px solid Black;padding: 10px 20px;color: Black" href="product_add.php">Ürün Ekle</a>
<table border="1">
	<tr>
		<th>Başlık</th>
		<th>Açıklama</th>
		<th>Kategori</th>
		<th>Fiyat</th>
		<th>İndirimli Fiyat</th>	
		<th>Resim</th>	
		<th>Stok</th>
		<th>Ürün Kodu</th>	
		<th>Çok Satan Ürün</th>	
		<th>Öne Çıkan Ürün</th>		
		<th colspan="2">İşlemler</th>
	</tr>
	<?php foreach($result as $key => $value) { ?>
		<tr>
			<td><?php echo $value['title'] ?></td>
			<td><?php echo substr($value['description'],0,100) ?>...</td>
			<td><?php 			
				$categoryName = $product->getProductCategoryName($value['category']);
				echo $categoryName['title'];	
			?></td>
			<td><?php echo $value['price'] ?></td>
			<td><?php echo $value['sale_price'] ?></td>
			<td><img src="../uploads/category/<?php echo $value['image']?>" height="75" /></td>
			<td><?php echo $value['stock'] ?></td>
			<td><?php echo $value['product_code'] ?></td>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<td style="text-align: center"><?php 
			if($value['best_product'] == 0) {
				echo '<i style="color:Green" class="fa fa-check" aria-hidden="true"></i>';
			} else {
				echo '<i style="color:Red" class="fa fa-times" aria-hidden="true"></i>';
			}
			?></td>
			<td style="text-align: center"><?php 
			if($value['best_seller'] == 0) {
				echo '<i style="color:Green" class="fa fa-check" aria-hidden="true"></i>';
			} else {
				echo '<i style="color:Red" class="fa fa-times" aria-hidden="true"></i>';
			}
			?></td>
			<td><a href="product_update.php?prdid=<?php echo $value['id'] ?>">Düzenle</a></td>
			<td><a href="product_remove.php?prdid=<?php echo $value['id'] ?>">Sil</a></td>
		</tr>
	<?php } ?>
</table>