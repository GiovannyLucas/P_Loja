<?php 
error_reporting(0);
	include('config.php');	
	session_start();	
?>

<div style="margin: 0 15px;">
	<form method="post" enctype="multipart/form-data">
		<input type="hidden" id="page" name="page" value="cadProduto">

		<div class="form-group">
			<label for="cod">Código do produto: </label>
			<input type="text" id="cod" name="cod" class="form-control" readonly>
		</div>
		<div class="form-group">
			<label for="nome">Nome: </label>
			<input type="text" id="nome" name="nome" class="form-control" required>
		</div>
			<label>Preço: </label>
		<div class="input-group">
			<span class="input-group-addon">R$</span>
			<input type="text" id="preco" name="preco" class="form-control" placeholder="99.99" required>
		</div>
			<label for="categoria">Categoria: </label>
		<div class="form-group">
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
			<label for="color">Cor: </label>
			<select name="color" class="form-control" required>
			<?php
				$sqlCor = "SELECT * FROM cor";
				$queryCor = mysqli_query($conexao, $sqlCor);

				while ($optC = mysqli_fetch_assoc($queryCor)) {
					echo "
						<option value='".$optC['nome_cor']."'>".$optC['nome_cor']."</option>
					";
				}
			?>
			</select>
		</div>
		<div class="form-group">
			<label for="tam">Tamanho: </label>
			<input type="radio" name="tam" value="PP"><span> PP</span>
			<input type="radio" name="tam" value="P"><span> P</span>
			<input type="radio" name="tam" value="M"><span> M</span>
			<input type="radio" name="tam" value="G"><span> G</span>
			<input type="radio" name="tam" value="GG"><span> GG</span>
			<input type="radio" name="tam" value="XG"><span> XG</span>
		</div>	
		<div class="form-group">
			<label for="qnt">Quantidade: </label>
			<input type="number" name="qnt" class="form-control" placeholder="99">
		</div>				
		<div class="form-group">
			<label for="img1">Imagem: </label>
			<input type="file" name="arquivo[]" multiple="multiple">
		</div>		
		<div class="form-group">
			<label for="desc">Descrição: </label>
			<textarea id="desc" name="descricao" class="form-control" required></textarea>
		</div>
		<div class="form-group">
			<label for="info_add">Informações adicionais: </label>
			<textarea id="info_add" name="info_add" class="form-control"></textarea>
		</div><br>		
		<input type="submit" value="Cadastrar!" style="padding-bottom: 20px; font-size: 18px" class="btn btn-primary form-control" >
		
	</form>
</div>
<br>
<br>
<br>
<?php 


if (isset($_POST['nome'])) {

	$diretorio = "img/";
    $arquivo = $_FILES['arquivo'];

    $sqlAdd = "INSERT INTO produtos VALUES (DEFAULT,'".$_POST['nome']."','".$_POST['preco']."','".$_POST['categoria']."','".$_POST['descricao']."','".$_POST['info_add']."','".$_POST['color']."','".$_POST['tam']."','".$_POST['qnt']."')";
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
			echo "<script>alert('Produto cadastrado com sucesso!');
						location.href = '?page=cadProduto';</script>";
	} else {
			echo "<script>alert('Produto não cadastrado!');</script>";
	}	

}
	echo "<div class='col-md-12'>".$_SESSION['msg']."</div>";
?>
