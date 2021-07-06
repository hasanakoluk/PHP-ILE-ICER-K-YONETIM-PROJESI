<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<?php
	require "../class/content_class.php";
	session_start();
	if($_SESSION['sessionUserName'] != "") {
		echo " Kullanıcı Yönetimine Hoşgeldiniz, ".$_SESSION['sessionUserName'];
		echo "<br>";
		if($_POST) {			
			$content = new Content();
			$result = $content->addContent($_POST);
			if($result == 1) {
				header("location:content.php");
			} else {
				echo "Bir hata oluştu!";
			}
		}
	} else {
		header("Location:../index.php");
	}
	include "../sidebar.php";
	/*DELETE sorgusu örneklenecek.*/
?>
<div style="float: right;width: 88%">
<form action="" method="POST">
	<input type="text" name="addCntTitle" placeholder="Başlık Giriniz"></input><br /><br />
	<textarea id="editor" name="addCntSummary" placeholder="Özet Giriniz"></textarea><br /><br />
	<textarea id="editor2" name="addCntDescription" placeholder="Açıklama Giriniz"></textarea><br /><br />
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