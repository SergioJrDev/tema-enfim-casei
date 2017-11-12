<?php get_header(); ?>
<!-- 	<section class="pad-space single-top single-banner">
	</section> -->
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="pad-space mg-bottom archive centered single-z">
		<div class="container">
			<div class="column">
				<div class="single-post p-white">
					<ul class="breadcrumb">
						<li><p>Você está em: </p></li>
						<li><a href="<?php echo home_url(); ?>">Início</a></li>
						<li><a style="color: #333;" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php the_title(); ?></a></li>
					</ul>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php get_footer(); ?>
