<?php include "header.php" ?>	
<content>
	<div class="col-12 slider">
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/slider1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<p>Sauvage'ın sulu ve baharatlı tazeliği, vanilya notalarıyla şimdi daha da güzel.</p>
						<a href="#">İNCELE</a>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/slider1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<p>Sauvage'ın sulu ve baharatlı tazeliği, vanilya notalarıyla şimdi daha da güzel.</p>
						<a href="#">İNCELE</a>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
	<div class="col-12 markalar">
		<div class="row gx-0">
			<?php foreach($subHomeCategory as $key => $value) { ?>
			<div class="col-4">
				<a href="product_list.php?plstid=<?php echo $value["id"] ?>">
					<img src="admin/uploads/category/<?php echo $value["image"] ?>" alt="" class="img-fluid" />
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
	<div class="container-fluid">
		<div class="col-12 one-cikanlar">
			<div class="text-center border-bottom">
				<h2>Öne Çıkan Ürünlerimiz</h2>
			</div>
			<div class="row">
				<?php foreach($bestProduct as $key => $value) { ?>
				<div class="col-6 col-xl">
					<a href="product_detail.php?prdDId=<?php echo $value["id"] ?>">
						<img src="admin/uploads/product/<?php echo $value["image"] ?>" class="img-fluid" alt="">
						<p><?php echo $value["title"] ?></p>
						<p><small><?php echo $value["price"] ?> TL</small></p>
					</a>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="col-12 cok-satanlar">
			<div class="text-center">
				<h2>Çok Satan Ürünlerimiz</h2>
			</div>
			<div class="row">
				<div class="col-6 col-xl">
					<a href="#">
						<img src="img/urun1.jpg" class="img-fluid" alt="">
						<p>Missha A'PIEU Atelier</p>
						<p><small>190.00 TL</small></p>
					</a>
				</div>
				<div class="col-6 col-xl">
					<a href="#">
						<img src="img/urun1.jpg" class="img-fluid" alt="">
						<p>Missha A'PIEU Atelier</p>
						<p><small>190.00 TL</small></p>
					</a>
				</div>
				<div class="col-6 col-xl">
					<a href="#">
						<img src="img/urun1.jpg" class="img-fluid" alt="">
						<p>Missha A'PIEU Atelier</p>
						<p><small>190.00 TL</small></p>
					</a>
				</div>
				<div class="col-6 col-xl">
					<a href="#">
						<img src="img/urun1.jpg" class="img-fluid" alt="">
						<p>Missha A'PIEU Atelier</p>
						<p><small>190.00 TL</small></p>
					</a>
				</div>
				<div class="d-none d-lg-block col-xl">
					<a href="#">
						<img src="img/urun1.jpg" class="img-fluid" alt="">
						<p>Missha A'PIEU Atelier</p>
						<p><small>190.00 TL</small></p>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Hakkımızda Başlangıç -->
	<div class="container hakkimizda">
		<div class="row">
			<div class="col-12 col-md-6 col-xl-5">
				<img src="img/hk_bg.jpg" alt="" class="img-fluid" />
			</div>
			<div class="col-12 col-md-6 col-xl-7 align-self-center">
				<h2 class="pb-4"><?php echo $contentData['title'] ?></h2>
				<?php echo $contentData['summary'] ?>
				<a href="content.php?cid=<?php echo $contentData['id']?>">İNCELE</a>
			</div>
		</div>
	</div>
	<!-- Hakkımızda Bitiş -->
	<div class="container-fluid e-bulten">
		<div class="row">
			<div class="col-12 text-center">
				<h2>E-Bülten'e Kayıt Olun!</h2>
				<p>E-Bülten sistemimize kayıt olarak indirim ve kampanyalardan anında<br>haberdar olabilirsiniz. </p>
				<form>
					<input type="text" class="yaziAlani" placeholder="Mail Adresiniz"></input>
					<input type="submit" class="buton" title="E-Bültene Kayıt Ol" value="E-Bültene Kayıt Ol"></input>
				</form>
			</div>
		</div>
	</div>
</content>
<?php include "footer.php" ?>	
