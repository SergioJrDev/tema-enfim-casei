<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title><?php echo bloginfo('name')?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="default gradient">
 			<div class="container">
 				<h1 class="logo font-poppins"><a href="<?php echo home_url(); ?>">Digital Wedding</a></h1>
 				<div class="nav">
 					<button class="hamburger hamburger--collapse" type="button">
 					  <span class="hamburger-box">
 					    <span class="hamburger-inner"></span>
 					  </span>
 					</button>
 					<div class="clearfix"></div>
 					<div class="clearfix"></div>
						<?php $let = array(
							'menu' => 'primary',
							'menu_class' => 'nav-list',
							'container' => 'nav',
							'container_class' => 'nav-content'
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
 		</header>
	<?php /*
		<header class="mg-bottom default">
 			<div class="container">
 				<a href="<?php echo home_url(); ?>"><h1 class="logo">Caramelo Cósmico</h1></a>
 				<div class="nav">
 					<button class="hamburger hamburger--collapse" type="button">
 					  <span class="hamburger-box">
 					    <span class="hamburger-inner"></span>
 					  </span>
 					</button>
 					<div class="clearfix"></div>
						<?php $let = array(
							'menu' => 'primary',
							'menu_class' => 'nav-list',
							'container' => 'nav',
							'container_class' => 'nav-content'
						);
						wp_nav_menu($let);
						?>

 				</div>
 			</div>
 		</header>
		 */
		?> 