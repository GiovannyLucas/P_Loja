<?php 

	include('config.php');
	session_start();

	if (!isset($_SESSION['carrinho'])) {
		$_SESSION['carrinho'] = array();
	}

	if (isset($_GET['acao'])) {
		if ($_GET['acao'] == "add") {
			$id = $_GET['id'];
			if (!isset($_SESSION['carrinho'][$id])) {
				$_SESSION['carrinho'][$id] = 1;
			} else {
				$_SESSION['carrinho'][$id] += 1;
			}
		}

	}

	//$_SESSION['imgCat'] = $_GET['cat'];
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

<?php include('menu.php'); ?>


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
					<?php 
						if (isset($_SESSION['user'])) {
							$pag = "product-detail.php";				
						} else {
							$pag = "product.php";
							
							echo "<div class='alert-danger'><center>Faça o <a href='login.php'>login</a> e veja os produtos!</center></div><br>";

						}
					?>
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
error_reporting(0);

	$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
	$registro = 6;

	$sqlT = "SELECT * FROM produtos";
	$queryT = mysqli_query($conexao, $sqlT);
	$total = mysqli_num_rows($queryT);

	$numPaginas = ceil($total / $registro);


	$inicio = $pagina - 1;
	$inicio = $inicio * $numPaginas;

	$sql = "SELECT * FROM produtos LIMIT $inicio, $registro";

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
								<a href="?acao=add&id='.$dadosP['cod'].'" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
									Adicionar ao carrinho
								</a>
							</div>
						</div>
					</div>

					<div class="block2-txt p-t-20">
						<a href="'.$pag.'?cat='.$_GET['cat'].'&prod='.$dadosP['nome'].'&id='.$dadosP['cod'].'" class="block2-name dis-block s-text3 p-b-5">
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
					<?php 
						for ($i=1; $i<=$numPaginas; $i++) { 
							if ($_GET['pagina'] == $i) {
								echo '<a href="?pagina='.$i.'" class="item-pagination flex-c-m trans-0-4 active-pagination">'.$i.'</a>';
							} else {
								echo '<a href="?pagina='.$i.'" class="item-pagination flex-c-m trans-0-4">'.$i.'</a>';
							}		
						}
					?>
					
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->

		<?php include('footer.php') ?>



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
