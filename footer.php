		<footer class="space-default footer default">
			<div class="container">
				<div class="column">
					<div class="sm-3-12">
						<div class="footer-social footer-item">
							<h3 class="footer-title">Sobre o Meu Casamento Ideal</h3>
							<p>O Meu Casamento Ideal foi criado e é mantido apenas por uma pessoa, para oferecer sites de casamento elegantes, modernos e com o preço justo, para um dos momentos mais importantes da sua vida.</p>
						</div>
					</div>
					<div class="sm-3-12">
						<div class="footer-social footer-item">
							<h3 class="footer-title">Dúvidas e Suporte</h3>
							<div class="icon">
								<a href="<?php echo home_url('/duvidas-frequentes') ?>">Fale Conosco</a>
								<a href="<?php echo home_url('/duvidas-frequentes') ?>">Dúvidas Frequentes</a>
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
								<p>Mande um email para oi@meucasamentoideal.com.br Ou pelo whatsapp 11 94927-8243</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
 		<?php wp_footer(); ?>
	</body>
</html>

