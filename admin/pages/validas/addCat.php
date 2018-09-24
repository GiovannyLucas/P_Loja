<?php 
error_reporting(0);
	include('config.php');		
?>

<div style="margin: 0 15px;">
	<form method="post">
		<input type="hidden" id="page" name="page" value="addCat">

		<div class="form-group">
			<label for="nome">Nome da categoria: </label>
			<input type="text" id="nome" name="nome" class="form-control">
		</div>
		
		<input type="submit" value="Cadastrar!" class="btn btn-primary">
		
	</form>
</div>

<?php 

if (isset($_POST['nome'])) {
	
	$sqlAdd = "INSERT INTO categoria VALUES (DEFAULT,'".$_POST['nome']."')";
	$queryAdd = mysqli_query($conexao, $sqlAdd);

	if ($queryAdd) {
		echo "<script>alert('Categoria adicionada com Sucesso!');
					location.href = '?page=addCat';</script>";

	} else {
		echo "<script>alert('Categoria não adicionada!');
					location.href = '?page=addCat';</script>";
	}

} else {

}
?>
