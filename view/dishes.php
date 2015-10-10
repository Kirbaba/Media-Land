<?php if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p5">
            <div class="production__item">
                <?php echo get_the_post_thumbnail(get_the_ID(), 'full');?>
                <a href="<?php echo get_the_permalink(get_the_ID());?>"><?php echo get_the_title() ?></a>
            </div>
        </div>
        <?php
    endwhile;
}
wp_reset_query(); ?>