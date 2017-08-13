<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title><?php echo bloginfo('name')?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '115812819060040',
      xfbml      : true,
      version    : 'v2.10'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
		<header class="default gradient">
 			<div class="container">
 				<h1 class="logo font-poppins"><a style="background-image: url('<?php echo get_template_directory_uri().'/img/logo.png' ?>')" href="<?php echo home_url(); ?>">Meu Casamento Ideal</a></h1>
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