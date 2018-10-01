<?php 

	include('config.php');
	session_start();

	if (!isset($_SESSION['user'])) {
		header('location:login.php');
	}

	$_SESSION['imgCat'] = $_GET['cat'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Produto</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Envio grátis para compras a partir de R$100
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						<?php echo $_SESSION['user']; ?>
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>D$</option>
							<option>R$</option>
						</select>
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Menu</a>
							</li>

							<li>
								<a href="product.php?cat=all">Fazer compras</a>
							</li>

							<li class="sale-noti">
								<a href="product.php">Promoções</a>
							</li>

							<li>
								<a href="cart.php">Destaques</a>
							</li>

							<li>
								<a href="blog.php">Blog</a>
							</li>

							<li>
								<a href="about.php">Sobre</a>
							</li>

							<li>
								<a href="contact.php">Contatos</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.php" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Envio grátis para compras a partir de R$100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								<?php echo $_SESSION['user']; ?>
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>D$</option>
									<option>R$</option>
								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					
					<li class="item-menu-mobile">
						<a href="index.php">Menu</a>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="product.php?cat=all">Fazer compras</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.php">Promoção</a>
					</li>

					<li class="item-menu-mobile">
						<a href="cart.php">Destaques</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.php">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.php">Sobre</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.php">Contatos</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Title Page -->

	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(imgs/all.jpg)">
		<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(imgs/<?php echo $_SESSION['imgCat']; ?>.jpg); margin: -50px -100px -40px -100px">
		<h2 class="l-text2 t-center">
			<?php
				echo $_SESSION['imgCat'];	
					
			?>
		</h2>
		<p class="m-text13 t-center">
			Novas Coleções 2018!
		</p>
		</section>		
	</section>



	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categorias
						</h4>
			<form method="get">
						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="?cat=all" class="s-text13 active1">
									Todas
								</a>
							</li>

				<?php 

					$sqlCat = "SELECT * FROM categoria";
					$queryCat = mysqli_query($conexao, $sqlCat);

					while ($cat = mysqli_fetch_assoc($queryCat)) {
							echo '
							<li class="p-b-9">
								<a href="?cat='.$cat['nome_cat'].'" class="s-text7">
									'.$cat['nome_cat'].'
								</a>
							</li>
							';
					}

				?>
						</ul>
				</form>

						<div class="filter-price p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-17">
								Preço
							</div>

							<div class="wra-filter-bar">
								<div id="filter-bar"></div>
							</div>

							<div class="flex-sb-m flex-w p-t-16">
								<div class="w-size11">
									<!-- Button -->
									<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4" type="submit">
										Filtros
									</button>
								</div>

								<div class="s-text3 p-t-10 p-b-10">
									Alcance: $<span id="value-lower">10</span> - $<span id="value-upper">10000</span>
								</div>
							</div>
						</div>

						<div class="filter-color p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-12">
								Cor
							</div>

							<ul class="flex-w">
								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
									<label class="color-filter color-filter1" for="color-filter1"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
									<label class="color-filter color-filter2" for="color-filter2"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
									<label class="color-filter color-filter3" for="color-filter3"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
									<label class="color-filter color-filter4" for="color-filter4"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
									<label class="color-filter color-filter5" for="color-filter5"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
									<label class="color-filter color-filter6" for="color-filter6"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
									<label class="color-filter color-filter7" for="color-filter7"></label>
								</li>
							</ul>
						</div>

						<div class="search-product pos-relative bo4 of-hidden">
						
						<script src="javascript.js"></script>
						<!-- BUSCA -->
						<form method="get">	
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="campo" id="campo" placeholder="Buscar Produtos..."> 
						</form>

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
						<form method="GET">
								<select class="selection-2" name="filtro">
									<option value="nada">Filtrar</option>
									<option value="asc">A - Z</option>
									<option value="desc">Z - A</option>
									<option value="mM">Por preço: menor -> maior</option>
									<option value="Mm">Por preço: maior -> menor</option>
								</select>
							</div>
								<button class="flex-c-m bg7 bo-rad-15 hov1 s-text14 trans-0-4" style="margin-right: 10px;" type="submit">
										Filtrar
								</button>
						</form>	
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
						<form method="get">	
								<select class="selection-2" name="fPreco">
									<option value="">Preço</option>
									<option value="1">R$0.00 - R$50.00</option>
									<option value="2">R$50.00 - R$100.00</option>
									<option value="3">R$100.00 - R$150.00</option>
									<option value="4">R$150.00 - R$200.00</option>
									<option value="5">R$200.00+</option>
								</select>
							</div>
							<button class="flex-c-m bg7 bo-rad-15 hov1 s-text14 trans-0-4" style="margin-right: 10px;" type="submit">
										F. Preço
								</button>
						</div>
						</form>

						<span class="s-text8 p-t-5 p-b-5">
							
						</span>
					</div>

					<!-- Product -->
					<div class="row">
						
<?php 
if (isset($_GET['cat'])) {
	if ($_GET['cat'] != "all") {
		$sql = "SELECT * FROM produtos WHERE cat = '".$_GET['cat']."'";
		$_SESSION['imgCat'] = $_GET['cat'];
	} else 
	if ($_GET['cat'] == "all") {
		$sql = "SELECT * FROM produtos";
		$_SESSION['imgCat'] = "all";
	} else 
	if (!isset($_GET['cat'])) {
		$sql = "SELECT * FROM produtos";
	}

} else
if (isset($_GET['filtro'])) {
	$_SESSION['imgCat'] = "all";			 
	if ($_GET['filtro'] == "nada") {
		$sql = "SELECT * FROM produtos";
	} else
	if ($_GET['filtro'] == "asc") {
		$sql = "SELECT * FROM produtos ORDER BY nome ASC";
	} else
	if ($_GET['filtro'] == "desc") {
		$sql = "SELECT * FROM produtos ORDER BY nome DESC";
	} else
	if ($_GET['filtro'] == "mM") {
		$sql = "SELECT * FROM produtos ORDER BY preco ASC";
	} else
	if ($_GET['filtro'] == "Mm") {
		$sql = "SELECT * FROM produtos ORDER BY preco DESC";
	} else 
	if (!isset($_GET['filtro'])) {
		$sql = "SELECT * FROM produtos";
	}
} else
if (isset($_GET['fPreco'])) {
	$_SESSION['imgCat'] = "all";
	if ($_GET['fPreco'] == "1") {
		$sql = "SELECT * FROM produtos WHERE preco BETWEEN 0 AND 50";
	} else
	if ($_GET['fPreco'] == "2") {
		$sql = "SELECT * FROM produtos WHERE preco BETWEEN 51 AND 100";
	} else
	if ($_GET['fPreco'] == "3") {
		$sql = "SELECT * FROM produtos WHERE preco BETWEEN 101 AND 150";
	} else
	if ($_GET['fPreco'] == "4") {
		$sql = "SELECT * FROM produtos WHERE preco BETWEEN 151 AND 200";
	} else
	if ($_GET['fPreco'] == "5") {
		$sql = "SELECT * FROM produtos WHERE preco BETWEEN 201 AND 10000";
	} else {
		$sql = "SELECT * FROM produtos";
	} 
} else
if (isset($_GET['campo'])) {
	$sql = "SELECT * FROM produtos WHERE nome LIKE '%".$_GET['campo']."%'";
}
	
//AUTOMATIZAR A BUSCA!!!

$queryBusca = mysqli_query($conexao, $sql);


	while ($dadosP = mysqli_fetch_assoc($queryBusca)) {
		$sqlImg = "SELECT * FROM imagens WHERE id_Produto = '".$dadosP['cod']."' LIMIT 0,1";
		$queryImg = mysqli_query($conexao, $sqlImg);

		$img = mysqli_fetch_assoc($queryImg);

		echo '
			<div class="col-sm-12 col-md-6 col-lg-4 p-b-50" >
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
						<div style="width:200px;height:200px;">
						<img src="admin/img/'.$img['img'].'" alt="">
						</div>	
						<div class="block2-overlay trans-0-4" style="width:200px;height:200px;">
							<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
								<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
								<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
							</a>

							<div class="block2-btn-addcart w-size1 trans-0-4" >
								<!-- Button -->
								<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>

					<div class="block2-txt p-t-20">
						<a href="product-detail.php?cat='.$_GET['cat'].'&prod='.$dadosP['nome'].'&id='.$dadosP['cod'].'" class="block2-name dis-block s-text3 p-b-5">
							'.$dadosP['nome'].'
						</a>

						<span class="block2-price m-text6 p-r-5">
							R$ '.$dadosP['preco'].'
						</span>
				</div>
			</div>

		</div>';
	}
	
?>

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php 

	

?>

	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Entrar em contato
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Alguma pergunta? Deixe-nos saber na loja , 241 São Miguel, RIO GRANDE DO NORTE, RN 59920-000 ou ligue para: Tim - (84) 9 9616 8679  |  Claro - (84) 9 9108 5873
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categorias
				</h4>

				<ul>
				<?php 

					$sqlCat = "SELECT * FROM categoria";
					$queryCat = mysqli_query($conexao, $sqlCat);

					while ($cat = mysqli_fetch_assoc($queryCat)) {
							echo '
							<li class="p-b-9">
								<a href="?cat='.$cat['nome_cat'].'" class="s-text7">
									'.$cat['nome_cat'].'
								</a>
							</li>
							';
					}

				?>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Buscar
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Sobre nós
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Contrate-nos
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Retornar
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Ajuda
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Acompanhar pedido
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Retornar
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Remessa
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Boletim de notícias
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Inscreva-se
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018. todos os direitos reservados. | GM MODAS - Criando modas com a sua cara  <i class="fa fa-heart-o" aria-hidden="true"></i> DE <a href="https://colorlib.com" target="_blank">#ModasPraVc #ComVc</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 10, 10000 ],
	        connect: true,
	        range: {
	            'min': 10,
	            'max': 10000
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
