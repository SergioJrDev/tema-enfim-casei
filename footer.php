		<footer class="space-default footer default">
			<div class="container">
				<div class="column">
					<div class="sm-3-12">
						<div class="footer-social footer-item">
							<h3 class="footer-title">Sobre o Meu Casamento Ideal</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ipsa doloremque dolores harum, numquam sed facere! Nisi molestiae ex animi delectus harum numquam deserunt atque! Distinctio maiores architecto minus, eos!</p>
						</div>
					</div>
					<div class="sm-3-12">
						<div class="footer-social footer-item">
							<h3 class="footer-title">Dúvidas frequentes</h3>
							<div class="icon">
								<a href="#">
									<i class="fa fa-github" aria-hidden="true"></i>
									/Sergioamjr
								</a>
							</div>
						</div>
					</div>
					<div class="sm-3-12">
						<div class="nav-footer  footer-item">
							<h3 class="footer-title">Mapa do Site</h3>
							<?php $let = array(
								'menu' => 'primary',
								// 'menu_class' => 'nav-list',
								'container' => 'nav',
								'container_class' => 'nav-content not-demo'
							);
							wp_nav_menu($let);
							?>
							<nav class="nav-content">
								<ul class="nav-list">
									<?php if(!is_user_logged_in()) { ?>
										<li><a href="<?php echo home_url('login'); ?>">Entrar</a></li>
									<?php } else { ?>
										<li><a href="<?php echo home_url('/meus-dados'); ?>">Meus dados</a></li>
										<li><a href="<?php echo wp_logout_url(home_url()); ?>">Sair</a></li>
									<?php } ?>
								</ul>
							</nav>
						</div>
					</div>
					<div class="sm-3-12">
						<div class="footer-social footer-item">
							<h3 class="footer-title">Entre em contato</h3>
							<div class="icon">
								<p>Mande um email para oi@meucasamentoideal.com.br</p>
								<p>Ou pelo whatsapp 11 94927-8243</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
 		<?php wp_footer(); ?>
	</body>
</html>

