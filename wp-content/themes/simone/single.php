<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Simone
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<section style="margin: auto; text-align: justify; font-size: 1rem;">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>
                    
                       <?php 
                        if ( get_the_author_meta( 'description' ) ) { 
                            echo '<hr>';
                            echo '<div class="author-index shorter">';
                            get_template_part('inc/author','box');
                            echo '</div>';
                        }
                        ?>

			<?php simone_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<style type="text/css">
	
	#primary{
   /*background:linear-gradient(0deg,rgba(255,255,255,0.8),rgba(10,10,10,0.7));*/
   background:linear-gradient(0deg,rgba(255,255,255,0.3),rgba(255,250,220,0.7));
   }

</style>

<?php get_footer(); ?>