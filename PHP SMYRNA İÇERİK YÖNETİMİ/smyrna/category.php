<?php include "header.php" ?>
<?php
	if(isset($_GET['ctgid'])) {
		$categoryList = $category->getCategoryByLevel($_GET['ctgid']);		
		if($categoryList->num_rows > 0) { 
?>
	<content>
		<div class="container">
			<div class="row">
				<?php foreach($categoryList as $key => $value) { ?>
				<div class="col-4 mt-4">
					<a href="product_list.php?plistid=<?php echo $value['id'] ?>">
						<img src="admin/uploads/category/<?php echo $value['image'] ?>" class="img-fluid" />
						<h3><?php echo $value['title'] ?></h3>
						<p><?php echo $value['description'] ?></p>
					</a>
				</div>
				<?php } ?>
			</div>
		</div>
	</content>		
<?php
		} else {
			echo "<div class='text-center'>Bu kategoriye ait herhangi bir kayıt bulunamadı.</div>";
		}
	}
?>
<?php include "footer.php" ?>