<?php 
error_reporting(0);
	include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>GM Modas | Cadastro</title>
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
	<style type="text/css">
		.cadUser{
			text-decoration: none;
			position: relative;
			color: #2f4f4f;
			font-size: 30px;
			font-weight: 700;
			font-family: sans-serif;
			display:block;
			overflow: hidden;
			transition: 0.7s all;
			padding: 14px 20px; 
			text-transform: uppercase;
		}

		.cadUser:before{
			content: '';
			width: 60px;
			position: absolute;
			border-bottom: 8px solid #2f4f4f;
			bottom: 0;
			right: 350px;
			transition: 0.7s all;
		}

		.cadUser:hover:before{
			right: 0;
		}
	</style>

</head>
<body>
	<?php include('menu.php'); ?>
<script type="text/javascript"> 
jQuery.noConflict();
jQuery(function($){
   $("#tel").mask("(099) 9999-9999");
   $("#cpf").mask("999.999.999-99");
});
</script> 
<div class="col-4"></div>

<div class="col-4" style="margin-left: 35%; cursor: pointer;">
	<div class="cadUser">
	CADASTRO

	</div>
	<legend></legend>
<br>	
	<div>
		<form method="post">
			<label>Nome: </label>
			  <div class="input-group">
			    <span class="input-group-addon form-control"><i class="fa fa-user"></i>
			    <input id="name" type="text" class="form-control" name="name" placeholder="Nome" required style="background-color: rgb(233,236,239);"></span>
			  </div><br>
			  <label>CPF: </label>
			  <div class="input-group">
			    <span class="input-group-addon form-control"><i class="fa fa-address-card"></i>
			    <input id="cpf" type="text" class="form-control" name="cpf" placeholder="999.999.999-99" required style="background-color: rgb(233,236,239);"></span>
			  </div><br>
			  <label>Telefone: </label>
			  <div class="input-group">
			    <span class="input-group-addon form-control"><i class="fa fa-phone"></i>
			    <input id="tel" type="text" class="form-control" name="tel" placeholder="Telefone" required style="background-color: rgb(233,236,239);"></span>
			  </div><br>
			  <label>E-mail: </label>
			  <div class="input-group">
			    <span class="input-group-addon form-control"><i class="fa fa-at"></i>
			    <input id="email" type="text" class="form-control" name="email" placeholder="E-mail" required style="background-color: rgb(233,236,239);"></span>
			  </div><br>
			  <label>Senha: </label>
			  <div class="input-group">
			    <span class="input-group-addon form-control"><i class="fa fa-key"></i>
			    <input id="pass" type="password" class="form-control" name="pass" placeholder="********" required style="background-color: rgb(233,236,239);"></span>
			  </div><br>
			  <input type="submit" class="btn btn-dark" value="CADASTRAR">
		</form>
	  
	</div>

<div class="col-4"></div>
	
</body>
</html>

<?php
$sqlCad = "SELECT * FROM usuarios WHERE cpf = '".$_POST['cpf']."'";
$queryCad = mysqli_query($conexao, $sqlCad);

	if (!mysqli_num_rows($queryCad) > 0) {
		
		if (isset($_POST['name'])) {

			$sqlInsert = "INSERT INTO usuarios VALUES (DEFAULT,'".$_POST['name']."','".$_POST['cpf']."','".$_POST['tel']."','".$_POST['email']."','".$_POST['pass']."')";
			$queryInsert = mysqli_query($conexao, $sqlInsert);

			$sqlEnd = "INSERT INTO enderecos VALUES ('','','".$_POST['name']."','','','','','0')";
			$queryEnd = mysqli_query($conexao, $sqlEnd);

				if ($queryInsert && $queryEnd) {
					echo "<script>alert('Usuário cadastrado com sucesso!');
								location.href = 'cadUser.php';</script>";
				} else {
					echo "<script>alert('Usuário não cadastrado!');</script>";
				}
		}
	} else {
		echo "<script>alert('CPF já cadastrado!');</script>";
	}


?>


	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>	
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