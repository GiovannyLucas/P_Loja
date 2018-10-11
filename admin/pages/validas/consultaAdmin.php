<?php
	error_reporting(0);
	include('config.php');
?>

<div class="">

	<?php 

		$sql = "SELECT * FROM users_admin";
		$query = mysqli_query($conexao, $sql);
		echo '

			<table class="table table-hover table-striped">
				<thead>
					<tr style="background:black; color:white;">
						<td>#</td>
						<td>Nome</td>
						<td>E-mail</td>
						<td>Senha</td>
						<td>Nível</td>
						<td>Imagem</td>
						<td>Ação</td>
					</tr>	
				</thead>
				<tbody>
					
			';
		while ($dados = mysqli_fetch_Assoc($query)) {
		echo '
					<tr>
						<td>'.$dados['id'].'</td>
						<td>'.$dados['nome'].'</td>
						<td>'.$dados['email'].'</td>
						<td>'.$dados['senha'].'</td>
						<td>'.$dados['nivel'].'</td>
						<td><img src="img/'.$dados['img'].'" style="width: 50px; height: 50px"></td>
						<td><a href="?page=consultaAdmin&id='.$dados['id'].'&acao=del"><i class="glyphicon glyphicon-trash" style="color: red"></td>
					</tr>
		';
	}
		echo '
							
				</tbody>
			</table>
		';
	?>

</div>

<br>
<br>

<?php 

	if (isset($_GET['id']) && $_GET['acao'] == "del") {
		$sqlDel = "DELETE FROM users_admin WHERE id = '".$_GET['id']."'";
		$queryDel = mysqli_query($conexao, $sqlDel);
		if ($queryDel) {
			echo "<script>alert('Admin excluído com sucesso!');
							location.href = '?page=consultaAdmin';</script>";
		} else {
			echo "<script>alert('Erro ao excluir!');</script>";
		}
	}

?>