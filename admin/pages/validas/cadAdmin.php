<?php 
error_reporting(0);
	include('config.php');	
	session_start();	
?>

<div style="margin: 0 15px;">
	<form method="post" enctype="multipart/form-data">
		<input type="hidden" id="page" name="page" value="cadAdmin">

		<div class="form-group">
			<label for="nome">Nome: <i style="color: red"> (Use a tag "_ADM" no final do nome)</i> </label>
			<input type="text" id="nome" name="nome" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="email">E-mail: </label>
			<input type="text" id="email" name="email" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="img">Imagem: </label>
			<input type="file" id="img" name="img" class="form-control" required>
		</div>		
		<div class="form-group">
			<label for="pass">Senha: </label>
			<input type="password" id="pass" name="pass" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="nivel">Nível: </label>
			<select name="nivel" class="form-control">
				<option value="1">1</option>
				<option value="0">0</option>
			</select>
		</div>
		<input type="submit" class="btn btn-primary" value="Cadastrar">
	</form>
</div>


<?php 

if (isset($_POST['nome']) && substr($_POST['nome'], -4) == "_ADM") {
		$extensao = strtolower(substr($_FILES['img']['name'], -4));
		$imagem = md5(time()) . $extensao;
		$diretorio = "img/";

		move_uploaded_file($_FILES['img']['tmp_name'], $diretorio . $imagem);

	$sql = "INSERT INTO users_admin VALUES (DEFAULT, '".$_POST['nome']."', '".$_POST['email']."', '".$_POST['pass']."', '".$imagem."', '".$_POST['nivel']."')";
	$query = mysqli_query($conexao, $sql);

	if ($query) {
		echo "<script>alert('Administrador cadastrado!');</script>";
	} else {
		echo "<script>alert('Administrador não cadastrado!');</script>";
	}
} else {
	echo "<script>alert('Use a tag '_ADM' no final do nome!');</script>";
}

?>