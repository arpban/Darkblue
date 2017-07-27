<?php get_header(); ?>
    <style>
        img.wp-post-image {
            display: block;
            max-width: 100%;
            height: auto;
        }
        
        .img-box {
            height: auto;
        }
        
        .img-text {
            background-color: white;
        }
        
        h1,
        h2,
        h3 {
            margin-top: 20px;
        }
        
        h2 {
            font-size: 24px;
        }
    </style>
    <div id="work">
        <div class="container-fluid ">
            <div class="row ">
                <?php $count=0; ?>
                    <?php
                   while ( have_posts() ) : the_post(); ?>
                        <?php if($count%3==0){
                    echo '</div>';
                    echo '<div class="row">';
                    
                    } ?>
                            <div class="col-xs-12 col-sm-6 col-md-4 img-plus-text">
                                <?php
    
    echo '<a href="' .esc_url(get_permalink()). '">'; ?>
                                    <div class="img-box">
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                    <div class="img-text">
                                        <h2><?php the_title(); ?></h2>
                                        <p>
                                            <?php the_excerpt(); ?>
                                        </p>
                                    </div>
                                    </a>
                            </div>
                            <?php
            $count++;
            endwhile;

                    ?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>