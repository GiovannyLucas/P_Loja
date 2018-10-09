<?php 
error_reporting(0);
	include('config.php');

?>

<table class="table table-striped table-hover">
	<thead>
		<tr style="background:black; color:white;">
			<td>#</td>
			<td>Cor</td>
			<td>Ação</td>
		</tr>
	</thead>
	<tbody>
		<?php 

			$sql = "SELECT * FROM cor";
			$query = mysqli_query($conexao, $sql);

			while ($dados = mysqli_fetch_assoc($query)) {
				echo '
					<tr>
						<td>'.$dados['id_cor'].'</td>
						<td>'.$dados['nome_cor'].'</td>
						<td><a href="?page=consultaCor&id='.$dados['id_cor'].'&acao=del" class="glyphicon glyphicon-trash" style="color:red"></a>
						</td>
					</tr>
				';
			}

		?>
	</tbody>
</table>

<?php 

	if (isset($_GET['id']) && $_GET['acao'] == "del") {
		$sqlDel = "DELETE FROM cor WHERE id_cor = '".$_GET['id']."'";
		$queryDel = mysqli_query($conexao, $sqlDel);
		if ($queryDel) {
			echo "<script>alert('Cor apagada com sucesso!');
							location.href = '?page=consultaCor';</script>";
		} else {
			echo "<script>alert('Erro ao apagar a cor!');</script>";
		}
	}

?>

<!-- MODAL LOGIN  -->	
