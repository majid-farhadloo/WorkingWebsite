<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package simone
 */
?>

    </div>
    <!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <?php get_sidebar( 'footer' ); ?>
            <div class="site-info">
                <?php do_action( 'simone_credits' ); ?>
                    <?php
			printf(
				/* translators: %s = text link: WordPress, URL: http://wordpress.org/ */
				__( 'Copyright 2018. %s', 'simone' ),
				'<a href="http://www.dariusassemi.com/" rel="generator">' . esc_attr__( 'Darius Assemi', 'simone' ) . '</a>'
				); ?>
                        <span class="sep"> | All Rights Reserved</span>
                      <!--   <?php
			printf(
				/* translators: %1$s = text link: Simone, URL: http://wordpress.org/themes/simone/, %2$s = text link: mor10.com, URL: http://mor10.com/ */
				__( 'Theme: %1$s by %2$s', 'simone' ),
                                '<a href="http://www.dariusassemi.com/" rel="nofollow">' . esc_attr( 'Simone', 'simone' ) . '</a>',
				'<a href="http://mor10.com/" rel="designer nofollow">' . esc_attr__( 'mor10.com', 'simone' ) . '</a>' ); ?>
            </div> -->
            <!-- .site-info -->
            <a href="#primary"><button style="float: right; background-color:rgba(90, 180, 168,0.5);; padding: 1.1rem;" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button></a>

             <!-- onclick="topFunction()" -->

    </footer>
    <!-- #colophon -->
    </div>
    <!-- #page -->
    
    <?php wp_footer(); ?>

        </body>

        </html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function () {
     $(".model-links").click(function () {
     $(".model-links").removeClass("model-highlight");
     $(this).addClass("model-highlight");
    });
   });
   
   $("a[href='#primary']").click(function() {
   $("html, body").animate({ scrollTop: 0 }, "slow"); 
   return false;
   });
</script>