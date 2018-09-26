<?php 
	include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>GM Modas</title>
	<link rel="stylesheet" type="text/css" href="admin/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.js">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.css">
	<script type="text/javascript" src="digitalBush-jquery.maskedinput-9672630/dist/jquery.maskedinput.js"></script>
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
<br>
<br>
<br>
<br>
<br>
<div class="col-md-4"></div>

<div class="col-md-4">
	<div class="cadUser">
	CADASTRO

	</div>
	<legend></legend>
	
	<form method="post">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="fa fa-user"></i></span>
		    <input id="nome" type="text" class="form-control" name="nome" placeholder="Nome" required>
		  </div><br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
		    <input id="tel" type="text" class="form-control" name="tel" placeholder="Telefone" required>
		  </div><br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="fa fa-at"></i></span>
		    <input id="email" type="text" class="form-control" name="email" placeholder="Email" required>
		  </div><br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
		    <input id="pass" type="password" class="form-control" name="pass" placeholder="********" required>
		  </div><br>
		  <button type="submit" class="btn btn-dark">CADASTRAR</button> OU <a href="login.php" class="btn btn-dark">LOGAR</a>
		  </div>
		  
	</form>

<div class="col-md-4"></div>	
</body>
</html>

<?php
$sql = "SELECT * FROM usuarios WHERE nome = '".$_POST['nome']."'";
$query = mysqli_query($conexao, $sql);

	if (!mysqli_num_rows($query) > 0) {
		
		if (isset($_POST['nome'])) {
			$sqlInsert = "INSERT INTO usuarios VALUES (DEFAULT,'".$_POST['nome']."','".$_POST['tel']."','".$_POST['email']."','".$_POST['pass']."')";
			$queryInsert = mysqli_query($conexao, $sqlInsert);

				if ($queryInsert) {
					echo "<script>alert('Usuário cadastrado com sucesso!');
								location.href = 'cadUser.php';</script>";
				} else {
					echo "<script>alert('Usuário não cadastrado!');</script>";
				}
		} else {

		}
	} else {
		echo "<script>alert('Usuário já cadastrado!');</script>";
	}


?>