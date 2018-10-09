<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>GM Modas | Endereços</title>
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
<body>

<?php 
	include('menu.php'); 

	$sqlMostra = "SELECT * FROM enderecos WHERE nome_user = '".$_SESSION['user']."'";
	$queryMostra = mysqli_query($conexao, $sqlMostra);

	$dados = mysqli_fetch_assoc($queryMostra);

?>
<br>
<div class="container">
	<form method="post">
		<label style="color: red;">Endereço:</label>
		<input class="form-control" type="text" name="end" value="<?php echo $dados['endereco']; ?>" style="background-color: rgb(233,236,239);">
		<br>
		<label style="color: red;">Cidade:</label>
		<input class="form-control" type="text" name="cidade" value="<?php echo $dados['cidade']; ?>" style="background-color: rgb(233,236,239);">
		<br>
		<label style="color: red;">Estado:</label>
		<input class="form-control" type="text" name="estado" value="<?php echo $dados['estado']; ?>" style="background-color: rgb(233,236,239);">
		<br>
		<label style="color: red;">País:</label>
		<input class="form-control" type="text" name="pais" value="<?php echo $dados['pais']; ?>" style="background-color: rgb(233,236,239);">
		<br>
		<label style="color: red;">CEP:</label>
		<input class="form-control" type="text" name="cep" value="<?php echo $dados['cep']; ?>" style="background-color: rgb(233,236,239);">
		<br>
		<br>
		<button type="submit" style="padding-top: 5px; padding-bottom: 5px; " class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">Atualizar meu endereço<i class="fa fa-sync"></i></button>
			
	</form>
</div>
<br>
<br>


</body>
</html>

<?php

if (isset($_POST['end'])) {
	
	$sqlUp = "UPDATE enderecos SET id_usuario = '".$_SESSION['idUser']."', endereco = '".$_POST['end']."', cidade = '".$_POST['cidade']."', estado = '".$_POST['estado']."', pais = '".$_POST['pais']."', cep = '".$_POST['cep']."' WHERE nome_user = '".$_SESSION['user']."'";
		$queryUp = mysqli_query($conexao, $sqlUp);
		if ($queryUp) {
			echo "<script>
						alert('Endereço atualizado!');
						location.href = 'enderecos.php';
				  </script>";

		} else {
			echo "<script>
						alert('Endereço não atualizado!');
						location.href = 'enderecos.php';
				  </script>";
		}
}


?>

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