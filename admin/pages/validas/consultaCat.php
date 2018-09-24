<?php 
error_reporting(0);
	include('config.php');

?>

<table class="table table-striped table-hover">
	<thead>
		<tr style="background:black; color:white;">
			<td>#</td>
			<td>Nome</td>
			<td>Ação</td>
		</tr>
	</thead>
	<tbody>
		<?php 

			$sql = "SELECT * FROM categoria";
			$query = mysqli_query($conexao, $sql);

			while ($dados = mysqli_fetch_assoc($query)) {
				echo '
					<tr>
						<td>'.$dados['id_cat'].'</td>
						<td>'.$dados['nome_cat'].'</td>
						<td><a href="?" class="glyphicon glyphicon-eye-open"></a> | <a href="?page=consultaCat&id='.$dados['id_cat'].'&acao=del" class="glyphicon glyphicon-trash" style="color:red"></a>
						</td>
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
			echo "<script>alert('Categoria apagada com sucesso!');
							location.href = '?page=consultaCat';</script>";
		} else {
			echo "<script>alert('Erro ao apagar a categoria!');</script>";
		}
	}

?>