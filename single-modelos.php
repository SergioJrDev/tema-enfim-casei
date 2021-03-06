<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="change-color">
			<p>Escolha a cor do seu site</p>
			<div class="colors-holder">
				<a data-color="#0B90AA" href="#" style="background-color: #0B90AA" class="red color"></a>
				<a data-color="#1abc9c" href="#" style="background-color: #1abc9c" class="blue color"></a>
				<a data-color="#38bbff" href="#" style="background-color: #38bbff" class="red color"></a>
				<a data-color=" #B2998E" href="#" style="background-color:  #B2998E" class="red color"></a>
				
				<a data-color=" #F65676" href="#" style="background-color:  #F65676" class="red color"></a>
				<a data-color="#34495e" href="#" style="background-color: #34495e" class="blue color"></a>
				<a data-color="#e74c3c" href="#" style="background-color: #e74c3c" class="yellow color"></a>
				<a data-color="#248888" href="#" style="background-color: #248888" class="red color"></a>
			</div>
		</div>
		<?php
			$noivo = get_post_meta(get_the_ID(), 'nome_noivo')[0];
			$noiva = get_post_meta(get_the_ID(), 'nome_noiva')[0];
			if(get_field('header') || get_post_meta(get_the_ID(), 'header')[0]) {
				$header = get_post_meta(get_the_ID(), 'header')[0];
				if($header == 1) { ?>
					<section class="main auto-h apresentation overlay">
						<header class="default transparent">
				 			<div class="container">
				 				<h1 class="logo"></h1>
				 				<div class="nav">
				 					<button class="demo hamburger hamburger--collapse" type="button">
				 					  <span class="hamburger-box">
				 					    <span class="hamburger-inner"></span>
				 					  </span>
				 					</button>
				 					<div class="clearfix"></div>
				 					<nav class="nav-content demo_nav">
				 						<ul class="nav-list">
				 							<li><a href="#" class="menu_active_demo">Início</a></li>
				 							<li><a href="#">Local</a></li>
				 							<li><a href="#">RSVP</a></li>
				 							<li><a href="#">Contato</a></li>
				 						</ul>
				 					</nav>
				 				</div>
				 			</div>
				 		</header>
						<div class="container">
							<div class="descr">
								<h2 class="font-petit a-center lines names"><?php echo $noiva ?> <span class="break font-petit">&</span> <?php echo $noivo ?></h2>
								<h3 class="font-petit date a-center">10 de Dezembro de 2018, São Paulo</h3>
							</div>
							<div class="down a-center">
								<i class="fa fa-angle-down" aria-hidden="true"></i>
							</div>
						</div>
					</section>
				<?php }
				if($header == 2) { ?>
					<section class="main auto-h apresentation overlay bg-number-2">
						<header class="default transparent centered bottom">
				 			<div class="container">
				 				<h1 class="logo"></h1>
				 				<div class="nav">
				 					<button class="demo hamburger hamburger--collapse" type="button">
				 					  <span class="hamburger-box">
				 					    <span class="hamburger-inner"></span>
				 					  </span>
				 					</button>
				 					<div class="clearfix"></div>
				 					<nav class="nav-content demo_nav">
				 						<ul class="nav-list">
				 							<li><a href="#" class="menu_active_demo">Início</a></li>
				 							<li><a href="#">Local</a></li>
				 							<li><a href="#">RSVP</a></li>
				 							<li><a href="#">Contato</a></li>
				 						</ul>
				 					</nav>
				 				</div>
				 			</div>
				 		</header>
						<div class="container">
							<div class="descr">
								<p class="style_font top-title a-center">Bem vindo a celebração do casamento de...</p>
								<h2 class="names a-center"><?php echo $noiva ?> <i class="break fa fa-heart-o" aria-hidden="true"></i> <?php echo $noivo ?></h2>
							</div>
						</div>
					</section>
				<?php }
				if($header == 3) { ?>
					<section class="main auto-h apresentation overlay bg-number-3">
						<header class="default transparent">
				 			<div class="container">
				 				<h1 class="logo"></h1>
				 				<div class="nav">
				 					<button class="demo hamburger hamburger--collapse" type="button">
				 					  <span class="hamburger-box">
				 					    <span class="hamburger-inner"></span>
				 					  </span>
				 					</button>
				 					<div class="clearfix"></div>
				 					<nav class="nav-content demo_nav">
				 						<ul class="nav-list">
				 							<li><a href="#" class="menu_active_demo">Início</a></li>
				 							<li><a href="#">Local</a></li>
				 							<li><a href="#">RSVP</a></li>
				 							<li><a href="#">Contato</a></li>
				 						</ul>
				 					</nav>
				 				</div>
				 			</div>
				 		</header>
						<div class="container">
							<div class="descr">
								<h2 class="a-center names style_font"><?php echo $noiva ?></h2>
								<h2 class="a-center names style_font">&</h2>
								<h2 class="a-center names style_font"><?php echo $noivo ?></h2>
							</div>
							<div class="down a-center">
								<i class="fa fa-angle-down" aria-hidden="true"></i>
							</div>
						</div>
					</section>
				<?php }
				if($header == 4) { ?>
					<section class="main auto-h apresentation overlay bg-number-4">
						<header class="default transparent vertical">
				 			<div class="container">
				 				<div class="nav">
				 					<button class="demo hamburger hamburger--collapse" type="button">
				 					  <span class="hamburger-box">
				 					    <span class="hamburger-inner"></span>
				 					  </span>
				 					</button>
				 					<div class="clearfix"></div>
				 					<nav class="nav-content demo_nav">
				 						<ul class="nav-list">
				 							<li class="a-right"><a href="#" class="menu_active_demo">Início</a></li>
				 							<li class="a-right"><a href="#">Local</a></li>
				 							<li class="a-right"><a href="#">RSVP</a></li>
				 							<li class="a-right"><a href="#">Contato</a></li>
				 						</ul>
				 					</nav>
				 				</div>
				 			</div>
				 		</header>
						<div class="container">
							<div class="descr">
								<p class=" rotate a-left style_font">Bem vindo ao melhor dia de nossas vidas...</p>
								<h2 class="names rotate a-left style_font">Nosso casamento!</h2>
							</div>
							<div class="down a-center">
								<i class="fa fa-angle-down" aria-hidden="true"></i>
							</div>
						</div>
					</section>
				<?php }
			}

			if(get_field('noivos') || get_post_meta(get_the_ID(), 'noivos')) {
				$noivos = get_post_meta(get_the_ID(), 'noivos')[0];
				if($noivos == 1) { ?>
					<div class="container max-width-content">
						<div class="column space-default">
							<div class="sm-12-12 ">
								<h2 class="a-center font-dancing section-title color_demo">Os Noivos</h2>
								<div class="couple-item couple">
									<div class="couple-img circle-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/couple/2.jpg')">
										<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/couple/2.jpg" alt="">
									</div>
									<div class="a-center space-title">
										<p class="font-dancing couple-name"><?php echo $noiva ?> & <?php echo $noivo ?></p>
									</div>
								</div>
							</div>
							<div class="sm-6-12  ">
								<div class="couple-item couple">
									<h2>Nossa História</h2>
									<p class="font-montserrrat">Eu conheci meu namorado quando tinha seis anos. Ele era colega da minha irmã. Fomos em aniversários um do outro, nossas mães conversavam e etc, mas depois ele pulou uma série e mais tarde trocou de colégio.</p>
									<p class="font-montserrrat">Um belo dia estava almoçando com conhecidos na rua da minha universidade, eis que um moço senta na nossa mesa e de repente começa a falar: "Elisa, eu não sei se tu lembra de mim, era colega da tua irmã" e blábláblá. Foi uma surpresa! Depois disso começamos a conversar. Nunca imaginei que fosse namorar uma pessoa que conheci quinze anos atrás.</p>
								</div>
							</div>
							<div class="sm-6-12  ">
								<div class="couple-item couple">
									<h2>O pedido</h2>
									<p class="font-montserrrat">Meu então namorado tinha combinado para que uma amiga artista estivesse na feira de agricultores que sempre visitamos. Então, para darmos uma força a ela (eu pensei), pedimos que ela fizesse um desenho nosso. Quando ela se virou para me mostrar o desenho pronto, ele estava desenhado de joelhos! Eu fiquei muito surpresa!</p>
									<p class="font-montserrrat">Eu adorei que ele já tivesse combinado com alguém para tirar fotos do momento. O desenho está emoldurado agora e é um lembrete incrível daquele dia especial!</p>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<?php if($noivos == 2) { ?>
					<div class="container max-width-content">
						<div class="space-default">
							<div class="space-default container max-width-content">
								<h2 class="a-center font-dancing section-title color_demo">Os Noivos</h2>
								<div class="column">
									<div class="sm-6-12 ">
										<div class="couple-item couple">
											<div class="couple-img circle-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/couple/bride.jpg')">
												<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/couple/bride.jpg" alt="">
											</div>
											<p class="font-montserrrat font-dancing no-mg-bottom couple-name a-center space-title"><?php echo $noiva ?></p>
											<span class="write-by font-dancing a-center">Escrito pelo noivo</span>
											<p class="font-montserrrat a-center max-width">Desde quando conheci a Natália, eu soube que ela era a pessoa certa para mim, que eu gostaria de passar o resto de nossas vidas juntos. Estar com ela foi a melhor coisa que me aconteceu e hoje sou a pessoa mais feliz do mundo por casar com ela.</p>
										</div>
									</div>
									<div class="sm-6-12 ">
										<div class="couple-item couple">
											<div class="couple-img circle-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/couple/groom.jpg')">
												<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/couple/groom.jpg" alt="">
											</div>
											<p class="font-montserrrat font-dancing no-mg-bottom couple-name a-center space-title"><?php echo $noivo ?></p>
											<span class="write-by font-dancing a-center ">Escrito pela noiva</span>
											<p class="font-montserrrat a-center max-width">Me faltam palavras pra descrever o Sérgio, ele é carinhoso, romântico, dedicado, meu melhor amigo e o amor da minha vida. Não consigo imaginar um dia longe dele e quero fazê-lo muito feliz, assim como ele me faz, pelo resto da minha vida.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<?php if($noivos == 3) { ?>
					<div class="container max-width-content">
						<div class="space-default">
							<div class="couple-item couple space-default single-col container max-width-content">
								<h2 class="a-center font-dancing section-title color_demo">Os Noivos</h2>
								<div class="couple-img circle-img   " style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/couple/1.jpg')">
									<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/couple/bride.jpg" alt="">
								</div>
								<p class="   font-dancing couple-name a-center space-title"><?php echo $noiva ?> & <?php echo $noivo ?></p>
								<div class="a-center">
										<p class="font-montserrrat center">Eu conheci meu namorado quando tinha seis anos. Ele era colega da minha irmã. Fomos em aniversários um do outro, nossas mães conversavam e etc, mas depois ele pulou uma série e mais tarde trocou de colégio.</p>
										<p class="font-montserrrat center">Um belo dia estava almoçando com conhecidos na rua da minha universidade, eis que um moço senta na nossa mesa e de repente começa a falar: "Elisa, eu não sei se tu lembra de mim, era colega da tua irmã" e blábláblá. Foi uma surpresa! Depois disso começamos a conversar. Nunca imaginei que fosse namorar uma pessoa que conheci quinze anos atrás.</p>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<?php if($noivos == 4) { ?>
					<div class="container max-width-content">
						<div class="space-default">
							<div class="couple under-other single-col container max-width-content">
								<h2 class="a-center font-dancing section-title color_demo">Os Noivos</h2>
								<div class="couple-item couple img-holder">
									<div class="   couple-img circle-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/couple/bride_1.jpg')">
										<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/couple/bride.jpg" alt="">
									</div>
									<div class="   couple-img circle-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/couple/groom_1.jpg')">
										<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/couple/groom.jpg" alt="">
									</div>
								</div>
								<div class="a-center   space-title">
									<p class="font-dancing couple-name"><?php echo $noiva ?> & <?php echo $noivo ?></p>
								</div>
								<div class="couple-item couple a-center  ">
									<p class="font-montserrrat">Eu conheci meu namorado quando tinha seis anos. Ele era colega da minha irmã. Fomos em aniversários um do outro, nossas mães conversavam e etc, mas depois ele pulou uma série e mais tarde trocou de colégio.</p>
									<p class="font-montserrrat">Um belo dia estava almoçando com conhecidos na rua da minha universidade, eis que um moço senta na nossa mesa e de repente começa a falar: "Elisa, eu não sei se tu lembra de mim, era colega da tua irmã" e blábláblá. Foi uma surpresa! Depois disso começamos a conversar. Nunca imaginei que fosse namorar uma pessoa que conheci quinze anos atrás.</p>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<?php if($noivos == 5) { ?>
					<div class="couple space-default block">
						<div class="container max-width-content">
							<h2 class="a-center font-dancing section-title color_demo ">Os Noivos</h2>
							<div class="column">
								<div class="sm-6-12 ">
									<div class="couple-item">
										<div class="couple-img " style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/couple/bride.jpg')">
											<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/couple/bride.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="sm-6-12 ">
									<div class="couple-item a-ceter">
										<p class="font-dancing couple-name"><?php echo $noiva ?></p>
										<span class="write-by font-dancing">Escrito pelo noivo</span>
										<p class="font-montserrrat  max-width">Desde quando conheci a Natália, eu soube que ela era a pessoa certa para mim, que eu gostaria de passar o resto de nossas vidas juntos. Estar com ela foi a melhor coisa que me aconteceu e hoje sou a pessoa mais feliz do mundo por casar com ela.</p>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="sm-6-12 ">
									<div class="couple-item a-cener aright">
										<p class="font-dancing couple-name "><?php echo $noivo ?></p>
										<span class="write-by font-dancing">Escrito pela noiva</span>
										<p class="font-montserrrat  max-width">Me faltam palavras pra descrever o Sérgio, ele é carinhoso, romântico, dedicado, meu melhor amigo e o amor da minha vida. Não consigo imaginar um dia longe dele e quero fazê-lo muito feliz, assim como ele me faz, pelo resto da minha vida.</p>
									</div>
								</div>
								<div class="sm-6-12 ">
									<div class="couple-item">
										<div class="couple-img " style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/couple/groom.jpg')">
											<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/couple/groom.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php } 

			if(get_field('local') || get_post_meta(get_the_ID(), 'local')) {
				$local = get_post_meta(get_the_ID(), 'local')[0];
				if($local == 3) { ?>
					<section class="space-defult local mg-bottom">
						<h2 class="a-center font-dancing section-title color_demo">Eventos</h2>
						<div class="container max-width-content">
							<div class="column">
								<div class="sm-6-12">
									<div class="local-item a-center bordered">
										<h2 class="font-dancin">Cerimônia</h2>

										<svg class="mg-20-bottom" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" width="50">
											<path style="fill:#E5BC53;" d="M354.079,487.362c-87.078,0-157.921-70.843-157.921-157.921S267,171.521,354.079,171.521
											S512,242.363,512,329.441S441.158,487.362,354.079,487.362z M354.079,204.912c-68.665,0-124.53,55.864-124.53,124.528
											c0,68.666,55.864,124.53,124.53,124.53s124.53-55.864,124.53-124.53C478.609,260.776,422.745,204.912,354.079,204.912z"/>
											<path style="fill:#F6C958;" d="M157.921,487.362C70.842,487.362,0,416.519,0,329.441s70.842-157.92,157.921-157.92
											s157.921,70.842,157.921,157.92S244.999,487.362,157.921,487.362z M157.921,204.912c-68.666,0-124.53,55.864-124.53,124.528
											c0,68.666,55.864,124.53,124.53,124.53s124.53-55.864,124.53-124.53C282.45,260.776,226.586,204.912,157.921,204.912z"/>
											<path style="fill:#D02D7F;" d="M286.737,24.638c-13.195,0-24.691,7.728-30.737,19.162c-6.046-11.434-17.54-19.162-30.737-19.162
											c-23.159,0-38.504,16.823-38.504,37.574c0,20.75,11.698,33.309,38.504,52.246C248.686,131.009,256,142.621,256,142.621
											s7.315-11.612,30.737-28.161c26.804-18.938,38.502-31.496,38.502-52.246C325.239,41.461,309.896,24.638,286.737,24.638z"/>
											<path style="fill:#C42C78;" d="M286.737,24.638c-13.195,0-24.691,7.728-30.737,19.162c0,19.899,0,98.82,0,98.82
											s7.315-11.612,30.737-28.161c26.804-18.938,38.502-31.496,38.502-52.246C325.239,41.461,309.896,24.638,286.737,24.638z"/>
											</svg>
										<div class="local-details">
											<p class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> 10/12/2017, 20h00</p>
											<p class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> Av Paulista, #188, São Paulo/SP</p>
											<!-- <a href="#" class="btn btn-theme mg-20-top">Ver local</a> -->
										</div>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="local-item a-center bordered">
										<h2 class="font-dancin">Festa</h2>
											<svg class="mg-20-bottom" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" width="50">
												<rect x="186.268" y="8.348" style="fill:#F5F6F6;" width="139.453" height="122.669"/>
												<rect x="256" y="8.348" style="fill:#E5E5E5;" width="69.732" height="122.669"/>
												<path style="fill:#FC9FD8;" d="M290.862,86.598c-13.874,0-21.682-5.334-26.85-8.863c-3.601-2.46-4.458-3.045-8.016-3.045
													c-3.556,0-4.412,0.584-8.012,3.044c-5.168,3.529-12.976,8.864-26.85,8.864s-21.682-5.334-26.85-8.864
													c-3.6-2.46-4.456-3.044-8.012-3.044V41.298c13.874,0,21.681,5.334,26.848,8.863c3.601,2.46,4.457,3.044,8.014,3.044
													s4.413-0.584,8.014-3.044c5.167-3.529,12.974-8.863,26.848-8.863c13.875,0,21.683,5.334,26.851,8.863
													c3.601,2.46,4.457,3.044,8.015,3.044s4.415-0.584,8.016-3.045c5.168-3.529,12.976-8.863,26.85-8.863v33.391
													c-3.558,0-4.414,0.584-8.015,3.044C312.546,81.263,304.737,86.598,290.862,86.598z"/>
												<path style="fill:#EC96CB;" d="M290.862,86.598c-13.874,0-21.682-5.334-26.85-8.863c-3.601-2.46-4.458-3.045-8.016-3.045
													c0-10.742,0-24.842,0-33.391c13.875,0,21.683,5.334,26.851,8.863c3.601,2.46,4.457,3.044,8.015,3.044s4.415-0.584,8.016-3.045
													c5.168-3.529,12.976-8.863,26.85-8.863v33.391c-3.558,0-4.414,0.584-8.015,3.044C312.546,81.263,304.737,86.598,290.862,86.598z"/>
												<rect x="119.808" y="119.552" style="fill:#E5E5E5;" width="272.373" height="152.732"/>
												<rect x="256.178" y="119.552" style="fill:#CECFD0;" width="136.014" height="152.732"/>
												<path style="fill:#EC96CB;" d="M358.137,208.623c-13.772,0-21.49-5.397-26.595-8.969c-3.479-2.433-4.203-2.94-7.457-2.94
													c-3.252,0-3.976,0.506-7.454,2.94c-5.106,3.572-12.822,8.969-26.594,8.969s-21.487-5.397-26.594-8.969
													c-3.478-2.433-4.202-2.94-7.455-2.94c-3.251,0-3.975,0.506-7.453,2.94c-5.106,3.572-12.822,8.969-26.594,8.969
													c-13.771,0-21.487-5.397-26.593-8.969c-3.478-2.433-4.202-2.94-7.454-2.94c-3.25,0-3.972,0.506-7.45,2.938
													c-5.106,3.572-12.821,8.97-26.593,8.97c-13.771,0-21.486-5.398-26.592-8.97c-3.477-2.433-4.2-2.938-7.45-2.938v-33.391
													c13.771,0,21.486,5.398,26.592,8.97c3.477,2.433,4.2,2.938,7.45,2.938c3.251,0,3.974-0.506,7.451-2.938
													c5.106-3.572,12.821-8.97,26.592-8.97c13.772,0,21.488,5.397,26.594,8.969c3.478,2.433,4.202,2.94,7.453,2.94
													c3.252,0,3.976-0.506,7.454-2.94c5.106-3.572,12.822-8.969,26.593-8.969c13.772,0,21.488,5.397,26.595,8.969
													c3.478,2.433,4.202,2.94,7.454,2.94c3.252,0,3.976-0.506,7.454-2.94c5.106-3.572,12.822-8.969,26.594-8.969
													s21.49,5.397,26.595,8.969c3.479,2.433,4.203,2.94,7.457,2.94c3.255,0,3.978-0.506,7.457-2.94
													c5.106-3.572,12.823-8.969,26.595-8.969v33.391c-3.255,0-3.978,0.506-7.457,2.94C379.626,203.226,371.909,208.623,358.137,208.623z"
													/>
												<path style="fill:#DD8CBF;" d="M255.988,196.715c3.253,0,3.977,0.506,7.455,2.94c5.107,3.571,12.822,8.969,26.594,8.969
													s21.488-5.397,26.594-8.969c3.478-2.433,4.202-2.94,7.454-2.94c3.255,0,3.978,0.506,7.457,2.94
													c5.106,3.572,12.823,8.969,26.595,8.969c13.772,0,21.49-5.397,26.595-8.969c3.479-2.433,4.203-2.94,7.457-2.94v-33.391
													c-13.772,0-21.49,5.397-26.595,8.969c-3.479,2.433-4.203,2.94-7.457,2.94c-3.255,0-3.978-0.506-7.457-2.94
													c-5.106-3.572-12.823-8.969-26.595-8.969s-21.488,5.397-26.594,8.969c-3.478,2.433-4.202,2.94-7.454,2.94
													c-3.252,0-3.976-0.506-7.454-2.94c-5.107-3.572-12.823-8.969-26.595-8.969L255.988,196.715L255.988,196.715z"/>
												<rect x="239.304" y="399.482" style="fill:#B8B9BD;" width="33.391" height="87.474"/>
												<rect x="53.35" y="252.394" style="fill:#F5F6F6;" width="405.293" height="147.089"/>
												<rect x="256.178" y="252.394" style="fill:#E5E5E5;" width="202.474" height="147.089"/>
												<path style="fill:#FC9FD8;" d="M458.648,348.591c-13.738,0-21.423-5.419-26.507-9.006c-3.408-2.403-4.116-2.903-7.264-2.903
													c-3.148,0-3.858,0.5-7.264,2.903c-5.084,3.586-12.771,9.006-26.508,9.006s-21.423-5.419-26.508-9.006
													c-3.408-2.403-4.116-2.903-7.265-2.903c-3.147,0-3.856,0.5-7.26,2.902c-5.084,3.586-12.77,9.006-26.506,9.006
													c-13.738,0-21.423-5.419-26.508-9.006c-3.406-2.402-4.115-2.902-7.261-2.902c-3.148,0-3.857,0.5-7.264,2.903
													c-5.084,3.586-12.77,9.006-26.507,9.006c-13.737,0-21.424-5.419-26.508-9.005c-3.409-2.403-4.117-2.903-7.267-2.903
													s-3.859,0.5-7.267,2.903c-5.084,3.586-12.771,9.005-26.508,9.005c-13.739,0-21.424-5.419-26.509-9.005
													c-3.409-2.403-4.118-2.903-7.268-2.903c-3.15,0-3.859,0.5-7.267,2.903c-5.084,3.586-12.771,9.005-26.508,9.005
													c-13.739,0-21.425-5.419-26.512-9.005c-3.409-2.404-4.118-2.904-7.269-2.904c-3.152,0-3.862,0.5-7.27,2.904
													c-5.085,3.586-12.772,9.005-26.51,9.005v-33.391c3.151,0,3.861-0.5,7.269-2.904c5.087-3.586,12.773-9.005,26.512-9.005
													s21.425,5.418,26.51,9.005c3.409,2.404,4.118,2.904,7.27,2.904c3.15,0,3.859-0.5,7.266-2.903c5.085-3.586,12.772-9.005,26.509-9.005
													c13.737,0,21.424,5.419,26.509,9.005c3.409,2.403,4.118,2.903,7.268,2.903c3.15,0,3.859-0.5,7.267-2.903
													c5.084-3.586,12.771-9.005,26.508-9.005c13.737,0,21.424,5.419,26.509,9.005c3.408,2.403,4.116,2.903,7.266,2.903
													c3.148,0,3.857-0.5,7.264-2.903c5.084-3.586,12.77-9.006,26.507-9.006c13.737,0,21.422,5.419,26.506,9.006
													c3.408,2.403,4.116,2.903,7.264,2.903c3.147,0,3.856-0.5,7.26-2.902c5.084-3.586,12.77-9.006,26.506-9.006
													c13.738,0,21.423,5.419,26.508,9.006c3.408,2.403,4.116,2.903,7.265,2.903s3.858-0.5,7.265-2.903
													c5.084-3.586,12.77-9.006,26.507-9.006s21.423,5.419,26.507,9.006c3.408,2.403,4.116,2.903,7.264,2.903L458.648,348.591
													L458.648,348.591z"/>
												<path style="fill:#EC96CB;" d="M458.648,348.591c-13.738,0-21.423-5.419-26.507-9.006c-3.408-2.403-4.116-2.903-7.264-2.903
													c-3.148,0-3.858,0.5-7.264,2.903c-5.084,3.586-12.771,9.006-26.508,9.006s-21.423-5.419-26.508-9.006
													c-3.408-2.403-4.116-2.903-7.265-2.903c-3.147,0-3.856,0.5-7.26,2.902c-5.084,3.586-12.77,9.006-26.506,9.006
													c-13.738,0-21.423-5.419-26.508-9.006c-3.406-2.402-4.115-2.902-7.261-2.902c-3.148,0-3.857,0.5-7.264,2.903
													c-5.084,3.586-12.77,9.006-26.507,9.006c0-18.205,0-28.44,0-33.391c3.148,0,3.857-0.5,7.264-2.903
													c5.084-3.586,12.77-9.006,26.507-9.006s21.422,5.419,26.506,9.006c3.408,2.403,4.116,2.903,7.264,2.903
													c3.147,0,3.856-0.5,7.26-2.902c5.084-3.586,12.77-9.006,26.506-9.006c13.738,0,21.423,5.419,26.508,9.006
													c3.408,2.403,4.116,2.903,7.265,2.903s3.858-0.5,7.265-2.903c5.084-3.586,12.77-9.006,26.507-9.006s21.423,5.419,26.507,9.006
													c3.408,2.403,4.116,2.903,7.264,2.903V348.591z"/>
												<rect y="382.787" style="fill:#C3C3C9;" width="512" height="33.391"/>
												<rect x="162.159" y="470.261" style="fill:#7A7A7C;" width="187.67" height="33.391"/>
											</svg>
										<div class="local-details">
											<p class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> 10/12/2017, 20h00</p>
											<p class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> Av Paulista, #188, São Paulo/SP</p>
											<!-- <a href="#" class="btn btn-theme mg-20-top">Ver local</a> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				<?php } ?>
				<?php if($local == 2) { ?>
					<section class="space-default local with-title">
						<h2 class="a-center font-dancing section-title color_demo">Eventos</h2>
						<div class="container max-widt-content">
							<div class="column">
								<div class="sm-6-12 border-right">
									<div class="local-item a-center">
										<h2 >Cerimônia</h2>
										<p>15 de maio de 2017, ás 20h</p>
										<p>Av das Rosas, #178</p>
									</div>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7312.976294812386!2d-46.66058329394004!3d-23.58682003096726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59f1069d11d1%3A0xcb936109af9ce541!2sParque+Ibirapuera!5e0!3m2!1spt-BR!2sbr!4v1494531597526" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
								<div class="sm-6-12">
									<div class="local-item a-center">
										<h2 >Festa</h2>
										<p class="local-featured open-sans">Sábado, 15 de maio de 2017, ás 20h</p>
										<p class="local-featured open-sans">Av das Rosas, #178</p>
									</div>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.145903743023!2d-46.656441185020775!3d-23.563202767545324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.+Paulista%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1494531673158"  height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</section>
				<?php } ?>
				<?php if($local == 1) { ?>
					<section class="space-default local with-img ">
						<h2 class="a-center font-dancing section-title color_demo mg-bottom">Eventos</h2>
						<div class="container max-width-content">
							<div class="column">
								<div class="sm-6-12">
									<div class="local-item a-center">
										<div class="local-img bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/local/wedding.jpg')">
											<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/local/party.jpg">
										</div>
										<div class="local-content">
											<h2 >Cerimônia</h2>
											<p>Chegou o grande momento, aquela hora que arrepia, que emociona. E contamos com sua presença para esse ser muito mais que especial... Porém só quem tem o direito de atrasar é a NOIVA.</p>
											<p class="local-featured open-sans">Sábado, 15 de maio de 2017, ás 20h</p>
											<p class="local-featured open-sans">Av do Brasil, #1788</p>
										</div>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="local-item a-center">
										<div class="local-img bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/local/party.jpg')">
											<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/local/party.jpg">
										</div>
										<div class="local-content">
											<h2 >Festa</h2>
											<p>Agora vamos ao que interessa! Delicioso coquetel, com salgados fabulosos e uma massa deliciosa, com direito a se acabar nos doces finos. Bebida é o que não falta. Ah! E alonguem as pernas, porque a balada vai ser TOP!</p>
											<p class="local-featured open-sans">Sábado, 15 de maio de 2017, ás 20h</p>
											<p class="local-featured open-sans">Av do Brasil, #1788</p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</section>
				<?php } ?>
			<?php } 


			if(get_field('contagem') || get_post_meta(get_the_ID(), 'contagem')) {
				$contagem = get_post_meta(get_the_ID(), 'contagem')[0];
				if($contagem == 1) { ?>
					<section class="space-default timer overlay">
						<div class="cntainer max_width">
							<h2 class="a-center section-title font-montserrrat">Contagem regressiva para o grande dia...</h2>
							<div class="column">
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-days">
										02
										</div>
										<div class="time">Dias</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-hours">
										03
										</div>
										<div class="time">Horas</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-minutes">
										23
										</div>
										<div class="time">Minutos</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-seconds">
										54
										</div>
										<div class="time">Segundos</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				<?php } ?>
				<?php if($contagem == 2) { ?>
					<section class="space-default timer overlay simple">
						<div class="cntainer max_width">
							<h2 class="a-center sans-serif section-title">Escolhemos o dia e estamos contando os segundos...</h2>
							<div class="column">
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-days">
										02
										</div>
										<div class="time">Dias</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-hours">
										03
										</div>
										<div class="time">Horas</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-minutes">
										23
										</div>
										<div class="time">Minutos</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-seconds">
										54
										</div>
										<div class="time">Segundos</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				<?php } ?>
				<?php if($contagem == 3) { ?>
					<section class="space-default timer simple triangle">
						<div class="cntainer max_width">
							<h2 class="a-center sans-serif section-title no-mg">25 de Outubro de 2018, São Paulo/SP</h2>
							<i class="fa a-center icon pulse fa-heart" aria-hidden="true"></i>
							<div class="column">
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-days">
										02
										</div>
										<div class="time">Dias</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-hours">
										03
										</div>
										<div class="time">Horas</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-minutes">
										23
										</div>
										<div class="time">Minutos</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-seconds">
										54
										</div>
										<div class="time">Segundos</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				<?php } ?>
				<?php if($contagem == 4) { ?>
					<section class="space-default timer simple triangle overlay circle">
						<div class="cntainer max_width">
							<h2 class="a-center sans-serif section-title">Venha celebrar nosso amor com a gente em...</h2>
							<div class="column">
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-days">
										02
										</div>
										<div class="time">Dias</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-hours">
										03
										</div>
										<div class="time">Horas</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-minutes">
										23
										</div>
										<div class="time">Minutos</div>
									</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-seconds">
										54
										</div>
										<div class="time">Segundos</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				<?php } ?>
				<?php if($contagem == 5) { ?>
					<section class="timer one-color no-bg no-mg" >
						<div class="container">
							<div class="column">
								<div class="md-4-12 first-color"><h2 class="section-title">Faça a contagem regressiva conosco</h2></div>
								<div class="md-8-12 color_theme">
									<div class="column">
										<div class="sm-3-12 a-center">
												<div class="number number-days">
												02
												</div>
												<div class="time">Dias</div>
										</div>
										<div class="sm-3-12 a-center">
												<div class="number number-hours">
												03
												</div>
												<div class="time">Horas</div>
										</div>
										<div class="sm-3-12 a-center">
												<div class="number number-minutes">
												23
												</div>
												<div class="time">Minutos</div>
										</div>
										<div class="sm-3-12 a-center">
												<div class="number number-seconds">
												54
												</div>
												<div class="time">Segundos</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				<?php } ?>
				<?php if($contagem == 6) { ?>
					<section class="no-background space-defaul space-default-top timer">
						<div class="containe max_width">
							<h2 class="a-center section-title style_font">O Dia do casamento chega em...</h2>
							<div class="column">
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-days">
										02
										</div>
									</div>
									<div class="a-center time">Dia(s)</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-hours">
										03
										</div>
									</div>
									<div class="a-center time">Hora(s)</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-minutes">
										23
										</div>
									</div>
									<div class="a-center time">Minuto(s)</div>
								</div>
								<div class="xs-6-12 sm-3-12">
									<div class="timer-box a-center">
										<div class="number number-seconds">
										54
										</div>
									</div>
									<div class="a-center time">Segundo(s)</div>
								</div>
							</div>
						</div>
					</section>
				<?php } ?>
			<?php } 


		
			if(get_field('rsvp') || get_post_meta(get_the_ID(), 'rsvp')) {
				$rsvp = get_post_meta(get_the_ID(), 'rsvp')[0];
				if($rsvp == 1) { ?>
					<div class="rsvp rsvp-default space-default">
						<div class="container">
							<h2 class="a-center font-dancing section-title color_demo" style="color: #333 !important;">RSVP</h2>
							<div class="form max-width">
								<div class="input-group">
									<label for="name" class="label">Digite seu nome</label>
									<input type="text" class="input" id="name" name="name">
								</div>
								<div class="input-group">
									<label for="email" class="label">Quantos convidados irá levar?</label>
									<select class="input">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
								<div class="a-center">
									<button class="btn btn-theme btn-pink btn-uppercase" type="submit">Confirmar Presença</button>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<?php if($rsvp == 2) { ?>
					<div class="rsvp space-default rsvp-pink">
						<div class="container">
							<h2 class="a-center font-dancing section-title color_demo">RSVP</h2>
							<p class="a-center">Sua presença é muito importante para nós!</p>
							<div class="form max-width">
								<div class="input-group">
									<label for="name" class="label">Digite seu nome</label>
									<input type="text" class="input" id="name" name="name">
								</div>
								<div class="input-group">
									<label for="email" class="label">Quantos convidados irá levar?</label>
									<select class="input">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
								<button class="btn btn-theme btn-dark btn-block btn-uppercase" type="submit">Confirmar Presença</button>
							</div>
						</div>
					</div>
				<?php } ?>
				<?php if($rsvp == 3) { ?>
					<div class="rsvp space-default rsvp-font">
						<div class="container">
							<h2 class="a-center font-dancing section-title color_demo" style="color: #333 !important;">RSVP</h2>
							<div class="form max-width">
								<div class="column">
									<div class="sm-8-12">
										<div class="input-group">
											<label for="name" class="label font-dancing">Digite seu nome</label>
											<input type="text" class="input" id="name" name="name">
										</div>
									</div>
									<div class="sm-4-12">
										<div class="input-group">
											<label for="email" class="label font-dancing"># Convidados</label>
											<select class="input">
												<option>0</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
									</div>
								</div>
								<div class="a-rigt">
								<button class="btn btn-theme btn-dark btn-uppercase" type="submit">Confirmar Presença</button>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php } 

			
			if(get_field('galeria_de_fotos') || get_post_meta(get_the_ID(), 'galeria_de_fotos')) {
				$galeria_de_fotos = get_post_meta(get_the_ID(), 'galeria_de_fotos')[0];
				if($galeria_de_fotos == 1) { ?>
				<div class="space-default">
					<h2 class="a-center font-dancing section-title color_demo">Nossas Fotos</h2>
					<div class="container">
						<div class="components-item gallery column less-centered">
							<div class="sm-6-12 md-4-12">
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party.jpg" alt="">
								</div>
							</div>
							<div class="sm-6-12 md-4-12">
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_1.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_1.jpg" alt="">
								</div>
							</div>
							<div class="sm-6-12 md-4-12">
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_2.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_2.jpg" alt="">
								</div>
							</div>
							<div class="sm-6-12 md-4-12">
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_3.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_3.jpg" alt="">
								</div>
							</div>
							<div class="sm-6-12 md-4-12">
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_4.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_4.jpg" alt="">
								</div>
							</div>
							<div class="sm-6-12 md-4-12">
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_5.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_5.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<?php if($galeria_de_fotos == 2) { ?>
					<div class="space-default">
						<div class="container">
							<h2 class="a-center font-dancing section-title color_demo">Nossas Fotos</h2>
							<div class="components-item gallery gallery-tall less-centered">
								<div class="sm-25">
									<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party.jpg')">
										<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party.jpg" alt="">
									</div>
								</div>
								<div class="sm-25">
									<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_1.jpg')">
										<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_1.jpg" alt="">
									</div>
								</div>
								<div class="sm-25">
									<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_3.jpg')">
										<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_3.jpg" alt="">
									</div>
								</div>
								<div class="sm-25">
									<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_4.jpg')">
										<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_4.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<?php if($galeria_de_fotos == 3) { ?>
					<div class="space-default">
						<div class="container">
							<h2 class="a-center font-dancing section-title color_demo">Nossas Fotos</h2>
							<div class="gallery gallery-featured">
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party.jpg" alt="">
								</div>
						
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_1.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_1.jpg" alt="">
								</div>
							
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_2.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_2.jpg" alt="">
								</div>
							
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_3.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_3.jpg" alt="">
								</div>
							
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_4.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_4.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<?php if($galeria_de_fotos == 4) { ?>
					<div class="space-default">
						<div class="container">
							<h2 class="a-center font-dancing section-title color_demo">Nossas Fotos</h2>
							<div class="gallery gallery-five less-centered">				
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_1.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_1.jpg" alt="">
								</div>
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_2.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_2.jpg" alt="">
								</div>
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_3.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_3.jpg" alt="">
								</div>
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_4.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_4.jpg" alt="">
								</div>
								<div class="gallery-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/gallery/party_5.jpg')">
									<img src="<?php echo get_template_directory_uri(); ?>/img/gallery/party_5.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php }

		
			if(get_field('recados') || get_post_meta(get_the_ID(), 'recados')) {
				$recados = get_post_meta(get_the_ID(), 'recados')[0];
				if($recados == 1) { ?>
				<div class="mg-bottom">
					<section class="space-defaul notes">
						<div class="container">
							<h2 class="a-center font-dancing section-title color_demo">Mural de recados</h2>
							<div class="notes-group ">
								<div class="owl-carousel slidertestimonial owl-theme">
									<div class="sm-6-12">
										<div class="notes-item">
											<p class="notes-p first-letter">Que a felicidade a dois continue sendo o objetivo principal de suas vidas. Que a caminhada seja longa, repleta de amor e compreensão. Sinceros votos de felicidades.</p>
											<p class="notes-author">Paloma, </p>
											<p class="notes-connect">-Amiga do noivo</p>
										</div>
									</div>
									<div class="sm-6-12">
										<div class="notes-item">
											<p class="notes-p first-letter">Que vocês estejam unidos para a nova vida que hora se inicia, e que ela seja de muito amor, paz e alegria.</p>
											<p class="notes-author">Patrícia</p>
											<p class="notes-connect">-Irmã da noiva</p>
										</div>
									</div>
									<div class="sm-6-12">
										<div class="notes-item">
											<p class="notes-p first-letter">Que a felicidade a dois continue sendo o objetivo principal de suas vidas. Que a caminhada seja longa, repleta de amor e compreensão. Sinceros votos de felicidades.</p>
											<p class="notes-author">Gabriela, </p>
											<p class="notes-connect">-Prima do noivo</p>
										</div>
									</div>
									<div class="sm-6-12">
										<div class="notes-item">
											<p class="notes-p first-letter">Um casamento feliz se constrói com muito amor, carinho e compreensão. Que estes sentimentos estejam sempre presentes na vida de vocês!</p>
											<p class="notes-author">Fábio</p>
											<p class="notes-connect">-Irmão da noiva</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>			
				<?php } ?>
				<?php if($recados == 2) { ?>
					<section class="space-default notes overlay box">
						<div class="container">
							<h2 class="a-center font-dancing section-title" style="color: #fff">Mural de recados</h2>
							<div class="notes-group owl-carousel slidertestimonial owl-theme">
								<div class="sm-6-12">
									<div class="notes-item">
										<p class="notes-p">Que a caminhada que se inicia seja repleta de amor, felicidade, carinho e cumplicidade. Parabéns ao novo casal!</p>
										<p class="notes-author">Antonio Carlos</p>
										<p class="notes-connect">-Avô do noivo</p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="notes-item">
										<p class="notes-p">Que esta nova etapa de suas vidas seja coberta de bênçãos, recheada de felicidade e repleta de harmonia. Parabéns!</p>
										<p class="notes-author">Fernanda</p>
										<p class="notes-connect">-Tia da noiva</p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="notes-item">
										<p class="notes-p">Que este amor que vos uniu se multiplique a cada dia desta nova vida que se inicia. Felicidades ao casal!</p>
										<p class="notes-author">Aline</p>
										<p class="notes-connect">-Prima do noivo</p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="notes-item">
										<p class="notes-p">Até que enfim o casório saiu... Parabéns! Que vocês continuem unidos, companheiros e, acima de tudo, felizes.</p>
										<p class="notes-author">Fábio</p>
										<p class="notes-connect">-Amigo da noiva</p>
									</div>
								</div>
							</div>
						</div>
					</section>
				<?php } ?>
				<?php if($recados == 3) { ?>
					<section class="notes bordered-bottom ">
						<div class="container">
							<h2 class="a-center font-dancing section-title color_demo">Muraal de recados</h2>
							<div class="notes-group owl-carousel slidertestimonial owl-theme">
								<div class="sm-6-12">
									<div class="notes-item">
										<p class="notes-p ">Um casamento feliz se constrói com muito amor, carinho e compreensão. Que estes sentimentos estejam sempre presentes em suas vidas. Parabéns!</p>
										<p class="notes-author">Carlos, <span>pai da noiva</span></p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="notes-item">
										<p class="notes-p ">Que todos os sonhos que compartilham se tornem realidade, e que esta nova vida seja repleta de amor, paz e alegria, para que possam desfrutar da felicidade tão sonhada! Parabéns!</p>
										<p class="notes-author">Júnior, <span>colega do noivo</span></p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="notes-item">
										<p class="notes-p ">A vida é feita de momentos bons e ruins. Aproveitem intensamente os bons e estejam sempre unidos para superar os ruins. Assim se constrói um casamento duradouro e feliz! Felicidades!</p>
										<p class="notes-author">Carla, <span>irmã do noivo</span></p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="notes-item">
										<p class="notes-p ">Parabéns por esse passo tão importante em suas vidas. Que vocês sejam muito felizes!</p>
										<p class="notes-author">Bruna, <span>amiga do casal</span></p>
									</div>
								</div>

							</div>
						</div>
					</section>
				<?php } ?>
				<?php if($recados == 4) { ?>
			 		<section class="space-default testimonial">
						<div class="containr max-width-content">
							<h2 class="a-center font-dancing section-title color_demo">Mural de recados</h2>
							<div class="owl-carousel slidertestimonial owl-theme">
								<div class="sm-6-12">
									<div class="holder">
										<p class="font-playfair messages">Que esta união tão bonita seja repleta de amor e perdure para sempre. Sejam muito felizes!</p>
										<p class="author">Júlia, <span style="font-size: 14px;">prima da noiva</span></p>
									</div>
								</div>
						
								<div class="sm-6-12">
									<div class="holder">
										<p class="font-playfair messages">As boas energias que prevalecem em cada momento da vida vêm do amor mais sincero. Felicidades nessa união!</p>
										<p class="author">Pedro, <span style="font-size: 14px;">irmão do noivo</span></p>
									</div>
								</div>
								<div class="sm-6-12">
									<div class="holder">
										<p class="font-playfair messages">Parabéns por este momento tão sublime da união entre duas pessoas que se amam. Toda a felicidade do mundo à vocês!</p>
										<p class="author">Jaqueline, <span style="font-size: 14px;">mãe do noivo</span></p>
									</div>
								</div>
						
								<div class="sm-6-12">
									<div class="holder">
										<p class="font-playfair messages">No momento em que vocês assumem o compromisso de serem felizes juntos, só posso desejar que tal felicidade se realize plenamente, e que o passar dos anos só venha a confirmar e reforçar o amor que os une.</p>
										<p class="author">Bruno, <span style="font-size: 14px;">Irmão da noiva</span></p>
									</div>
								</div>
								
								
							</div>
						</div>
					</section>
				<?php } ?>
			<?php }

		
			if(get_field('blog') || get_post_meta(get_the_ID(), 'blog')) {
				$blog = get_post_meta(get_the_ID(), 'blog')[0];
				if($blog == 1) { ?>
					<div class="container">
						<div class="space-default">
							<h2 class="a-center font-dancing section-title color_demo">Blog</h2>
							<div class="blog blog-default column">
								<div class="sm-4-12">
									<div class="blog_item">
										<div class="blog_img bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/blog/blog.jpg')">
											<figure>
												<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/noiva.jpeg" alt="">
											</figure>
										</div>
										<div class="blog_content">
											<a href="#"><h2 class="blog_content-title">Nosso destino na lua de mel</h2></a>

											<p class="blog_content-p">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam optio iusto numquam fugit omnis! Similique distinctio reiciendis, voluptatem praesentium ipsum...
												<a href="#" class="a-left">Continuar lendo...</a>
											</p>
										</div>
									</div>
								</div>

								<div class="sm-4-12">
									<div class="blog_item">
										<div class="blog_img bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/blog/couple.jpg')">
											<figure>
												<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/festa.jpg" alt="">
											</figure>
										</div>
										<div class="blog_content">
											<a href="#"><h2 class="blog_content-title">Conheça nossa história</h2></a>
											<p class="blog_content-p">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam optio iusto numquam fugit omnis! Similique distinctio reiciendis, voluptatem praesentium ipsum...
												<a href="#" class="a-left">Continuar lendo...</a>
											</p>
										</div>
									</div>
								</div>

								<div class="sm-4-12">
									<div class="blog_item">
										<div class="blog_img bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/blog/dog.jpg')">
											<figure>
												<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/madrinhas.jpg" alt="">
											</figure>
										</div>
										<div class="blog_content">
											<a href="#"><h2 class="blog_content-title">Veja nossa filha!</h2></a>
											<p class="blog_content-p">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam optio iusto numquam fugit omnis! Similique distinctio reiciendis, voluptatem praesentium ipsum...
												<a href="#" class="a-left">Continuar lendo...</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<?php if($blog == 2) { ?>
					<div class="container">
						<div class="space-default">
							<h2 class="a-center font-dancing section-title color_demo">Blog</h2>
							<div class="blog bg-overlay column">
								<div class="sm-4-12">
									<div class="blog_item overlay bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/blog/bride.jpg')">
										<figure>
											<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/blog/bride.jpg" alt="">
										</figure>
										<div>
											<h2>Saiba como foi meu dia de noiva</h2>
											<div class="shared-list">
												<ul>
													<li>
														<a class="facebook" href="#">
															<i class="fa fa-facebook" aria-hidden="true"></i>
														</a>
													</li>
													<li>
														<a class="twitter" href="#">
															<i class="fa fa-twitter" aria-hidden="true"></i>
														</a>
													</li>
													<li>
														<a class="whatsapp" href="#">
															<i class="fa fa-whatsapp" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="sm-4-12 ">
									<div class="blog_item overlay bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/blog/hotel.jpg')">
										<figure>
											<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/blog/hotel.jpg" alt="">
										</figure>
										<div>
											<h2>Onde se hospedar próximo a cerimônia?</h2>
											<div class="shared-list">
												<ul>
													<li>
														<a class="facebook" href="#">
															<i class="fa fa-facebook" aria-hidden="true"></i>
														</a>
													</li>
													<li>
														<a class="twitter" href="#">
															<i class="fa fa-twitter" aria-hidden="true"></i>
														</a>
													</li>
													<li>
														<a class="whatsapp" href="#">
															<i class="fa fa-whatsapp" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="sm-4-12 ">
									<div class="blog_item overlay bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/blog/music.jpg')">
										<figure>
											<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/blog/music.jpg" alt="">
										</figure>
										<div>
											<h2>Como será a playlist?</h2>
											<div class="shared-list">
												<ul>
													<li>
														<a class="facebook" href="#">
															<i class="fa fa-facebook" aria-hidden="true"></i>
														</a>
													</li>
													<li>
														<a class="twitter" href="#">
															<i class="fa fa-twitter" aria-hidden="true"></i>
														</a>
													</li>
													<li>
														<a class="whatsapp" href="#">
															<i class="fa fa-whatsapp" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				<?php if($blog == 3) { ?>
			 		<section class="space-default services new-blog">
						<div class="container hidden-mobil">
							<div class="column">
								<div class="sm-4-12">
									<div class="new-blog-item">
										<div class="new-blog-img cover-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/blog/party.jpg')">
											<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/blog/party.jpg">
										</div>
										<div class="new-blog-content">
											<h2>Qual música você gostaria de ouvir na festa?</h2>
											<span>publicado em 12 de maio</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
											<a href="#">Ler mais</a>
										</div>
									</div>
								</div>
								<div class="sm-4-12">
									<div class="new-blog-item">
										<div class="new-blog-img cover-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/blog/flores.jpg')">
											<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/blog/flores.jpg">
										</div>
										<div class="new-blog-content">
											<h2>Quem será que vai pegar o buquê?</h2>
											<span>publicado em 12 de maio</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
											<a href="#">Ler mais</a>
										</div>
									</div>
								</div>
								<div class="sm-4-12">
									<div class="new-blog-item">
										<div class="new-blog-img cover-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/blog/cup.jpg')">
											<img class="hidden" src="<?php echo get_template_directory_uri(); ?>/img/blog/cup.jpg">
										</div>
										<div class="new-blog-content">
											<h2>Lista de docinhos</h2>
											<span>publicado em 12 de maio</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
											<a href="#">Ler mais</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				<?php } ?>
			<?php } 

			/*
			if(get_field('xxx')) {
				$xxx = get_field('xxx');
				if($xxx == 1) { ?>
				
				<?php } ?>
				<?php if($xxx == 2) { ?>
				
				<?php } ?>
			<?php } */
		?>
	<?php endwhile; ?>

	<?php if(is_user_logged_in()) {
		if(get_the_author_meta('ID') == get_current_user_id()) { ?>
			<div class="info a-center">
				<div class="container">
					<div class="column">
						<div class="xs-6-12">
							<p>Quer seu site como esse modelo?</p>
							<form method="post">
								<input type="hidden" name="color" id="color">
								<input type="hidden" name="create_site" value="<?php echo get_the_ID(); ?>">
								<button type="submit" class="btn btn-theme btn-radius btn-uppercase">Sim, quero esse modelo</button>
							</form>
							
						</div>
						<div class="xs-6-12">
							<p>Gostaria de criar outro modelo? Esse estará salvo em <a href="<?php echo home_url('/meus-dados') ?>">meus dados</a>.</p>
							<a href="<?php echo home_url('crie-seu-site') ?>" class="btn btn-theme btn-small btn-radius">Criar um novo</a>
						</div>
					</div>
				</div>
			</div>
	<?php } else { ?>
		<div class="info a-center">
			<div class="container">
				<div class="column">
					<div class="xs-12-12">
						<form>
							<input type="hidden" name="color" id="color">
						</form>
						<p>Gostaria de criar um site assim?</p>
						<a href="<?php echo home_url('crie-seu-site') ?>" class="btn btn-theme btn-small btn-radius">Criar um modelo pra você</a>
					</div>
				</div>
			</div>
		</div>
	<?php } };

	if(!is_user_logged_in()) { ?>
	<div class="info a-center">
		<div class="container">
			<div class="column">
				<div class="xs-12-12">
						<form>
							<input type="hidden" name="color" id="color">
						</form>
					<p>Gostaria de ter um site assim?</p>
					<a href="#" class="btn btn-theme btn-small btn-radius btn-acount">Crie sua conta</a>
				</div>
			</div>
			<div class="modal">	
				<form class="form" id="create-login">
					<a href="#" class="btn btn-close"><i class="fa fa-times" aria-hidden="true"></i></a>
					<h2 class="title-descr tab-bottom font-poppins a-left">Criar conta</h2>
					<div class="column">
						<div class="sm-6-12">
							<div class="input-group a-left">
								<label class="label"  for="user_name">Seu nome</label>
								<input type="text" class="input inline" id="user_name" name="user_name">
							</div>
						</div>
						<div class="sm-6-12">
							<div class="input-group a-left">
								<label class="label"  for="user_email">E-mail</label>
								<input type="email" class="input inline" id="user_email" name="user_email">
							</div>
						</div>
						<div class="sm-6-12">
							<div class="input-group a-left">
								<label class="label"  for="nome_noiva">Nome da noiva</label>
								<input type="text" class="input inline" id="nome_noiva" name="nome_noiva">
							</div>
						</div>
						<div class="sm-6-12">
							<div class="input-group a-left">
								<label class="label"  for="nome_noivo">Nome do noivo</label>
								<input type="text" class="input inline" id="nome_noivo" name="nome_noivo">
							</div>
						</div>
						<div class="sm-6-12">
							<div class="input-group a-left">
								<label class="label"  for="user_pass">Sua senha</label>
								<input type="password" class="input inline" id="user_pass" name="user_pass">
							</div>
						</div>
						<div class="sm-6-12">
							<div class="input-group a-left">
								<label class="label"  for="user_repass">Confirme sua senha</label>
								<input type="password" class="input inline" id="user_repass" name="user_repass">
							</div>
						</div>
					</div>

					<input type="hidden" name="createAccount" value="1">
					<input type="hidden" name="post_created" value="<?php echo get_the_ID(); ?>">
					<button type="submit" class="btn btn-theme mg-bottom btn-uppercase">Criar conta</button>
					<?php echo do_shortcode('[fbl_login_button redirect="" hide_if_logged=""]'); ?>
				</form>
			</div>
		</div>
	</div>
	<?php } ?>
<?php get_footer(); ?>
