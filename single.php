<?php get_header(); ?>
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            clear: both;
            font-weight: 300;
            margin: 56px 0 28px;
        }
        
        h1 {
            font-size: 33px;
            line-height: 1.2727272727;
        }
        
        h2 {
            font-size: 28px;
            line-height: 1.25;
        }
        
        h1:first-child,
        h2:first-child,
        h3:first-child,
        h4:first-child,
        h5:first-child,
        h6:first-child {
            margin-top: 30;
        }
        
        .single-post p {
            line-height: 1.5em !important;
            font-size: 16px;
        }
        
        small {
            font-size: 14px;
        }
        
        .single-post-img img {
            margin-left: auto;
            margin-right: auto;
        }
        
        .single-post-img {
            margin-bottom: 20px;
        }
        
        .single-post h2 {}
        
        @media (max-width:600px) {
            .single-post-img {
                padding: 0px;
            }
            .single-post p {
                line-height: 1.5em !important;
                font-size: 14px;
            }
        }
    </style>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content' ); ?>
            <?php endwhile; ?>
                <?php get_footer(); ?>