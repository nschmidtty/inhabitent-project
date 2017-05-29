<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */
?>
<header>
    <link href=<?php bloginfo('stylesheet_url') ?> rel="stylesheet">
</header>

        </div><!-- #content -->

            <footer id="colophon" class="site-footer" role="contentinfo">
                <div class = "footer-container container">

                <div class="site-info">
                        <div class = "contact-info">
                                <h1>Contact Info</h1>
                                <p><a href="">info@inhabitent.com</a></p>
                                <p><a href="">778-456-7891</a></p>
                                <p><a href="">facebook twitter instagram</a></p>
                        </div>
                        <div class = "business-hours">
                                <h1>Business Hours</h1>
                                <p><span>Monday-Friday</span>: 9am to 5pm</p>
                                <p><span>Saturday</span>: 10am to 2pm</p>
                                <p><span>Sunday</span>: Closed</p>
                        </div>
                        <div classs = "logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class='footer-logo' src= <?php echo get_template_directory_uri() . '/media/logos/inhabitent-logo-text.svg' ?> alt=""></a>  
                        </div>
                        
                </div><!-- .site-info -->
                
                                </div>
                                <p>Copyright 2016 <span>inhabitent<span></p>
            </footer><!-- #colophon -->
        </div>
        </div><!-- #page -->

        <?php wp_footer(); ?>

    </body>
</html>
