<?php include('config.php'); ?>	
	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Envio grátis para compras a partir de R$100
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						<?php echo $_SESSION['user']; ?>
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>D$</option>
							<option>R$</option>
						</select>
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<img src="images/icons/logo1.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Menu</a>
							</li>
							<li>
								<a href="product.php?cat=all">Fazer compras</a>
							</li>

				<?php 

					if (isset($_SESSION['user'])) {
						echo '
						
							<li>
								<a href="product.php">Promoções</a>
							</li>

							<li>
								<a href="about.php">Sobre</a>
							</li>

							<li>
								<a href="contact.php">Contatos</a>
							</li>
							';
						}
				?>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<?php 
					error_reporting(0);
						if (isset($_SESSION['user'])) {
							echo '
							<div class="header-wrapicon2">
								<img src="images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
							

								<div class="header-cart header-dropdown">
								<table class="table table-hover">
									<thead>
										<tr>
											<td>Opções</td>
										</tr>
									</thead>
									<tbody>
										<tr class="header-cart-wrapitem">
											<td><a href="configuracoes.php">Configurações </a></td>
											<td><a href="configuracoes.php"><h6 class="fa fa-cogs"><h6></a></td>
										</tr>
										<tr>
											<td><a href="pedidos.php?usuario='.$_SESSION['user'].'">Ver pedidos </a></td>
											<td><a href="pedidos.php?usuario='.$_SESSION['user'].'"><h6 class="fa fa-tasks"><h6></a></td>
										</tr>
										<tr>
											<td><a href="enderecos.php?usuario='.$_SESSION['user'].'">Endereços </a></td>
											<td><a href="enderecos.php?usuario='.$_SESSION['user'].'"><h6 class="fa fa-address-card"><h6></a></td>
										</tr>
									</tbody>
								</table>
									<div align="right">
										<a href="?sair=true" class="btn btn-outline-danger">Sair <span class="fa fa-sign-out"></span></a>	
									</div>
								</div>
							</div>		
								';
						} else {
							echo '
							<a href="cadUser.php" class="header-wrapicon1 dis-block">
									Cadastre-se  
							</a> | <a href="" data-toggle="modal" data-target="#exampleModal" class="header-wrapicon1 dis-block">
									Faça login! 
							</a>';
						}
					?>
					

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti"><?php 
							echo count($_SESSION['carrinho']);
						?></span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
							<?php
							error_reporting(0); 
							$total = 0;
						if (isset($_SESSION['user'])) {
								
								foreach ($_SESSION['carrinho'] as $id => $qnt) {
									$sqlL = "SELECT * FROM produtos WHERE cod = '".$id."'";
									$query = mysqli_query($conexao, $sqlL);

									$prods = mysqli_fetch_assoc($query);
									
									$sqlImg = "SELECT * FROM imagens WHERE id_Produto = '$id' LIMIT 0,1";
									$queryImg = mysqli_query($conexao, $sqlImg);

									$Img = mysqli_fetch_assoc($queryImg);

									$total += $qnt * $prods['preco'];
							echo'
								<li class="header-cart-item">
									
										<a class="header-cart-item-img" href="?acao=del&id='.$id.'">
										<img src="admin/img/'.$Img['img'].'" alt="IMG">
										</a>
									
									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											'.$prods['nome'].'
										</a>

										<span class="header-cart-item-info">
											'.$qnt.'x'.$prods['preco'].'
										</span>
									</div>
								</li>';

							}

								if (isset($_GET['acao'])) {
									if ($_GET['acao'] == "del") {
										unset($_SESSION['carrinho'][$id]);
										echo "<script>location.href = 'product.php';</script>";
									}
								}
							echo '</ul>

							<div class="header-cart-total">
								Total: R$ '.$total.'
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Ver carrinho
									</a>
								</div>
							</div>
							';
							
						} else {
							echo '
							<center><a href="#" class="header-wrapicon1 dis-block">
									Cadastre-se  
							</a>
							<span> ou </span>
							<a href="" data-toggle="modal" data-target="#exampleModal" class="header-wrapicon1 dis-block" class="header-wrapicon1 dis-block">
									 Faça login! 
							</a></center>';
						}


							?>	

							
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.php" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Ver carrinho
									</a>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Envio grátis para compras a partir de R$100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								<?php echo $_SESSION['user']; ?>
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>D$</option>
									<option>R$</option>
								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					
					<li class="item-menu-mobile">
						<a href="index.php">Menu</a>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="product.php?cat=all">Fazer compras</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.php">Promoção</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.php">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.php">Sobre</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.php">Contatos</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	
<!-- MODAL LOGIN  -->	
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
		        		<label for="nome">Nome:</label>
	        		<div class="input-group">
		        		<span class="input-group-addon form-control"><span class="fa fa-user"></span>
		        		<input type="text" name="nome" class="form-control" style="background-color: rgb(233,236,239);"></span>
	        		</div><br>
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
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var recipient = button.data('whatever') // Extract info from data-* attributes
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this)
	  modal.find('.modal-title').text('New message to ' + recipient)
	  modal.find('.modal-body input').val(recipient)
	});

</script>

<?php 

if (isset($_GET['sair'])) {
	if ($_GET['sair'] == "true") {
		unset($_SESSION['user']);
		unset($_SESSION['idUser']);
		session_destroy();
		echo '<script>
					location.href = "index.php";
			  </script>';
	}
}

if ($_POST['nome'] == "admin" & $_POST['senha'] == "admin") {
	echo "<script>location.href = 'admin/login.php';</script>";
} else
if (isset($_POST['nome'])) {
	$sqlLogin = "SELECT * FROM usuarios WHERE nome = '".$_POST['nome']."' AND senha = '".$_POST['senha']."'";
	$queryLogin = mysqli_query($conexao, $sqlLogin);

	if (mysqli_num_rows($queryLogin) > 0) {
		$queryId = mysqli_query($conexao, "SELECT * FROM usuarios WHERE nome = '".$_POST['nome']."'");
		$idd = mysqli_fetch_assoc($queryId);
		$_SESSION['idUser'] = $idd['id'];
		$_SESSION['user'] = $_POST['nome'];
		echo '<script>
					alert("Bem vindo, '.$_SESSION['user'].'!");
					location.href = "index.php";
			  </script>';
	} else {
		echo '<script>
					alert("Usuário e/ou senha incorreto(s)!");
					location.href = "index.php";
			  </script>';		
	}
}

?>