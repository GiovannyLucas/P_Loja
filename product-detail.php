<?php 
	session_start();
	error_reporting(0);
	include('config.php');

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

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>GM MODAS</title>
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<?php include('menu.php'); ?>


	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="product.php?cat=all" class="s-text16">
			Produtos
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="product.php?cat=<?php echo $_GET['cat']; ?>" class="s-text16">
			<?php echo $_GET['cat']; ?>
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="#" class="s-text16">
			<?php echo $_GET['prod']; ?>
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>
	</div>

	<!-- Product Detail -->
	<?php 
	if (isset($_GET['id'])) {

		$sqlImg = "SELECT * FROM imagens WHERE id_Produto = '".$_GET['id']."'";
		$queryImg = mysqli_query($conexao, $sqlImg);

echo '		
			<div class="container bgwhite p-t-35 p-b-80">
				<div class="flex-w flex-sb">
					<div class="w-size13 p-t-30 respon5">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
								<div class="slick3">
';
		while ($imgs = mysqli_fetch_assoc($queryImg)) {
	
			echo '
								<div class="item-slick3" data-thumb="admin/img/'.$imgs['img'].'">
									<div class="wrap-pic-w">
										<img src="admin/img/'.$imgs['img'].'" alt="IMG-PRODUCT">
									</div>
								</div>

							
			';
		}
echo '
							</div>
						</div>
					</div>
';		
	}
	?>
			<div class="w-size14 p-t-30 respon5">
				<?php 
				if (isset($_GET['id'])) {
					
					$sql = "SELECT * FROM produtos WHERE cod = '".$_GET['id']."'";
					$query = mysqli_query($conexao, $sql);

					$dados = mysqli_fetch_assoc($query);


					$sqlImg = "SELECT * FROM imagens WHERE id_Produto = '".$_GET['id']."'";
					$queryImg = mysqli_query($conexao, $sqlImg);

					$imgs = mysqli_fetch_assoc($queryImg);
				}
				?>
				<h4 class="product-detail-name m-text16 p-b-13">
				<?php echo $dados['nome']; ?>
				</h4>

				<span class="m-text17">
					<?php echo "R$ ".$dados['preco']; ?>
				</span>

				<div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Tamanho
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2" name="tam">
								<option><?php echo $dados['tamanho']; ?></option>
							</select>
						</div>
					</div>

					<div class="flex-m flex-w">
						<div class="s-text15 w-size15 t-center">
							Cor
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2" name="color">
								<option><?php echo $dados['cor']; ?></option>
							</select>
						</div>
					</div>

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<a href="?acao=add&id=<?php echo $dados['cod']; ?>" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Adicionar ao carrinho
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="p-b-45">
					<span class="s-text8 m-r-35">Código do produto: <?php echo $dados['cod']; ?></span>
					<span class="s-text8">Categoria: <?php echo $dados['cat']; ?></span>
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Descrição
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							<?php echo $dados['descricao']; ?>
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Informações adicionais
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							<?php echo $dados['info_add']; ?>
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Reviews (0)
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div> <!--Fim da DIV-->
			</div>
		</div>
	</div>

<?php 

	$sqlProd = "SELECT * FROM produtos WHERE cat = '".$dados['cat']."' LIMIT 1,8";
	$queryProd = mysqli_query($conexao, $sqlProd);

echo '
<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					PRODUTOS RELACIONADOS
				</h3>
			</div>

';
	while ($relacionados = mysqli_fetch_assoc($queryProd)) {
		$sqlImgRel = "SELECT * FROM imagens WHERE id_Produto = '".$relacionados['cod']."'";
		$queryImgRel = mysqli_query($conexao, $sqlImgRel);

		$ImgRel = mysqli_fetch_assoc($queryImgRel);
		echo '
			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="admin/img/'.$ImgRel['img'].'" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="product-detail.php?cat='.$relacionados['cat'].'&prod='.$relacionados['nome'].'&id='.$relacionados['cod'].'" class="block2-name dis-block s-text3 p-b-5">
									'.$relacionados['nome'].'
								</a>

								<span class="block2-price m-text6 p-r-5">
									R$ '.$relacionados['preco'].'
								</span>
							</div>
						</div>
					</div>


		';
	}
	

 ?>
		</div>
	</section>


	<!-- Footer -->
<?php include('footer.php'); ?>




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

		$('.btn-addcart-product-detail').each(function(){
			var nameProduct = $('.product-detail-name').php();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
