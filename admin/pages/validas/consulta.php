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
						<td><a href="" class="glyphicon glyphicon-eye-open"></a> | <a href="?page=consulta&id='.$dados['cod'].'&acao=del" class="glyphicon glyphicon-trash" style="color:red"></a></td>
					</tr>
				';
			}

		?>
	</tbody>
</table>

<?php 

	if (isset($_GET['id']) && $_GET['acao'] == "del") {

		$queryDel = mysqli_query($conexao, "DELETE FROM imagens WHERE id_Produto = '".$_GET['id']."'");	
		$queryDel1 = mysqli_query($conexao, "DELETE FROM produtos WHERE cod = '".$_GET['id']."'");
		
		if ($queryDel && $queryDel1) {
			echo "<script>alert('Produto apagado com sucesso!');
							location.href = '?page=consulta';</script>";
		} else {
			echo "<script>alert('Erro ao apagar o produto!');</script>";
		}
	}

?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Fazer Login</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        	<form method="post">
		        		<label for="nome">Código:</label>	        		
		        		<span class="form-control">
		        		<input type="text" name="nome" class="form-control" style="background-color: rgb(233,236,239);">
	        		<br>
	        		<label for="senha">Senha:</label>
	        		<div class="input-group">
		        		<span class="input-group-addon form-control"><span class="fa fa-key"></span>
		        		<input type="password" name="senha" class="form-control" style="background-color: rgb(233,236,239);"></span>
	        		</div>
	      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
		        <button type="submit" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">Logar <span style="margin-left: 5px" class="fa fa-sign-in"></span></button>
		      </div>
		      </form>
		    </div>
	       
	  </div>
</div>

<script type="text/javascript">

 $('#exampleModal').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget)
  var recipientId = button.data('id')
  var recipientTitulo = button.data('titulo')
  var recipientUrl = button.data('url')
  var recipientStatus = button.data('status')
  var modal = $(this)

  modal.find('#id').val(recipientId)
  modal.find('#menu').val(recipientTitulo)
  modal.find('#url').val(recipientUrl)

});
 
</script>