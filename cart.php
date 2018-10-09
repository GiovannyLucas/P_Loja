<?php 
	session_start();


	if (isset($_GET['opc'])) {
		$id = $_GET['id'];
		if ($_GET['opc'] == "up") {
			$_SESSION['carrinho'][$_GET['id']] = $_GET['valor'];
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
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


	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(imgs/banner_carrinho.jpg);">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
	</section>


<script type="text/javascript">
	function Valor(id) {
		var valString = document.getElementById('v'+id).value;
		valInt = parseInt(valString);
		location.href = '?opc=up&valor='+valInt+'&id='+id;
	}
</script>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Produto</th>
							<th class="column-3">Preço</th>
							<th class="column-4">Quantidade</th>
							<th class="column-5">Total</th>
							<th class="column-6">Ação</th>
						</tr>
					
					<?php
						error_reporting(0); 
						$total = 0;
				 	if (isset($_SESSION['user'])) {
								
							foreach ($_SESSION['carrinho'] as $id => $qnt) {
									$sqlL = "SELECT * FROM produtos WHERE cod = '".$id."'";
									$query = mysqli_query($conexao, $sqlL);

									$prods = mysqli_fetch_assoc($query);
									
									$sqlImg = "SELECT * FROM imagens WHERE id_Produto = '$id' LIMIT 0,1";
									$queryImg = mysqli_query($conexao, $sqlImg);

									$Img = mysqli_fetch_assoc($queryImg);

									$total += $qnt * $prods['preco'];
									$totalProds = $qnt * $prods['preco'];
							echo'
								<tr class="table-row">
									<td class="column-1">
										<div class="cart-img-product b-rad-4 o-f-hidden">
											<img src="admin/img/'.$Img['img'].'" alt="IMG-PRODUCT">
										</div>
									</td>
									<td class="column-2">'.$prods['nome'].'</td>
									<td class="column-3">'.$prods['preco'].'</td>
									<td class="column-4">
										<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
											<select class="selection-2" onchange="Valor('.$prods['cod'].')" id="v'.$prods['cod'].'">';
											for ($i=0; $i <= $prods['qnt']; $i++) { 
												if ($i == $qnt) {
													echo "<option value='".$i."' selected>".$i."</option>";
												} else {
													echo "<option value='".$i."'>".$i."</option>";
												}
											}		
									echo '
											</select>
										</div>	
									</td>
									<td class="column-5">'.$totalProds.'</td>
									<td><a class="flex-c-m size9 bg1 bo-rad-23 hov1 s-text1 trans-0-4" href="cart.php?acao=del&id='.$prods['cod'].'" style="margin-right: 10px">
										<span>Apagar <i class="fa fa-trash"></i></span>
										</a>
									</td>
								</tr>';
								
							}

							echo '
		</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Código do cupom">
					</div>

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Aplicar cupom
						</button>
					</div>
				</div>

			</div>

			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					TOTAL DO CARRINHO:
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Geral:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						'.$total.'
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<div class="w-size20 w-full-sm">
						<span class="s-text19">
							Serviço:
						</span>
					<form method="post">
						<div class="size13 bo4 m-b-22">
							<select name="tipo" id="tipo" class="form-control">
								<option value="04510">PAC</option>
								<option value="04014">Sedex</option>
							</select>
						</div>

						<span class="s-text19">
							Calcular frete:
						</span>

						<div class="size13 bo4 m-b-22">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="cepDestino" placeholder="CEP">
						</div>

						<div class="size14 trans-0-4 m-b-10">
							<!-- Button -->
						
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" type="submit">
								Atualizar total
							</button>
							
						</div>

					</div>
					</form>
				</div>
							';
						}	
							
					?>			
						
					

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span  class="m-text22 w-size19 w-full-sm">
						<?php 
						if (empty($_POST['cepDestino']) || !isset($_POST['tipo'])) {
								
								echo "<center>Informe seu CEP</center>";

						} else {
							
							$url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=08082650&sDsSenha=564321&sCepOrigem=59920000&sCepDestino=".$_POST['cepDestino']."&nVlPeso=1&nCdFormato=1&nVlComprimento=20&nVlAltura=20&nVlLargura=20&sCdMaoPropria=n&nVlValorDeclarado=0&sCdAvisoRecebimento=n&nCdServico=".$_POST['tipo']."&nVlDiametro=0&StrRetorno=xml&nIndicaCalculo=3";

							$xml = simplexml_load_file($url);

							$dados = $xml->cServico;

							$valor = $dados->Valor;
							$prazo = $dados->PrazoEntrega;

							echo "Preço: $valor<br>";
							echo "Prazo: $prazo dias<br>";

						}	
						?>
						
					</span>
				</div>
					<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
						<span  class="m-text22 w-size19 w-full-sm">
							<?php 
							$totalCompra = $valor+$total;
								echo "TOTAL: R$ $totalCompra";								
							
							$_SESSION['total'] = $totalCompra;
							?>
						</span>
					</div>	
				

				<div class="size15 trans-0-4">
					<!-- Button -->
					<a href="?opc=finalizar" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						FINALIZAR PEDIDO
					</a>
				</div>
			</div>
		</div>
	</section>



	<!-- Footer -->
<?php 
include('footer.php');

if (isset($_GET['opc'])) {
	if ($_GET['opc'] == "finalizar") {
		
		$sqlPedido = "INSERT INTO pedidos VALUES (DEFAULT,'".$_SESSION['total']."','".$_SESSION['user']."',NOW())";
		$queryPedido = mysqli_query($conexao, $sqlPedido);

		if ($queryPedido) {
			unset($_SESSION['total']);
			unset($_SESSION['carrinho']);

			echo "<script>
						alert('Compra finalizada com sucesso!');
						location.href = 'cart.php';
				  </script>";

		}

	}
}

?>



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
	<script src="js/main.js"></script>

</body>
</html>
