<?php 
error_reporting(0);
	include('config.php');

?>

<table class="table table-striped table-hover">
	<thead>
		<tr style="background:black; color:white;">
			<td>Código</td>
			<td>Nome</td>
			<td>Preço</td>
			<td>Categoria</td>
			<td>Ação</td>
		</tr>
	</thead>
	<tbody>
		<?php 

			$sql = "SELECT * FROM produtos";
			$query = mysqli_query($conexao, $sql);

			while ($dados = mysqli_fetch_assoc($query)) {
				echo '
					<tr>
						<td>'.$dados['cod'].'</td>
						<td>'.$dados['nome'].'</td>
						<td>'.$dados['preco'].'</td>
						<td>'.$dados['cat'].'</td>
						<td><a href="?" class="glyphicon glyphicon-eye-open"></a> | <a href="?page=consulta&id='.$dados['cod'].'&acao=del" class="glyphicon glyphicon-trash" style="color:red"></a></td>
					</tr>
				';
			}

		?>
	</tbody>
</table>

<?php 

	if (isset($_GET['id']) && $_GET['acao'] == "del") {
		$sqlDel = "DELETE FROM produtos WHERE cod = '".$_GET['id']."'";
		$queryDel = mysqli_query($conexao, $sqlDel);
		if ($queryDel) {
			echo "<script>alert('Produto apagado com sucesso!');
							location.href = '?page=consulta';</script>";
		} else {
			echo "<script>alert('Erro ao apagar o produto!');</script>";
		}
	}

?>