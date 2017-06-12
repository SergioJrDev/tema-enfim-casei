<?php get_header(); ?>

 		<section class="no-pad-top dashboard">
 			<div class="container">
			<ul class="breadcrumb">
				<li><p>Você está em: </p></li>
				<li><a href="<?php echo home_url(); ?>">Início</a></li>
				<li><a href="<?php echo home_url('/meus-dados'); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Meus Dados</a></li>
				<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Atualizar Meus Dados</a></li>
			</ul>
 				<h2 class=" title-descr tab-bottom font-poppins">Atualizar meus dados</h2>
 			</div>
 		</section>
 		<section class="mg-bottom">
 			<div class="container max-width-content">
				 <?php if($_GET['success']) { ?>
				 	<div class="alert a-center animate delay to-top alert-success">
			 			<p class="">Dados salvos com sucesso.</p>
					</div>
				 <?php } ?>
 				<form class="form bordered" method="post">
					<div class="column">
						<div class="sm-12-12">
							<div class="input-group">
								<label class="label"  for="user_name">Seu nome</label>
								<input type="text" value="<?php echo get_userdata(get_current_user_id())->first_name; ?>" class="input inline" id="user_name" name="user_name">
							</div>
						</div>
						<!--<div class="sm-6-12">
							<div class="input-group">
								<label class="label"  for="user_email">E-mail</label>
								<input type="email"  value="<?php echo get_userdata(get_current_user_id())->user_email; ?>" class="input inline" id="user_email" name="user_email">
							</div>
						</div>-->
						<div class="sm-6-12">
							<div class="input-group">
								<label class="label"  for="user_phone">Telefone</label>
								<input type="text"  value="<?php echo get_user_meta( get_current_user_id(), 'billing_phone', true ); ?>" class="input inline" id="user_phone" name="user_phone">
							</div>
						</div>
						<div class="sm-6-12">
							<div class="input-group">
								<label class="label"  for="nome_noiva">Nome da Noiva</label>
								<input type="text"  value="<?php echo get_user_meta(get_current_user_id())['nome_noiva'][0]; ?>" class="input inline" id="nome_noiva" name="nome_noiva">
							</div>
						</div>
						<div class="sm-6-12">
							<div class="input-group">
								<label class="label"  for="nome_noivo">Nome do Noivo</label>
								<input type="text"  value="<?php echo get_user_meta(get_current_user_id())['nome_noivo'][0]; ?>" class="input inline" id="nome_noivo" name="nome_noivo">
							</div>
						</div>
						<div class="sm-6-12">
							<div class="input-group">
								<label class="label"  for="data_casamento">Data do casamento</label>
								<input type="date"  value="<?php echo get_user_meta(get_current_user_id())['data_casamento'][0]; ?>" class="input inline" id="data_casamento" name="data_casamento">
							</div>
						</div>
					</div>
					<input type="hidden" name="updateUser" value="1">
					<button type="submit" class="btn btn-theme btn-uppercase">Atualizar</button>
 				</form>
 				<!-- <a href="#">Trocar minha senha</a> -->
 			</div>
 		</section>

<?php get_footer(); ?>