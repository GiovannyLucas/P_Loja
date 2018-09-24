<?php 
error_reporting(0);
	include('config.php');	
	session_start();	
?>

<div style="margin: 0 15px;">
	<form method="post" enctype="multipart/form-data">
		<input type="hidden" id="page" name="page" value="cad_Produto">

		<div class="form-group">
			<label for="cod">Código do produto: </label>
			<input type="text" id="cod" name="cod" class="form-control" readonly>
		</div>
		<div class="form-group">
			<label for="nome">Nome: </label>
			<input type="text" id="nome" name="nome" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="preco">Preço: </label>
			<input type="text" id="preco" name="preco" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="categoria">Categoria: </label>
			<select name="categoria" class="form-control" required>
			<?php
				$sqlCat = "SELECT * FROM categoria";
				$queryCat = mysqli_query($conexao, $sqlCat);

				while ($opt = mysqli_fetch_assoc($queryCat)) {
					echo "
						<option value='".$opt['nome_cat']."'>".$opt['nome_cat']."</option>
					";
				}
			?>
			</select>
		</div>
		<div class="form-group">
			<label for="img1">Imagem: </label>
			<input type="file" name="arquivo[]" multiple="multiple">
			<!--
			<label for="img2">Imagem 2: </label>
			<input type="file" name="img2">

			<label for="img3">Imagem 3: </label>
			<input type="file" name="img3">-->
		</div>		
		<div class="form-group">
			<label for="desc">Descrição: </label>
			<textarea id="desc" name="descricao" class="form-control" required></textarea>
		</div>
		<div class="form-group">
			<label for="info_add">Informações adicionais: </label>
			<textarea id="info_add" name="info_add" class="form-control"></textarea>
		</div>		
		<input type="submit" value="Cadastrar!" class="btn btn-primary">
		
	</form>
</div>

<?php 


if (isset($_POST['nome'])) {

	$diretorio = "img/";
    $arquivo = $_FILES['arquivo'];

    $sqlAdd = "INSERT INTO produtos VALUES (DEFAULT,'".$_POST['nome']."','".$_POST['preco']."','".$_POST['categoria']."','".$_POST['descricao']."','".$_POST['info_add']."',DEFAULT,DEFAULT)";
    $queryAdd = mysqli_query($conexao, $sqlAdd);

    $sqlLID = "SELECT LAST_INSERT_ID()";
    $queryLID = mysqli_query($conexao, $sqlLID);
    $cod_prod = mysqli_fetch_row($queryLID);


	for($i = 0; $i < count($_FILES['arquivo']); $i++){

        $destino = $diretorio."/".$arquivo['name'][$i];

        if (move_uploaded_file($arquivo['tmp_name'][$i], $destino)) {
            $sql = "INSERT INTO imagens VALUES (DEFAULT,'".$cod_prod[0]."','".$arquivo['name'][$i]."')";
            $query = mysqli_query($conexao, $sql);
        }
            
	}

	
	if ($queryAdd) {
			echo "<script>alert('Produto cadastrado com Sucesso!');
						location.href = '?page=cadProduto';</script>";
	} else {
			echo "<script>alert('Produto não cadastrado!');</script>";
	}	

}
	echo "<div class='col-md-12'>".$_SESSION['msg']."</div>";
?>
