<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<?php
	require "../class/product_class.php";
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		echo " Ürün Yönetimine Hoşgeldiniz, ".$_SESSION['sessionUserName'];
		echo "<br>";
		if($_POST) {
			$product = new Product();
			$result2 = $product->getSubCategory();
			$dizin = '../uploads/product/';
			$yuklenecek_dosya = $dizin . basename($_FILES['uploadImage']['name']);
			move_uploaded_file($_FILES['uploadImage']['tmp_name'], $yuklenecek_dosya);
			$resim_isim = basename($_FILES['uploadImage']['name']);	
			if($resim_isim != "") {
				$result = $product->updateProductWithImage($_POST,$_GET['prdid'],$resim_isim);
			} else {
				$result = $product->updateProduct($_POST,$_GET['prdid']);				
			}
			if($result == 1) {
				header("location:product.php");
			} else {
				echo "Bir hata oluştu!";
			}
		} else {
			if(isset($_GET['prdid'])) {
				$product = new Product();
				$result = $product->getProductById($_GET['prdid']);
				$result2 = $product->getSubCategory();
				$mainCategory = $product->getSubCategory();
				$productTitle = $result['title'];
				$productSummary = $result['summary'];
				$productDescription = $result['description'];
				$productInstallment = $result['installment_options'];
				$productPrice = $result['price'];
				$productSalePrice = $result['sale_price'];
				$productCategory = $result['category'];
				$productImage = $result['image'];
				$productCode = $result['product_code'];
				$productStock = $result['stock'];
				$productAgeRange = $result['age_range'];
				$productBestProduct = $result['best_product'];
				$productBestSeller = $result['best_seller'];
			} else {
				header("location:product.php");				
			}
		}
	} else {
		header("Location:../index.php");
	}
	include "../sidebar.php";
	/*DELETE sorgusu örneklenecek.*/
?>
<div style="float: right;width: 88%">
<form action="" method="POST" enctype="multipart/form-data">
	<label>Ürün Adı: </label><br /><br />
	<input type="text" name="addPrdTitle" placeholder="Başlık Giriniz" value="<?php echo $productTitle ?>"></input><br /><br />
	<label>Ürün Özeti: </label><br /><br />
	<textarea id="editor" name="addPrdSummary" placeholder="Açıklama Giriniz"><?php echo $productSummary ?></textarea><br /><br />
	<label>Ürün Açıklaması: </label><br /><br />
	<textarea id="editor2" name="addPrdDescription" placeholder="Açıklama Giriniz"><?php echo $productDescription ?></textarea><br /><br />
	<label>Taksit Seçenekleri: </label><br /><br />
	<textarea id="editor3" name="addPrdInstallment" placeholder="Açıklama Giriniz"><?php echo $productInstallment ?></textarea><br /><br />
	<label>Kategori Seçiniz: </label>
	<select name="ctgCategory">
		<?php 
			foreach($result2 as $key => $value) {
			$categoryName = $product->getProductCategoryName($value['level']);
			if($productCategory == $value['id']) {
				$selected = "selected";
			} else {
				$selected = "";
			}
		?>
			<option <?php echo $selected; ?> value="<?php echo $value['id'] ?>">
				<?php echo $categoryName['title'] ?> >> <?php echo $value['title'] ?>
			</option>
		<?php } ?>
	<select><br /><br />
	<label>Ürün Fiyatı: </label><br /><br />
	<input type="text" name="addPrdPrice" value="<?php echo $productPrice ?>"></input><br /><br />
	<label>Ürün İndirimli Fiyatı: </label><br /><br />
	<input type="text" name="addPrdSalePrice" value="<?php echo $productSalePrice ?>"></input><br /><br />
	<label>Ürün Resmi: </label><br /><br />
	<img src="../uploads/product/<?php echo $productImage ?>" height="50" /><br /><br />
	<input type="file" name="uploadImage" /><br /><br />
	<label>Ürün Kodu: </label><br /><br />
	<input type="text" name="addPrdStockCode" value="<?php echo $productCode ?>"></input><br /><br />
	<label>Stok Sayısı: </label><br /><br />
	<input type="text" name="addPrdStockNumber" value="<?php echo $productStock ?>"></input><br /><br />
	<label>Ürün Yaş Aralığı: </label>
	<select name="prdAgeRank">
		<?php 
			$selected2 = "";
			$age_rank = array("0-18","18-30","30-45","45-60","60+");
			foreach($age_rank as $key => $value) { 
				if($productAgeRange == $value) {
					$selected2 = "selected";
				} else {
					$selected2 = "";
				}
			?>
			<option <?php echo $selected2 ?> value="<?php echo $value ?>"><?php echo $value ?></option>			
		<?php
			}
		?>		
	</select><br /><br />
	<?php
		$checked = "";
		if($productBestProduct != 1) {
			$checked = "checked";
		}
	?>
	<input <?php echo $checked; ?> type="checkbox" name="prdBestProduct" value="0"></input>
	<label>Öne Çıkan Ürün Mü?</label><br /><br />
	<?php
		$checked2 = "";
		if($productBestSeller != 1) {
			$checked2 = "checked";
		}
	?>
	<input <?php echo $checked2; ?> type="checkbox" name="prdBestSeller" value="0"></input>
	<label>En Çok Satan Ürün Mü?</label><br /><br />
	<input type="submit" name="addPrd" title="Kaydet" value="Kaydet"></input>
</form>
</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#editor2' ) )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#editor3' ) )
        .catch( error => {
            console.error( error );
        } );
</script>