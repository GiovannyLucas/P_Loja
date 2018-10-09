<?php 
error_reporting(0);
	include('config.php');		
?>

<div style="margin: 0 15px;">
	<form method="post">
		<input type="hidden" id="page" name="page" value="addCor">

		<div class="form-group">
			<label for="nome">Cor: </label>
			<input type="text" id="nome" name="nome" class="form-control">
		</div>
		
		<input type="submit" value="Cadastrar!" class="btn btn-primary">
		
	</form>
</div>

<?php 

if (isset($_POST['nome'])) {
	
	$sqlAdd = "INSERT INTO cor VALUES (DEFAULT,'".$_POST['nome']."')";
	$queryAdd = mysqli_query($conexao, $sqlAdd);

	if ($queryAdd) {
		echo "<script>alert('Cor adicionada com Sucesso!');
					location.href = '?page=addCor';</script>";

	} else {
		echo "<script>alert('Cor não adicionada!');
					location.href = '?page=addCor';</script>";
	}

} else {

}
?>
