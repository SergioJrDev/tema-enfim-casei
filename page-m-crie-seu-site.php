<?php get_header(); ?>
<section class="space-default no-pad-top featured">
	<div class="container">
		<div id="demo"></div>
		<ul class="breadcrumb">
			<li><p>Você está em: </p></li>
			<li><a href="<?php echo home_url(); ?>">Início</a></li>
			<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Crie seu site</a></li>
		</ul>
		<h2 class=" title-descr tab-bottom font-poppins">Crie o modelo do seu site</h2>
		<form class="form" id="create_model" method="post">
			<div class="mg-bottom ">
				<?php
				$noiva = get_user_meta(get_current_user_id())['nome_noiva'][0];
				$noivo = get_user_meta(get_current_user_id())['nome_noivo'][0];
				?>
		

				<p>Escolha o modelo do seu site. As imagens e textos você poderá trocar depois quando ele estiver pronto.</p>
				<div class=" main_slider components mg-bottom header_s">
					<div class="controlls">
						<a href="#" data-group="header_s" class="header_s_a disabled a-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
						<a href="#" data-group="header_s" class="header_s_a a-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>
					<div data-order="1" class="pos-right header_s_item header_s_1 actived">
						<input type="radio" class="hidden" name="header" value="1">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/header1.jpg">
					</div>
					<div data-order="2" class="absolute pos-right header_s_item header_s_2">
						<input type="radio" class="hidden" name="header" value="2">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/header2.jpg">
					</div>
					<div data-order="3" class="absolute pos-right header_s_item header_s_3">
						<input type="radio" class="hidden" name="header" value="3">
							<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/header3.jpg">
					</div>
					<div data-order="4" class="absolute pos-right header_s_item header_s_4">
						<input type="radio" class="hidden" name="header" value="4">
							<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/header4.jpg">
					</div>
					
				</div>
				<h2 class="component-title">Os noivos</h2>
				<div class=" main_slider components couple noivos_s">	
					<div class="controlls">
						<a href="#" data-group="noivos_s" class="noivos_s_a disabled a-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
						<a href="#" data-group="noivos_s" class="noivos_s_a a-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>
					<div data-order="1" class="pos-right noivos_s_item actived">
						<input type="radio" class="hidden" name="casal" value="1">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/noivos1.jpg">
					</div>
					<div data-order="2" class="absolute pos-right noivos_s_item">
						<input type="radio" class="hidden" name="casal" value="2">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/noivos2.jpg">
					</div>
					<div data-order="3" class="absolute pos-right noivos_s_item">
						<input type="radio" class="hidden" name="casal" value="3">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/noivos3.jpg">
					</div>
					<div data-order="4" class="absolute pos-right noivos_s_item">
						<input type="radio" class="hidden" name="casal" value="4">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/noivos4.jpg">
					</div>
					<div data-order="5" class="absolute pos-right noivos_s_item">
						<input type="radio" class="hidden" name="casal" value="5">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/noivos5.jpg">
					</div>
				</div>

				<h2 class="component-title">Locais</h2>
				<div class="space-bottom">
					<div class=" main_slider components local_s">
						<div class="controlls">
							<a href="#" data-group="local_s" class="local_s_a disabled a-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
							<a href="#" data-group="local_s" class="local_s_a a-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</div>
						<div data-order="1" class="pos-right local_s_item actived">
							<input type="radio" class="hidden" name="local" value="1">
							<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/eventos1.jpg">
						</div>
						<div data-order="2" class="absolute local_s_item pos-right">
							<input type="radio" class="hidden" name="local" value="2">
							<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/eventos2.jpg">
						</div>
						<div data-order="3" class="absolute local_s_item pos-right">
							<input type="radio" class="hidden" name="local" value="3">
							<img class="img-mobil" src="<?php echo get_template_directory_uri(); ?>/img/mobile/eventos3.jpg">
						</div>
					</div>
				</div>

				<h2 class="component-title">Contagem regressiva</h2>
				<div class=" main_slider components space-bottom timer_s">	
					<div class="controlls">
						<a href="#" data-group="timer_s" class="timer_s_a disabled a-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
						<a href="#" data-group="timer_s" class="timer_s_a a-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>
					<div data-order="1" class="timer_s_item pos-right actived">
						<input type="radio" class="hidden" name="contagem" value="1">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/contagem1.jpg">
					</div>
					<div data-order="2" class="timer_s_item absolute pos-right">
						<input type="radio" class="hidden" name="contagem" value="2">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/contagem2.jpg">
					</div>
					<div data-order="3" class="timer_s_item absolute pos-right">
						<input type="radio" class="hidden" name="contagem" value="3">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/contagem3.jpg">
					</div>
					<div data-order="4" class="timer_s_item absolute pos-right">
						<input type="radio" class="hidden" name="contagem" value="4">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/contagem4.jpg">
					</div>
					<div data-order="5" class="timer_s_item absolute pos-right">
						<input type="radio" class="hidden" name="contagem" value="5">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/contagem5.jpg">
					</div> 
					<div data-order="6" class="timer_s_item absolute pos-right">
						<input type="radio" class="hidden" name="contagem" value="6">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/contagem6.jpg">
					</div>
				</div>
				
				<h2 class="component-title">Confirmação de presença</h2>
				<div class="space-bottom">
					<div class=" main_slider components rsvp_s">
						<div class="controlls">
							<a href="#" data-group="rsvp_s" class="rsvp_s_a disabled a-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
							<a href="#" data-group="rsvp_s" class="rsvp_s_a a-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</div>
						<div data-order="1" class="rsvp_s_item pos-right actived">
							<input type="radio" class="hidden" name="rsvp" value="1">
							<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/rsvp1.jpg">
						</div>
						<div data-order="2" class="rsvp_s_item absolute pos-right">
							<input type="radio" class="hidden" name="rsvp" value="2">
							<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/rsvp2.jpg">
						</div>
						<div data-order="3" class="rsvp_s_item absolute pos-right">
							<input type="radio" class="hidden" name="rsvp" value="3">
							<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/rsvp3.jpg">
						</div>
					</div>
				</div>

				<!-- <h3 class="components-title">Galeria de Foto</h3> -->
				<h2 class=" component-title">Galeria de Fotos</h2>
				<div class=" main_slider components mg-bottom fotos_s">
					<div class="controlls">
						<a href="#" data-group="fotos_s" class="fotos_s_a disabled a-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
						<a href="#" data-group="fotos_s" class="fotos_s_a a-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>
					<div data-order="1" class="fotos_s_item pos-right actived">
						<input type="radio" class="hidden" name="fotos" value="1">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/fotos1.jpg">
					</div>

					<div data-order="2" class="absolute fotos_s_item pos-right">
						<input type="radio" class="hidden" name="fotos" value="2">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/fotos2.jpg">
					</div>

					<div data-order="3" class="absolute fotos_s_item pos-right">
						<input type="radio" class="hidden" name="fotos" value="3">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/fotos3.jpg">
					</div>


					<div data-order="4" class="absolute fotos_s_item pos-right">
						<input type="radio" class="hidden" name="fotos" value="4">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/fotos4.jpg">
					</div>
					
				</div>
					<h2 class="component-title">Página de Recados</h2>
					<div class=" main_slider components mg-bottom recados_s">
						<div class="controlls">
							<a href="#" data-group="recados_s" class="recados_s_a disabled a-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
							<a href="#" data-group="recados_s" class="recados_s_a a-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</div>
						<div data-order="1" class="recados_s_item pos-right actived">
							<input type="radio" class="hidden" name="recados" value="1">
							<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/recados1.jpg">
						</div>
						<div data-order="2" class="absolute recados_s_item pos-right">
							<input type="radio" class="hidden" name="recados" value="2">
							<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/recados2.jpg">
						</div>
						<div data-order="3" class="absolute recados_s_item pos-right">
							<input type="radio" class="hidden" name="recados" value="3">
							<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/recados3.jpg">
						</div>
						<div data-order="4" class="absolute recados_s_item pos-right">
							<input type="radio" class="hidden" name="recados" value="4">
							<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/recados4.jpg">
						</div>
					</div>
				</div>

				<h2 class="component-title">Blog do casal</h2>
				<div class=" main_slider components blog_s">
					<div class="controlls">
						<a href="#" data-group="blog_s" class="blog_s_a disabled a-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
						<a href="#" data-group="blog_s" class="blog_s_a a-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>
					<div data-order="1" class="blog_s_item pos-right actived">
						<input type="radio" class="hidden" name="blog" value="1">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/blog1.jpg">
					</div>
					<div data-order="2" class="blog_s_item absolute pos-right">
						<input type="radio" class="hidden" name="blog" value="2">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/blog2.jpg">
					</div>
					<div data-order="3" class="blog_s_item absolute pos-right">
						<input type="radio" class="hidden" name="blog" value="3">
						<img class="img-mobil " src="<?php echo get_template_directory_uri(); ?>/img/mobile/blog4.jpg">
					</div>
				</div>
				<input type="hidden" value="1" name="createPage">
			</div>
			<div class="mg-bottom ">
				<p class="mg-bottom">Agora confirme o nome da noiva e do noivo.</p>
				<div class="max-width-content form bordered">
					<div class="column">
						<div class="sm-12-12">
							<div class="input-group">
								<label class="label">Nome da noiva</label>
								<input type="text" class="input" name="noiva" value="<?php echo $noiva ?>">
							</div>
							<div class="input-group">
								<label class="label">Nome do noivo</label>
								<input type="text" class="input" name="noivo"  value="<?php echo $noivo ?>">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="a-center">
				<button type="submit" class="btn btn-theme btn-big btn-uppercase submit">Visualizar modelo</button>
				<div class="lds-css ng-scope">
				<div class="lds-spinner" style="100%;height:100%"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>	
			</div>
		</form>
	</div>
</section>
<?php get_footer(); ?>