<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<?php
	require "../class/category_class.php";
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		echo " Kategori Yönetimine Hoşgeldiniz, ".$_SESSION['sessionUserName'];
		echo "<br>";
		if($_POST) {
			$dizin = '../uploads/category/';
			$yuklenecek_dosya = $dizin . basename($_FILES['uploadImage']['name']);
			move_uploaded_file($_FILES['uploadImage']['tmp_name'], $yuklenecek_dosya);
			$resim_isim = basename($_FILES['uploadImage']['name']);
			$category = new Category();
			$result = $category->addCategory($_POST,$resim_isim);
			if($result == 1) {
				header("location:category.php");
			} else {
				echo "Bir hata oluştu!";
			}
		} else {			
			$category = new Category();
			$result = $category->getMainCategory();
		}
	} else {
		header("Location:../index.php");
	}
	include "../sidebar.php";
	/*DELETE sorgusu örneklenecek.*/
?>
<div style="float: right;width: 88%">
<form action="" method="POST" enctype="multipart/form-data">
	<input type="text" name="addCtgTitle" placeholder="Başlık Giriniz"></input><br /><br />
	<textarea id="editor2" name="addCtgDescription" placeholder="Açıklama Giriniz"></textarea><br /><br />
	<label>Kategori Seçiniz: </label>
	<select name="ctgCategory">
		<option value="0">Ana Kategori</option>
		<?php 
			foreach($result as $key => $value) {
		?>
			<option value="<?php echo $value['id'] ?>"><?php echo $value['title'] ?></option>
		<?php } ?>
	<select><br /><br />
	<input type="checkbox" name="showHomePage" value="0"></input>
	<label>Ana Sayfada Gösterilsin Mi?</label><br /><br />
	<label>Kategori Resmi: </label>
	<input type="file" name="uploadImage" /><br /><br />
	<input type="submit" name="addCtg" title="Kaydet" value="Kaydet"></input>
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
</script>