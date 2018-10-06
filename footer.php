	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Entrar em contato
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Alguma pergunta? Deixe-nos saber na loja , 241 São Miguel, RIO GRANDE DO NORTE, RN 59920-000 ou ligue para: Tim - (84) 9 9616 8679  |  Claro - (84) 9 9108 5873
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categorias
				</h4>

				<ul>
				<?php 

					$sqlCat = "SELECT * FROM categoria";
					$queryCat = mysqli_query($conexao, $sqlCat);

					while ($cat = mysqli_fetch_assoc($queryCat)) {
							echo '
							<li class="p-b-9">
								<a href="?cat='.$cat['nome_cat'].'" class="s-text7">
									'.$cat['nome_cat'].'
								</a>
							</li>
							';
					}

				?>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Buscar
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Sobre nós
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Contrate-nos
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Retornar
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Ajuda
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Acompanhar pedido
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Retornar
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Remessa
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Boletim de notícias
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Inscreva-se
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018. todos os direitos reservados. | GM MODAS - Criando modas com a sua cara  <i class="fa fa-heart-o" aria-hidden="true"></i> DE <a href="https://colorlib.com" target="_blank">#ModasPraVc #ComVc</a>
			</div>
		</div>
	</footer>