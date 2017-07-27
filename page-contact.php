<style type="text/css">
    svg {
        position: relative;
        top: 5px;
        margin-right: 10px;
    }
    
    #contact .contact-info-form {
        padding: 50px;
    }
    
    @media (max-width:600px) {
        #contact .contact-info-form {
            padding: 50px 20px;
        }
    }
</style>
<?php get_header(); ?>
    <div id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 contact-info-form">
                    <!-- contact info -->
                    <div id="address" style="margin-top:10px">
                        <svg fill="#666666" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
                            <path d="M0 0h24v24H0z" fill="none" /> </svg> Gurgaon, India </div> <a href="" class="icon"><span class="genericon genericon-twitter"></span></a> <a href="" class="icon"><span class="genericon genericon-facebook"></span></a> <a href="" class="icon"><span class="genericon genericon-pinterest-alt"></span></a> <a href="" class="icon"><span class="genericon genericon-instagram"></span></a>
                    <!-- contact info ends -->
                    <?php if(have_posts()): 
                while(have_posts()): the_post();
                get_template_part('contactform');
                endwhile;
                endif;
                ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQXMvDFmKXZhLmy8ASBESXJH1d4gbhLiA&callback=initMap" async defer></script>
    <?php get_footer(); ?>