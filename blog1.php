<div class="row blog-post">
    <div class="col-xs-12 col-md-6 blog-img">
        <?php
    
         the_post_thumbnail('full',array('class'=>'img-responsive')); 
    ?>
    </div>
    <div class="col-xs-12 col-md-6 text1">
        <h2><?php the_title(); ?></h2> <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time(); ?></small>
        <p>
            <?php the_excerpt(); ?>
        </p>
        <br> <a href="<?php echo esc_url(get_permalink()) ; ?>" class="btn">Show more</a> </div>
</div>
<hr>