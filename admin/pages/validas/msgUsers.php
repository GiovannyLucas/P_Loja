<table class="table table-hover table-striped" id="tabela">
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
				<td><a href="" data-toggle="modal" data-target="#exampleModal" data-id="'.$dados['id'].'" data-nome="'.$dados['nome'].'" data-tel="'.$dados['tel'].'" data-email="'.$dados['email'].'" data-assunto="'.$dados['assunto'].'" data-mensagem="'.$dados['msg'].'"><i class="fa fa-envelope'.$status.'"></i></a> | <a class="fa fa-trash" href="?page=msgs&acao=del&id='.$dados['id'].'"></a></td>
			</tr>
			';	
	

		}
		if (isset($_POST['acao'])) {
				if ($_POST['acao'] == "del") {
					$sqlDel = "DELETE FROM notificacoes WHERE id ='".$_POST['id']."'";
					mysqli_query($conexao, $sqlDel);
				} else
				if ($_POST['acao'] == "up") {
					$sqlUp = "UPDATE notificacoes SET status='1' WHERE id = '".$_POST['id']."'";
					mysqli_query($conexao, $sqlUp);
					echo "<script>location.href = '?page=msgUsers';</script>";
				}
			}
	?>
		
	</tbody>
</table>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- MODAL -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Mensagem</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post">

       		<input type="hidden" name="page" value="msgs">
       		<input type="hidden" name="acao" value="up">

		  <fieldset>
		  <div class="form-group">
		  	<label for="id">Id</label>
		    <input style="width: 80px" type="text" class="form-control" id="id" name="id" readonly>
		  </div>
		  <div class="form-group">
		  	<label for="nome">Nome</label>
		    <input type="text" class="form-control" id="nome" name="nome" readonly>
		  </div>
		  <div class="form-group">
		    <label for="tel">Telefone:</label>
		    <input type="text" class="form-control" id="tel" name="tel" readonly>
		  </div>
		  <div class="form-group">
		    <label for="email">E-mail:</label>
		    <input type="text" class="form-control" id="email" name="email" readonly>
		  </div>
		  <div class="form-group">
		    <label for="assunto">Assunto:</label>
		    <input type="text" class="form-control" id="assunto" name="assunto" readonly>
		  </div>
		  <div class="form-group">
		    <label for="mensagem">Mensagem:</label><br>
		    <textarea id="mensagem" name="mensagem" rows="5" class="form-control" readonly></textarea>
		  </div>
			</fieldset>
		    <div class="modal-footer">
        	<a href="?page=msgs" class="btn btn-secondary" data-dismiss="modal">Fechar</a>
        <button type="submit" class="btn btn-primary">Marcar como lida!</button>
      </div>
		</form>
      </div>
    
    </div>
  </div>
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

<label id="esc" data-esc="Gio4"></label>

