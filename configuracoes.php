<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>GM Modas | Configurações</title>
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

	$sqlMostra = "SELECT * FROM usuarios WHERE id = '".$_SESSION['idUser']."'";
	$queryMostra = mysqli_query($conexao, $sqlMostra);

	$dados = mysqli_fetch_assoc($queryMostra);

?>
<br>
<div class="container">
	<form method="post">
		<label style="color: red;">Seu Nome:</label>
		<input class="form-control" type="text" name="nomeUser" value="<?php echo $dados['nome']; ?>" style="background-color: rgb(233,236,239);">
		<br>
		<label style="color: red;">Seu Telefone:</label>
		<input class="form-control" type="text" name="tel" value="<?php echo $dados['tel']; ?>" style="background-color: rgb(233,236,239);">
		<br>
		<label style="color: red;">Seu E-mail:</label>
		<input class="form-control" type="text" name="email" value="<?php echo $dados['email']; ?>" style="background-color: rgb(233,236,239);">
		<br>
		<label style="color: red;">Senha antiga:</label>
		<input class="form-control" type="text" readonly value="<?php echo $dados['senha']; ?>" style="background-color: rgb(233,236,239);">
		<br>
		<label style="color: red;">Senha nova:</label>
		<div class="input-group">
		<input class="form-control" type="password" name="senha" id="senha" style="background-color: rgb(233,236,239);"><i class="input-group-addon fa fa-eye" id="eye"></i>
		</div>
		<br>
		<br>
		<button type="submit" style="padding-top: 5px; padding-bottom: 5px; " class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">Atualizar meus dados <i class="fa fa-sync"></i></button>
			
	</form>
</div>
<br>
<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type="text/javascript">
	var senha = $("#senha");
	var eye = $("#eye");

	eye.mousedown(function(){
		senha.attr("type","text");
	});

	eye.mouseup(function(){
		senha.attr("type","password");
	});

	
</script>

</body>
</html>

<?php 
if (isset($_POST['nomeUser'])) {
	
	$sqlUp = "UPDATE usuarios SET nome = '".$_POST['nomeUser']."', tel = '".$_POST['tel']."', email = '".$_POST['email']."',email = '".$_POST['email']."', senha = '".$_POST['senha']."' WHERE id = '".$_SESSION['idUser']."'";
		$queryUp = mysqli_query($conexao, $sqlUp);
		if ($queryUp) {
			unset($_SESSION['user']);
			unset($_SESSION['idUser']);
			session_destroy();
			echo "<script>
						alert('Dados atualizados!');
						location.href = 'index.php';
				  </script>";

		} else {
			echo "<script>
						alert('Dados não atualizados!');
						location.href = 'configuracoes.php';
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