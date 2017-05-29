<?php 


// Add Thumbnails
add_theme_support('post-thumbnails');

add_action('wp_head', 'registerJquery');

function registerJquery() {
	$jquery = array(
		'depends' => array(),
		'version' => '1.0',
		'in_footer' => true,
	);
if(	!file_exists(dirname( __FILE__ ).'/plugins/jquery.js')) {
		$jquery['dir'] = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js";
		$jquery['version'] = '3.1.0';
	} else {
		$jquery['dir'] = get_template_directory_uri().'/js/script.js';
	}

	echo wp_enqueue_script('jQuery', $jquery['dir'], $jquery['depends'],  $jquery['version'],$jquery['in_footer']);		
}

// Add scripts
add_action('wp_enqueue_scripts', 'loadScripts');
function loadScripts() {
$scripts = [
	'Script' => [
		'dir' =>  get_template_directory_uri().'/dist/js/script-min.js',
		'depends' => array('jQuery'),
		'version' => '1.0',
		'in_footer' => true,
 	],
	'AnimateCss' => [
		'dir' =>  get_template_directory_uri().'/plugins/scroll-animate/scroll-animate.js',
		'depends' => array('jQuery'),
		'version' => '1.0',
		'in_footer' => true,
 	],
	'owlCarousel' => [
		'dir' =>  get_template_directory_uri().'/plugins/owlcarousel/owl.carousel.min.js',
		'depends' => array('jQuery'),
		'version' => '1.0',
		'in_footer' => true,
 	],
	'formvalidation' => [
		'dir' =>  get_template_directory_uri().'/plugins/jquery-validation/jquery.validate.min.js',
		'depends' => array('jQuery'),
		'version' => '1.0',
		'in_footer' => true,
 	],
];

$styles = [
	'Style' => [
		'dir' => get_stylesheet_uri(),
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'Animate' => [
		'dir' => get_template_directory_uri().'/plugins/scroll-animate/scroll-animate.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'Styles' => [
		'dir' => get_template_directory_uri().'/dist/css/style.css',
		'depends' => '',
		'version' => '2',
		'in_footer' => false,
	],
	'hamburger' => [
		'dir' => get_template_directory_uri().'/plugins/hamburger.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'Font-Awesome' => [
		'dir' => get_template_directory_uri().'/plugins/font-awesome/css/font-awesome.min.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'Google-Fonts' => [
		'dir' => 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Montserrat:300,400,500|Poppins:600,700|Ubuntu:400,700|Dancing+Script:400,700|Petit+Formal+Script',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'OwlCarouselCss' => [
		'dir' => get_template_directory_uri().'/plugins/owlcarousel/assets/owl.carousel.min.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'OwlCarouselTheme' => [
		'dir' => get_template_directory_uri().'/plugins/owlcarousel/assets/owl.theme.default.min.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
];


	if($scripts) {
		foreach($scripts as $key => $script) {
			echo wp_enqueue_script($key, $script['dir'], $script['depends'],  $script['version'],$script['in_footer']);
		}
	}

	if($styles) {
		foreach($styles as $key => $style) {
			echo wp_enqueue_style($key, $style['dir'], $style['depends'],  $style['version'],$style['in_footer']);
		}
	}
};

add_action('wp_head', 'configHead');
function configHead() {
	$configs = array(
		'charset' => "<meta charset='UTF-8'>",
		'viewport' => "<meta name='viewport' content='width=device-width'>",
	);

	foreach($configs as $config) {
		echo $config . "\n";
	}
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


// Add Menu
add_action( 'after_setup_theme', 'registerMenu' );
function registerMenu() {
  register_nav_menu( 'primary', __( 'Menu principal', 'theme-slug' ) );
};

// Post Type
require dirname( __FILE__ ).'/includes/post_type.php';

// SEO
require dirname( __FILE__ ).'/includes/seo_function.php';

// Length dos posts
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// Cria o modelo
add_action('init', 'createModel');
function createModel() {
	if(isset($_REQUEST['createPage'])) {
		$header = $_REQUEST['header'];
		$casal = $_REQUEST['casal'];
		$local = $_REQUEST['local'];
		$rsvp = $_REQUEST['rsvp'];
		$contagem = $_REQUEST['contagem'];
		$fotos = $_REQUEST['fotos'];
		$recados = $_REQUEST['recados'];
		$blog = $_REQUEST['blog'];
		$noiva = $_REQUEST['noiva'];
		$noivo = $_REQUEST['noivo'];

		$args = array(
			'post_title' => get_current_user_id().'-'.$noiva.'-e-'.$noivo,
			'post_type' => 'modelos',
			'post_status' => 'publish',
			'post_content' => 'Teste Ttete',
		);
		$post_id = wp_insert_post( $args );
		$fields = array(
					'header' => $header,
					'noivos' => $casal,
					'local' => $local,
					'rsvp' => $rsvp,
					'contagem' => $contagem,
					'galeria_de_fotos' => $fotos,	
					'recados' => $recados,
					'blog' => $blog,
					'nome_do_noivo' => $noivo,
					'nome_da_noiva' => $noiva,
					'modelo' => get_permalink($post_id)
				);

		foreach ($fields as $key => $value) {
			update_field($key, $value, $post_id);
			update_post_meta($post_id, $key, $value);
		}
		wp_redirect(get_permalink($post_id));
		exit;	
	}
}

// Cria o site
add_action('init', 'createSite');
function createSite() {
	if(isset($_REQUEST['create_site'])) {
		$post_id = $_REQUEST['create_site'];
		$author = get_post($post_id)->post_author;

		if(get_current_user_id() == $author) {
			$header = get_post_meta($post_id, 'header')[0];
			$casal = get_post_meta($post_id, 'noivos')[0];
			$local = get_post_meta($post_id, 'local')[0];
			$rsvp = get_post_meta($post_id, 'rsvp')[0];
			$contagem = get_post_meta($post_id, 'contagem')[0];
			$fotos = get_post_meta($post_id, 'galeria_de_fotos')[0];
			$recados = get_post_meta($post_id, 'recados')[0];
			$blog = get_post_meta($post_id, 'blog')[0];
			$noiva = get_post_meta($post_id, 'nome_da_noiva')[0];
			$noivo = get_post_meta($post_id, 'nome_do_noivo')[0];


			$args = array(
				'post_title' => get_current_user_id().'-'.$noiva.'-e-'.$noivo,
				'post_type' => 'pedidos',
				'post_status' => 'publish',
			);

			$new_post_id = wp_insert_post( $args );

			$fields = array(
						'header' => $header,
						'noivos' => $casal,
						'local' => $local,
						'rsvp' => $rsvp,
						'contagem' => $contagem,
						'galeria_de_fotos' => $fotos,	
						'recados' => $recados,
						'blog' => $blog,
						'nome_do_noivo' => $noivo,
						'nome_da_noiva' => $noiva,
						'modelo' => get_permalink($post_id)
					);

			foreach ($fields as $key => $value) {
				update_field($key, $value, $new_post_id);
				update_post_meta($new_post_id, $key, $value);
			}
			wp_redirect(home_url('/meus-dados?create=1'));
			exit;
		} else {
			echo 'No no';
		}	
	}
}


// Delete modelo
add_action('init', 'deletePost');

function deletePost() {
	if(isset($_GET['del'])) {
		$post = $_GET['del'];
		$author = get_post($post)->post_author;
		if(get_current_user_id() == $author) {
			wp_delete_post($post);
		};
	}
}

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);

	}
}

function returnError($check = null, $error) {
	if($check != null) {
		$GLOBALS['errors'] = $error;
	}
}

// Criar conta
add_action('init', 'createAccount');

function createAccount() {
	if(isset($_REQUEST['createAccount'])) {
		$nome = $_REQUEST['user_name'];
		$email = $_REQUEST['user_email'];
		$senha = $_REQUEST['user_pass'];
		$resenha = $_REQUEST['user_repass'];
		$nome_da_noiva = $_REQUEST['nome_da_noiva'];
		$nome_do_noivo = $_REQUEST['nome_do_noivo'];
		$post_created = $_REQUEST['post_created'];
		$errors = [];

		if(empty($nome)) {
			$errors[] = 'Digite seu nome';
			
		}

		if(!is_email($email)) {
			$errors[] = 'Digite um e-mail valido';
			
		}

		if(empty($senha) || strlen($senha) < 6) {
			$errors[] = 'Digite um senha com no mínimo 6 caracteres.';
		} else if($senha != $resenha) {
			$errors[] = 'Senhas diferentes. Verifique a confirmação da sua senha.';
		}

		if(email_exists($email)) {
			$errors[] = 'E-mail já registrado. Esqueceu sua senha?';
		}

		if(count($errors) == 0) {
	 		$id_user = wp_create_user($email, $senha, $email );
	 		update_field('nome_da_noiva', $nome_da_noiva, 'user_'.$id_user);
	 		update_field('nome_do_noivo', $nome_do_noivo, 'user_'.$id_user);

	 		if($post_created) {
				wp_update_post(array('ID' => $post_created, 'post_author' => $id_user));
	 		}

			$info = array();
			$info['user_login'] = $email;
			$info['user_password'] = $senha;
			$info['remember'] = true;

			$user_signon = wp_signon($info, false);
			wp_redirect(home_url('/meus-dados'));
			exit;
		} else {
			returnError(1, $errors);
		}
	}
}

// Login
add_action('init', 'makeLogin');
function makeLogin() {
	if(isset($_REQUEST['make-login'])) {
		$email = $_REQUEST['email'];
		$senha = $_REQUEST['pass'];
		$front = $_REQUEST['in-front'];
		$errors = [];

		$info = array();
		$info['user_login'] = $email;
		$info['user_password'] = $senha;
		$info['remember'] = true;

		$user_signon = wp_signon($info, false);
	
		if (!is_wp_error($user_signon)) {
			wp_redirect(home_url('/meus-dados'));
			exit;
		} else {
			if($front) {
				wp_redirect(home_url('/login?e=1'));
				exit;
			} else {
				$errors[] = "E-mail ou senha inválidos. Por favor, confirme seus dados e tente novamente.";
				returnError(1, $errors);
			}
		}
	}
}

?>