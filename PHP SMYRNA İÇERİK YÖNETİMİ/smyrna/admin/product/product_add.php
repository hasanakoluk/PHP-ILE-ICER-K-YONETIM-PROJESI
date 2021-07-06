<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<?php
	require "../class/product_class.php";
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		echo "Ürün Yönetimine Hoşgeldiniz, ".$_SESSION['sessionUserName'];
		echo "<br>";
		if($_POST) {
			$dizin = '../uploads/product/';
			$yuklenecek_dosya = $dizin . basename($_FILES['uploadImage']['name']);
			move_uploaded_file($_FILES['uploadImage']['tmp_name'], $yuklenecek_dosya);
			$resim_isim = basename($_FILES['uploadImage']['name']);
			$product = new Product();
			$result = $product->addProduct($_POST,$resim_isim);
			if($result == 1) {
				header("location:product.php");
			} else {
				echo "Bir hata oluştu!";
			}
		} else {			
			$product = new Product();
			$result = $product->getSubCategory();
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
	<input type="text" name="addPrdTitle" placeholder="Başlık Giriniz"></input><br /><br />
	<label>Ürün Özeti: </label><br /><br />
	<textarea id="editor" name="addPrdSummary" placeholder="Açıklama Giriniz"></textarea><br /><br />
	<label>Ürün Açıklaması: </label><br /><br />
	<textarea id="editor2" name="addPrdDescription" placeholder="Açıklama Giriniz"></textarea><br /><br />
	<label>Taksit Seçenekleri: </label><br /><br />
	<textarea id="editor3" name="addPrdInstallment" placeholder="Açıklama Giriniz"></textarea><br /><br />
	<label>Kategori Seçiniz: </label>
	<select name="ctgCategory">
		<?php 
			foreach($result as $key => $value) {
			$categoryName = $product->getProductCategoryName($value['level']);
		?>
			<option value="<?php echo $value['id'] ?>">
				<?php echo $categoryName['title'] ?> >> <?php echo $value['title'] ?>
			</option>
		<?php } ?>
	<select><br /><br />
	<label>Ürün Fiyatı: </label><br /><br />
	<input type="text" name="addPrdPrice"></input><br /><br />
	<label>Ürün İndirimli Fiyatı: </label><br /><br />
	<input type="text" name="addPrdSalePrice"></input><br /><br />
	<label>Ürün Resmi: </label><br /><br />
	<input type="file" name="uploadImage" /><br /><br />
	<label>Ürün Kodu: </label><br /><br />
	<input type="text" name="addPrdStockCode"></input><br /><br />
	<label>Stok Sayısı: </label><br /><br />
	<input type="text" name="addPrdStockNumber"></input><br /><br />
	<label>Ürün Yaş Aralığı: </label>
	<select name="prdAgeRank">
		<option value="0-18">0-18</option>
		<option value="18-30">18-30</option>
		<option value="30-45">30-45</option>
		<option value="45-60">45-60</option>
		<option value="60+">60+</option>
	</select><br /><br />
	<input type="checkbox" name="prdBestProduct" value="0"></input>
	<label>Öne Çıkan Ürün Mü?</label><br /><br />
	<input type="checkbox" name="prdBestSeller" value="0"></input>
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