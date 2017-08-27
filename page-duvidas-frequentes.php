
	<?php get_header(); ?>
	<!-- 	<section class="pad-space single-top single-banner">
		</section> -->
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="pad-space archive centered single-z mg-bottom">
			<div class="container max-width-content">
				<div class="column">
					<div class="single-post p-white">
						<ul class="breadcrumb">
							<li><p>Você está em: </p></li>
							<li><a href="<?php echo home_url(); ?>">Início</a></li>
							<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php the_title(); ?></a></li>
						</ul>
						<div class="describe_title">
							<h2 class="font-poppins" style="font-weight: bold;"><?php the_title(); ?></h2>
						</div>
						<article>
                        <?php
                            if( have_rows('faq') ) :
                                while ( have_rows('faq') ) : the_row(); ?>
                                    <div class="question">
                                        <a class="question-title font-poppins" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> <?php the_sub_field('titulo');?></a>
                                        <div class="question-p">
                                            <?php the_sub_field('resposta'); ?>
                                        </div>
                                    </div> <?php
                                endwhile;
                            endif; ?>
                            <p class="mg-top">Sua dúvida não está aqui? Mande para nós através do nosso whatsapp 11 94927-4392 ou pelo email meucasamentoideal@gmail.com que ela respondida.</p>
						</article>
                    </div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php get_footer(); ?>
