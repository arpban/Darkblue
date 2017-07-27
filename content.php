<article id="work" class="single-post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 single-post-img">
                <?php the_post_thumbnail('full',array('class'=>'img-responsive ')); ?>
            </div>
            <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 ">
                <h2 class="text-center"><?php the_title(); ?></h2> <small class="text-center">Posted on: <?php the_time('F j, Y'); ?> at <?php the_time(); ?> </small>
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
            <?php

		if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
        ?>
        </div>
    </div>
</article>