<?php include "header.php" ?>	
<?php 
	if(isset($_GET['cid'])) {
		$contentData = $content->getContentById($_GET['cid']); 
		if($contentData != "") {
			$contentTitle = $contentData['title'];
			$contentDescription = $contentData['description'];
		} else {
			header("location: 404.php");
		}
	} else {
		header("location: index.php");
	}
?>
<content>
	<div class="container">
		<div class="col-12 mt-4">
			<h1><?php echo $contentTitle ?></h1>
			<hr>
			<?php echo $contentDescription ?>
		</div>
	</div>
</content>
<?php include "footer.php" ?>	