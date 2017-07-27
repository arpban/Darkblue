<?php get_header(); ?>
    <style>
        .btn {
            font-size: 14px;
            cursor: pointer;
            background-color: inherit;
            color: #666666;
            padding: 12px 20px;
            border: 1px solid #666666;
            border-radius: 5px;
            transition: all 0.3s;
        }
        
        .btn:hover {
            background-color: #ff8000;
            color: white;
            border-color: #ff8000;
        }
        
        .blog-post {
            margin-bottom: 70px;
        }
        
        .blog-post .text1 {
            margin-top: 20px;
        }
        
        .blog-post .text2 {
            margin-bottom: 40px;
        }
        
        .blog-img * {
            margin-left: auto;
            margin-right: auto;
        }
        
        @media (max-width:990px) {
            .blog-post .text1 {
                text-align: center !important;
            }
            .blog-post .text2 {
                text-align: center !important;
            }
        }
        
        @media (max-width:600px) {
            .blog-post .blog-img {
                padding: 0px;
            }
        }
    </style>
    <div id="work">
        <div class="container-fluid ">
            <?php
                    $x = 0;
                   while ( have_posts() ) : the_post(); 
                
                    if($x==0){
                     get_template_part('blog1'); 
                     $x=1;
                    }
                    else{
                    get_template_part('blog2');
                    $x=0;
                    }
                    ?>
                <?php
    endwhile;

                    ?>
        </div>
    </div>
    <?php get_footer(); ?>