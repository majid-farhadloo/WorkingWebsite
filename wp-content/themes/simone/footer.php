<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package simone
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            <?php get_sidebar( 'footer' ); ?>
		<div class="site-info">
			<?php do_action( 'simone_credits' ); ?>
			<?php
			printf(
				/* translators: %s = text link: WordPress, URL: http://wordpress.org/ */
				__( 'Copyright 2019 %s', 'Darius Assemi' ),
				'<a href="http://www.dariusassemi.com/home.html" rel="generator">' . esc_attr__( 'Darius Assemi', 'simone' ) . '</a>'
				); ?>
			<span class="sep"> | All Rights Reserved. </span>
			<!-- <?php
			printf(
				/* translators: %1$s = text link: Simone, URL: http://wordpress.org/themes/simone/, %2$s = text link: mor10.com, URL: http://mor10.com/ */
				__( 'Theme: %1$s by %2$s', 'simone' ),
                                '<a href="http://wordpress.org/themes/simone/" rel="nofollow">' . esc_attr( 'Simone', 'simone' ) . '</a>',
				'<a href="http://mor10.com/" rel="designer nofollow">' . esc_attr__( 'mor10.com', 'simone' ) . '</a>' ); ?> -->
		</div><!-- .site-info -->
		<button style="float: right; background-color: #999;" onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>