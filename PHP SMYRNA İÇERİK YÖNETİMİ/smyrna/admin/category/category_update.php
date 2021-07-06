<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<?php
	require "../class/category_class.php";
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		echo " Kategori Yönetimine Hoşgeldiniz, ".$_SESSION['sessionUserName'];
		echo "<br>";
		if($_POST) {
			$category = new Category();
			$dizin = '../uploads/category/';
			$yuklenecek_dosya = $dizin . basename($_FILES['uploadImage']['name']);
			move_uploaded_file($_FILES['uploadImage']['tmp_name'], $yuklenecek_dosya);
			$resim_isim = basename($_FILES['uploadImage']['name']);	
			if($resim_isim != "") {
				$result = $category->updateCategoryWithImage($_POST,$_GET['ctgid'],$resim_isim);
			} else {
				$result = $category->updateCategory($_POST,$_GET['ctgid']);
			}
			if($result == 1) {
				header("location:category.php");
			} else {
				echo "Bir hata oluştu!";
			}
		} else {
			if(isset($_GET['ctgid'])) {
				$category = new Category();
				$result = $category->getCategoryById($_GET['ctgid']);
				$mainCategory = $category->getMainCategory();
				$categoryTitle = $result['title'];
				$categoryDescription = $result['description'];
				$categoryLevel = $result['level'];
				$categoryHomePage = $result['showhomepage'];
				$categoryImage = $result['image'];
			} else {
				header("location:category.php");				
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
	<input type="text" name="addCntTitle" placeholder="Başlık Giriniz" value="<?php echo $categoryTitle ?>"></input><br /><br />
	<textarea id="editor" name="addCntDescription" placeholder="Özet Giriniz"><?php echo $categoryDescription ?></textarea><br /><br />
	<select name="ctgCategory">
		<option value="0">Ana Kategori</option>
		<?php 
			foreach($mainCategory as $key => $value) {
				$secili = "";
				if($categoryLevel == $value['id']) {
					$secili = "selected";
				}
		?>
			<option <?php echo $secili ?> value="<?php echo $value['id'] ?>"><?php echo $value['title'] ?></option>
		<?php } ?>
	<select><br /><br />
	<?php 
		$checked = "";
		if($categoryHomePage != 1) {
			$checked = "checked";
		}
	?>
	<input <?php echo $checked ?> type="checkbox" name="showHomePage" value="0"></input>
	<label>Ana Sayfada Gösterilsin Mi?</label><br /><br />
	<label>Kategori Resmi: </label><br /><br />
	<img src="../uploads/category/<?php echo $categoryImage ?>" height="100" /><br /><br />
	<input type="file" name="uploadImage" /><br /><br />
	<input type="submit" name="addCnt" title="Kaydet" value="Kaydet"></input>
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