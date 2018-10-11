<?php 
session_start();
error_reporting(0);
	require('config.php');

	if (isset($_POST['user']) && isset($_POST['pass'])) {
		$user = $_POST['user'];

		if (substr($user, -4) == "_ADM") {
			$sql = "SELECT * FROM users_admin WHERE nome ='".$user."' AND senha ='".$_POST['pass']."'";
			$query = mysqli_query($conexao, $sql);
			if (mysqli_num_rows($query) > 0) {
				$_SESSION['user'] = $_POST['user'];
				header('location: index.php');
			}
		} else {
			$sql = "SELECT * FROM usuarios WHERE nome ='".$_POST['user']."' AND senha ='".$_POST['pass']."'";
			$query = mysqli_query($conexao, $sql);
			
			if (mysqli_num_rows($query) > 0) {
				$_SESSION['user'] = $_POST['user'];
				header('location: ../index.php');
			} else {
				$_SESSION['msg'] = "<div id='alert' class='alert alert-danger'>Usuário e/ou Senha incorreto(s)!</div>";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="dist/css/style.css">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
	<title>LOGIN</title>
	<script type="text/javascript">
		$(document).ready(function(){
			$( "#alert" ).fadeOut(3000);
		});
	</script>
</head>
<body style="background-color: black">

<br><br>
	
		<div class="col-md-4"></div>
		<div class="col-md-4">
		
		<span style="font-size: 40px; color: white">LOGIN</span>
		<hr>
			   	
		<form method="post">

			<div class="input-group">			   	
			   	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			    <input type="text" class="form-control" id="user" name="user" required placeholder="Usuário">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			    <input type="password" class="form-control" id="pwd" name="pass" required placeholder="********" minlength="1">
			</div>
			  <br>
			  <BUTTON type="submit" class="btn btn-primary form-control" href="">Entrar</BUTTON>

		</form>
		<br>
		<br>
			<center><label class="text-center" style="margin-top: 20px">
				<?php echo $_SESSION['msg'];?>
			</label></center>
		</div>
		<div class="col-md-4">
			
		</div>

</body>
</html>
