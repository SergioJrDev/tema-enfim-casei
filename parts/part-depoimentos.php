<div class="sm-6-12 md-4-12">
    <div class="testimonial-box a-center">
        <figure class="bg-img radius" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')">
            <img class="hidden" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
        </figure>
        <span class=" font-poppins"><?php echo the_title(); ?></span>
        <?php the_content() ?>
        <a href="<?php echo get_field('site') ?>" target="_blank">Ver site</a>
    </div>
</div>