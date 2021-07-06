<?php
	include "admin/class/content_class.php";
	include "admin/class/category_class.php";
	include "admin/class/product_class.php";
	$content = new Content();
	$contentData = $content->getContentById(1);
	
	$category = new Category();
	$zeroCategoryLevel = $category->getMainCategory();
	$subHomeCategory = $category->getHomePageSubCategory();
	
	$product = new Product();
	$bestProduct = $product->getBestProduct();
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-20608639-2"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-20608639-2');
		</script>
		<title>Smyrna Parfume</title>		
		<meta name="Author" content="S. Kıvanç Öncel tarafından 25.04.2021 tarihinde yapıldı. İletişim için info@grator.net ya da 5053632504" />
		<meta name="Abstract" content="HTML öğrenmek için yazdığım kodlar." />
		<meta name="Copyright" content="Tüm hakları saklıdır." />
		<meta name="description" content="HTML etiketlerini öğrenmek için oluşturulmuş bir site. 160 karakteri geçmemesi gerekiyor." />
		<meta name="keywords" content="İlk Kutu, İkinci Kutu, Üçüncü Kutu, Kutu" />
		<meta name="robots" content="index,follow" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="content-language" content="tr" />
		<meta charset="UTF-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859" />
		<link rel="icon" href="favicon.ico">
				
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
		
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>	
	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-3">
						<a href="/">
							<img src="img/logo.png" class="img-fluid" alt="Smyrna Parfume">
						</a>
					</div>
					<div class="col-12 col-md-7 d-flex align-items-center">
						<nav class="navbar navbar-expand-lg navbar-light w-100">
							<div class="container-fluid">
								<button class="navbar-toggler w-100" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul class="navbar-nav me-auto mb-2 mb-lg-0">
										<?php foreach($zeroCategoryLevel as $key => $value) { ?>
										<li class="nav-item">
											<a class="nav-link" aria-current="page" href="category.php?ctgid=<?php echo $value['id'] ?>">
												<?php echo $value['title'] ?>
											</a>
										</li>
										<?php } ?>									
									</ul>							
								</div>
							</div>
						</nav>
					</div>
					<div class="d-none d-md-block col-12 col-md-2 icons align-self-center text-center">
						<div class="row">
							<div class="col-6">
								<a href=""><i class="fa fa-user"></i></a>
							</div>
							<div class="col-6">
								<a href=""><i class="fa fa-shopping-cart"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>