<?php 
	include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>GM Modas | Login</title>
</head>	
<body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Cadastrar-se</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" method="get" role="form" style="display: block;">
									<div class="form-group">
										<label for="name">Usuário:</label>
										<input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Nome">
									</div>
									<div class="form-group">
										<label for="pass">Senha:</label>
										<input type="password" name="pass" id="pass" tabindex="2" class="form-control" placeholder="********">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Login">
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" method="post" role="form" style="display: none;">
									<div class="form-group">
										<label for="nome">Usuário:</label>
										<input type="text" name="nome" id="nome" tabindex="1" class="form-control" placeholder="Seu nome" value="">
									</div>
									<div class="form-group">
										<label for="cpf">CPF:</label>
										<input type="text" name="cpf" id="cpf" tabindex="1" class="form-control" placeholder="999.999.999-99">
									</div>
									<div class="form-group">
										<label for="tel">Telefone/Celular:</label>
										<input type="text" name="tel" id="tel" tabindex="1" class="form-control" placeholder="(99)99999-9999">
									</div>
									<div class="form-group">
										<label for="email">E-mail:</label>
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="seu@email.com">
									</div>
									<div class="form-group">
										<label for="pass">Senha:</label>
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="********">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Cadastre-se já!">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

<style type="text/css">
body {
    padding-top: 90px;
}
.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}
		
</style>

<script type="text/javascript">
	$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
</script>	

<?php
include('config.php'); 

//LOGIN

if (isset($_POST['name'])) {
	
	$sql = "SELECT * FROM usuarios WHERE nome = '".$_GET['name']."' AND senha = '".$_GET['pass']."'";
	$query = mysqli_query($conexao, $sql);

	if ($_GET['name'] == "admin" && $_GET['pass'] == "admin") {
		header('location: admin/login.php');
	} else {
		if (mysqli_num_rows($query) > 0) {
			$_SESSION['user'] = $_GET['name'];
			header('location: index.php');
		} else {
		echo "<script>alert('Usuário e/ou senha incorreto(s)!');</script>";
		}
	}

}
if (isset($_POST['nome'])) {
//CADASTRO
	$sql = "INSERT INTO usuarios VALUES (DEFAULT,'".$_POST['nome']."','".$_POST['cpf']."','".$_POST['tel']."','".$_POST['email']."','".$_POST['password']."')";
	$query = mysqli_query($conexao, $sql);

	if ($query) {
		echo "<script>alert('Usuário cadastrado com sucesso!');
					location.href = 'index.php';</script>";
	} else {
		echo "<script>alert('Erro ao cadastrar!');</script>";
	}
}	
?>