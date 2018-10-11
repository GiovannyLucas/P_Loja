<?php
	error_reporting(0);
	include('config.php');
?>

<div class="">

	<?php 

		$sql = "SELECT * FROM produtos WHERE cod = '".$_GET['id']."'";
		$query = mysqli_query($conexao, $sql);

		$sqlImg = "SELECT * FROM imagens WHERE id_Produto = '".$_GET['id']."' LIMIT 1,3";
		$queryImg = mysqli_query($conexao, $sqlImg);

		$dados = mysqli_fetch_Assoc($query);
		
		echo '<div class="alert-info" style="text-align:center"><legend style="font-size:50px">'.$dados['nome'].'</legend></div>';

		while ($imgs = mysqli_fetch_Assoc($queryImg)) {
		echo '	
			<center><div class="col-md-4 thumbnail">
				<img src="img/'.$imgs['img'].'" style="width: 100%; height: 40%">
			</div></center>
		';	
		}
		echo '

			<table class="table table-hover table-striped">
				<thead>
					<tr style="background:black; color:white;">
						<td>Código</td>
						<td>Preço</td>
						<td>Categoria</td>
						<td>Descrição</td>
						<td>Informações</td>
						<td>Cor</td>
						<td>Tamanho</td>
						<td>Quantidade</td>
					</tr>	
				</thead>
				<tbody>
					<tr>
						<td>'.$dados['cod'].'</td>
						<td>'.$dados['preco'].'</td>
						<td>'.$dados['cat'].'</td>
						<td>'.$dados['descricao'].'</td>
						<td>'.$dados['info_add'].'</td>
						<td>'.$dados['cor'].'</td>
						<td>'.$dados['tamanho'].'</td>
						<td>'.$dados['qnt'].'</td>	
					</tr>		
				</tbody>
			</table>
		';
	?>

<a href="?page=consulta" class="btn btn-primary"><i class="glyphicon glyphicon-log-out"></i> Voltar</a>
</div>

<br>
<br>