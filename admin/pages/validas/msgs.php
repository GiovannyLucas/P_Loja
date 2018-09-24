<table class="table table-hover table-striped">
	<thead>
		<tr style="background: #000; color: white">
			<td>#</td>
			<td>Nome</td>
			<td>Telefone</td>
			<td>Email</td>
			<td>Assunto</td>
			<td>Ação</td>
		</tr>
	</thead>
	<tbody>	
	<?php 
error_reporting(0);
	include('config.php');
		$sqlMsgs = "SELECT * FROM notificacoes";
		$queryMsgs = mysqli_query($conexao, $sqlMsgs);

		while ($dados = mysqli_fetch_assoc($queryMsgs)) {
			if ($dados['status'] == 1) {
				$status = "-open";
			} else {
				$status = "";
			}
			echo '
			<tr>
				<td>'.$dados['id'].'</td>
				<td>'.$dados['nome'].'</td>
				<td>'.$dados['tel'].'</td>
				<td>'.$dados['email'].'</td>
				<td>'.$dados['assunto'].'</td>
				<td><a href="" data-toggle="modal" data-target="#myModal" data-id="'.$dados['id'].'" data-nome="'.$dados['nome'].'" data-tel="'.$dados['tel'].'" data-email="'.$dados['email'].'" data-assunto="'.$dados['assunto'].'" data-mensagem="'.$dados['msg'].'"><i class="fa fa-envelope'.$status.'"></i></a> | <a class="fa fa-trash" href="?page=msgs&acao=del&id='.$dados['id'].'"></a></td>
			</tr>
			';	
	

		}
		if (isset($_GET['acao'])) {
			if ($_GET['acao'] == "del") {
				$sqlDel = "DELETE FROM notificacoes WHERE id ='".$_GET['id']."'";
				mysqli_query($conexao, $sqlDel);
			} else
			if ($_GET['acao'] == "up") {
				$sqlUp = "UPDATE notificacoes SET status='1' WHERE id = '".$_GET['id']."'";
				mysqli_query($conexao, $sqlUp);
			}
		}

	?>
		
	</tbody>
</table>

  <div class="modal fade" id="myModal" role="dialog">
	
	<form method="post" enctype="multipart/form-data">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cadastrar Curso</h4>
        </div>
        <div class="modal-body">

			<div class="form-group">
			  	<label for="nome">Nome:</label>
			    <input type="text" class="form-control" id="nome" name="nome" required>
			</div>
			<div class="form-group">
			    <label for="carga">Carga:</label>
			    <input type="number" class="form-control" id="carga" name="carga" required>
			</div>
			<div class="form-group">
			    <label for="nivel">Nível: </label>
			    <select name="nivel" class="form-control">
			    	<option value="Basico">Básico</option>
			    	<option value="Intermediario">Médio</option>
			    	<option value="Avancado">Avançado</option>
			    </select>
			</div>
			<div class="form-group">
			    <label for="img">Imagem do curso:</label>
			    <input type="file" class="form-control" name="img" required>
			</div>
			<div class="form-group">
			    <label for="categoria">Categoria: </label>
			    <select name="categoria" class="form-control">
		    	<?php 
					$sql = "SELECT * FROM categoria";
			        $query = mysqli_query($conexao, $sql);

			        if ($query) {
			        	while ($opt = mysqli_fetch_array($query)) {
			        			echo "<option value='".$opt['id']."'>".$opt['nome_cat']."</option>";
			        		}	
			        }

		    	?>
			    </select>
			</div>
			<br>
			  <button type="submit" class="btn btn-primary form-control">Cadastrar</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
</form>    
  </div>

<!-- /.modal -->
<script type="text/javascript">
	
 $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipientId = button.data('id')
  var recipientNome = button.data('nome')
  var recipientTel = button.data('tel')
  var recipientEmail = button.data('email')
  var recipientAssunto = button.data('assunto')
  var recipientMensagem = button.data('mensagem')
  var recipientEsc = button.data('esc')
  var modal = $(this)

  modal.find('#id').val(recipientId)
  modal.find('#nome').val(recipientNome)
  modal.find('#tel').val(recipientTel)
  modal.find('#email').val(recipientEmail)
  modal.find('#assunto').val(recipientAssunto)
  modal.find('#mensagem').val(recipientMensagem)
  modal.find('#esc').val(recipientEsc)

  
})
</script>