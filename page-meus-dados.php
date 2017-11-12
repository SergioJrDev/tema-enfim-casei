<?php if(is_user_logged_in()) { ?>
	<?php get_header(); ?>
	 		<section class="space-default no-pad-top dashboard">
	 			<div class="container">
				<ul class="breadcrumb">
					<li><p>Você está em: </p></li>
					<li><a href="<?php echo home_url(); ?>">Início</a></li>
					<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Meus Dados</a></li>
				</ul>
	 				<h2 class=" title-descr tab-bottom font-poppins">Criação de site</h2>
	 				<?php $progress = get_user_meta(get_current_user_id())['pronto'][0]; ?>
	 				<?php if($progress == 1) { ?>
	 					<p class="alert alert-success a-center mg-boottom">
						 	<i class="fa fa-cog fa-spin fa-1x fa-fw" aria-hidden="true"></i>
							 Seu site está sendo criado. Em breve você receberá todos os dados de acesso.<br/>Se tiver alguma dúvida, por favor, entre em contato conosco pelo telefone ou email no rodapé do site.</p>
					<?php } ?>

					<?php if($progress == 3) { ?>
	 					<p class="alert alert-danger a-center mg-boottom">
							Seus 7 dias gratuitos acabaram, por favor, realize o pagamento para continuar usando nossos serviços.</p>
					<?php } ?>

					<?php if($progress == 4) { ?>
	 					<p class="alert alert-danger a-center mg-boottom">
							Não identificamos o seu pagamento, por favor, entre em contato conosco para continuar usando nosso serviço.</p>
					<?php } ?>

					<?php
						$paymentok = get_user_meta(get_current_user_id(), 'payment_success');
					?>

	 				<?php if($progress == 2) { ?>
	 					<p class="alert alert-success a-center mg-boottom">
						 	<!--<i class="fa fa-smile-o" aria-hidden="true"></i>-->
							 Seu site está pronto! Use as informações a baixo para acessa-lo. Lembre que você tem 7 dias de teste gratuitamente.</p>
					<?php } ?>

					<?php if($progress !== '1') { ?>
				 			<div data-show='1' class="dashboard-view active">
								<h2 class="font-poppins">Dados do meu site</h2>
								<div class="column">
									<div class="sm-12-12">
										<?php if(!$progress == 2) { ?>
										<div class="view-info mg-bottom model-group">
											<span class="title">Meus Modelos</span>
											<div class="model-list">
												<?php
													$args = array(
														'post_type' => 'modelos',
														'posts_per_page' => -1,
														'author' => get_current_user_id()
													);
													$query = new WP_Query($args);
													$i = 1;
													if($query->have_posts()) {
														while($query->have_posts()): $query->the_post();  ?>
															<div class="model-item">
																<a href="<?php the_permalink()?>"><?php echo 'Modelo '.$i; ?></a>
																<a href="<?php echo home_url('/meus-dados?del=').get_the_ID(); ?>" class="btn btn-danger float-right"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
															</div>
														<?php $i = $i + 1; endwhile;
													} else {
														echo '<p style="margin-bottom: 10px;">Você ainda não tem nenhum modelo. Que tal começar criando um?</p>';
													}
												?>
											</div>
											<a href="<?php echo home_url('/crie-seu-site') ?>" class="btn btn-theme btn-small btn-radius">Criar modelo</a>
										</div>
										<?php } ?>
									</div>
									<?php $url = get_field('url', 'user_'.get_current_user_id());
									if($url) { ?>
										<div class="sm-6-12">
											<div class="view-info">
												<span class="title">Endereço</span>
												<p><a target="_blank" href="<?php echo $url ?>"> <?php echo $url; ?></a></p>
											</div>
										</div>
									<?php }	?>

									<?php $admin = get_field('admin', 'user_'.get_current_user_id());
									if($admin) { ?>
										<div class="sm-6-12">
											<div class="view-info">
												<span class="title">Acesso ao painel do site</span>
												<p><a target="_blank" href="<?php echo $admin ?>"> <?php echo $admin; ?></a></p>
											</div>
										</div>
									<?php }	?>

									<?php $admin_user = get_field('admin_user', 'user_'.get_current_user_id());
									if($admin_user) { ?>
									<div class="sm-6-12">
										<div class="view-info">
											<span class="title">Login</span>
											<p><?php echo $admin_user; ?></p>
										</div>
									</div>
									<?php }	?>

									<?php $admin_pass = get_field('admin_pass', 'user_'.get_current_user_id());
									if($admin_pass) { ?>
									<div class="sm-6-12">
										<div class="view-info">
											<span class="title">Senha</span>
											<p><?php echo $admin_pass; ?></p>
										</div>
									</div>
									<?php }	?>

									<?php $modelo = get_field('modelo', 'user_'.get_current_user_id()); ?>
								</div>
							</div>	
						<?php } ?>

					<div class="column">
				 		<div class="sm-12-12">
						 <?php
							$customer_orders = get_posts( array(
								'numberposts' => -1,
								'meta_key'    => '_customer_user',
								'meta_value'  => get_current_user_id(),
								'post_type'   => wc_get_order_types(),
								'post_status' => array_keys( wc_get_order_statuses() ),
							) );
							
							if(count($customer_orders) > 0) { ?>
								<div data-show='1' class="dashboard-view active">
										<h2 class="font-poppins">Meu pedido</h2>
										<div class="column">
											<div class="sm-12-12">
												<table cellpadding="0" class="table table-stripped table-bordered">
													<thead>
														<tr>
															<td>Número do pedido</td>
															<td>Data</td>
															<td>Status</td>
														</tr>
													</thead>
													<tbody>
													<?php
		
														foreach ($customer_orders as $order) { ?>
															<tr>
																<th>#<?php echo $order->ID ?></th>
																<th><?php echo $order->post_date ?></th>
																<th>
																	<?php switch ($order->post_status) {
																	case 'wc-cancelled':
																		echo 'Cancelado';
																		$showAgain = true;
																		break;
																	case 'wc-on-hold':
																		echo 'Aguardando';
																		$showAgain = false;
																		break;
																	case 'wc-processing':
																		echo 'Processando';
																		$showAgain = false;
																		break;
																	case 'wc-pending':
																		$showAgain = true;
																		echo 'Pendente';
																		break;
																	case 'wc-refunded':
																		echo 'Falhou';
																		$showAgain = true;
																		break;
																	case 'wc-completed':
																		$data = array(
																			'user' => get_current_user_id(),
																			'order_id' => $order->ID,
																			'time' => $order->post_date
																		);
																		if(!get_user_meta(get_current_user_id(), 'payment_success')) {
																			update_user_meta( get_current_user_id(), 'payment_success', implode(',',$data) );
																		};
																		echo 'Concluido';
																		$showAgain = false;
																		break;
																	} ?>
																</th>
															</tr>
														<?php }
													?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
							<?php } ?>
							<?php // if($progress == 2 AND !$paymentok)
							if(!get_user_meta(get_current_user_id(), 'payment_success')) {
							 if($progress == 2 OR $showAgain == true )  { ?>
									<div data-show='1' class="dashboard-payment active">
										<h3 class="font-poppins">Pagamento</h3>
										<div class="column">
											<div class="sm-12-12">
												<div class="view-info payment mg-bottom model-group">
													<div class="payment-box column">
													<?php 
															$args = array(
																'post_type' => 'product',
																'posts_per_page' => 1,
															);
															$query = new WP_Query($args);
															$i = 1;
															if($query->have_posts()) {
																while($query->have_posts()): $query->the_post();  ?>
																	<div class="sm-6-12">
																		<img src="<?php the_post_thumbnail_url() ?>" alt="">
																	</div>	
																	<div class="sm-6-12">
																		<h2 class="font-poppins"><?php the_title() ?></h2>
																		<div class="payment-pricing pricing-details a-center">
																			<p class="old_price">de R$<?php echo get_field('_regular_price') ?></p>
																			<h2><span>Por</span>R$<?php echo get_field('_sale_price') ?><span>,00</span></h2>
																			<p class="strong"><span>em até 6x sem juros</span></p>
																			<?php $cart = WC()->cart->get_cart_contents_count(); ?>
																			<?php if($cart > 0 ) { ?>
																				<a href="http://localhost/caramelo/carrinho/" class="btn btn-theme">Fazer pagamento</a>
																			<?php } else { ?>
																				<a href="<?php echo home_url('/carrinho') ?>?add-to-cart=<?php echo get_the_ID(); ?>" class="btn btn-theme">Fazer pagamento</a>
																			<?php } ?>
																		</div>
																	</div>
																<?php $i = $i + 1; endwhile;
															};
														?>	
													</div>
												</div>
											</div>
		
										</div>
									</div>	
							<?php } } ?>
				 			<div data-show='1' class="dashboard-view active">
								<h2 class="font-poppins">Meus dados pessoais</h2>
								<div class="column">
									<?php $noiva = get_user_meta(get_current_user_id())['nome_noiva'][0]; ?>
									<div class="sm-6-12">
										<div class="view-info">
											<span class="title">Nome da noiva</span>
											<p><?php echo $noiva ? $noiva : '-'; ?></p>
										</div>
									</div>

									<?php $noivo = get_user_meta(get_current_user_id())['nome_noivo'][0]; ?>
									<div class="sm-6-12">
										<div class="view-info">
											<span class="title">Nome do noivo</span>
											<p><?php echo $noivo ? $noivo : '-'; ?></p>
										</div>
									</div>
									
									<?php $data_casamento = get_user_meta(get_current_user_id())['data_casamento'][0]; ?>
									<div class="sm-6-12">
										<div class="view-info">
											<span class="title">Data do casamento</span>
											<p><?php echo $data_casamento ? date('d/m/Y', strtotime($data_casamento)) : '-'; ?></p>
										</div>
									</div>

									<?php $email = get_userdata(get_current_user_id())->user_email; ?>
									<div class="sm-6-12">
										<div class="view-info">
											<span class="title">E-mail</span>
											<p><?php echo $email ? $email : '-'; ?></p>
										</div>
									</div>

									<?php $phone = get_user_meta( get_current_user_id(), 'billing_phone', true ); ?>
									<div class="sm-6-12">
										<div class="view-info">
											<span class="title">Telefone</span>
											<p><?php echo $phone ? $phone : '-'; ?></p>
										</div>
									</div>
									
								</div>
								<a href="<?php echo home_url('/meus-dados/atualizar-dados') ?>" class="btn btn-gray float-right"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								<!-- <a href="#" class="btn btn-danger float-right"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir minha conta</a> -->
								<div class="clearfix"></div>
							</div>	 
						</div>
					</div>			
	 			</div>
	 		</section>

	<?php get_footer(); ?>
<?php } else {
	wp_redirect(home_url('/login'));
	exit;
} ?>