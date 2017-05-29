<?php //template name: Todos os posts ?>
<?php get_header(); ?>
	<div class="pad-space archive single-z">
		<div class="container">
			<ul class="breadcrumb">
				<li><p>Você está em: </p></li>
				<li><a href="<?php echo home_url(); ?>">Início</a></li>
				<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php the_title(); ?></a></li>
			</ul>
			<div class="column">
				<?php
					$query = new WP_Query(array('posts_per_page' => -1));
					while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="sm-6-12 md-4-12 single_box">
						<div class="single_box_item">
							<?php if(has_post_thumbnail()) { ?>
							<div class="single_box_img">
								<figure>
									<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
								</figure>
							</div>
							<?php } ?>
							<div class="single_box_content">
								<a href="<?php the_permalink(); ?>"><h2 class="single_box_title"><?php the_title(); ?></h2></a>
								<p class="p-black single_box_date">Publicado em <?php echo get_the_date('d/m/Y'); ?></p>
								<?php the_excerpt(); ?>
								<a class="single_box_btn" href="<?php the_permalink(); ?>">Continuar lendo...</a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
