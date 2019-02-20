<?php
/**
    * Template Name: Post Page Template
    */
   
get_header(); ?>

    <style type="text/css">
        * {
            margin: 0;
        }
        
        body {
            font-family: Lato;
        }

        #title{
            font-size: 3.5rem;
            padding: 2.5rem;
            text-align: center;
        }
    </style>
    <div id="primary" class="content-area-lander-page">
        <main id="main" class="site-main" role="main">


            <div id="title">OP-EDS</div>
            <hr id="divider" style="width: 50%; margin: auto;">
            <section id="call-to-action">
                <div class="indent clear">
                    <?php 
			$query = new WP_Query( 'postname' );
			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					echo '<div class="entry-content">';
					
					// the_content(
     //                    '<span class="moretext">Continue Reading ...
     //                     </span>');
                    echo "<br>";
                    $content = get_the_content(); 


                    if(strlen($content)<500+10) echo mb_strimwidth($content, 0, 650, '<br><span><a href="' . get_permalink() . '">[Read more]</a></span>');
                    $break_pos = strpos($content, ' ', 650);//find next space after desired length
                    $visible = substr($content, 0, $break_pos);
                    echo balanceTags($visible) . ' ... <br><span><a href="' . get_permalink() . '"><button style="margin:1.5rem; color:white;  background: rgb(75, 127, 168);">Read More</button></a></span>';

                    echo "<hr id='divider'>";
					echo '</div>';
				}
			}

			/* Restore original Post Data */
			wp_reset_postdata();
			?>
                </div>
                <!-- .indent -->
            </section>
            <!-- #call-to-action -->

        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <style type="text/css">
    	

	<?php 
	$image = get_field('img-bg');
	?>


.content-area-lander-page{
	 background:linear-gradient(0deg,rgba(255,255,255,0.3),rgba(75, 127, 168,0.35)),url('<?php echo $image['url'] ?>');
	 /*background-image: url(' ');*/
  	 background-size:auto;
  	 background-position: right -30px;
     background-repeat: no-repeat;

  	 /*max-height: 1200px;*/
}

.moretext{
    color: #999;
    font-size: 2.5rem;
    padding: 4rem;
    text-decoration: none;
    line-height: 10px;
    letter-spacing:0.5rem;
}


@media screen and (min-width: 320px) and (max-width: 480px) {

    .moretext{
    font-size: 1.5rem;
    }


   }
   @media screen and (min-width: 480px) and (max-width: 768px) {
    
    .moretext{
        
    font-size: 1.5rem;
    }


   }

   #divider {
         width: 100%;
         text-align: center;
         height: 5px;
         background: rgb(75, 127, 168);
         color: #123;
         margin-top: 15px;
         margin-bottom: 15px;
    }

    </style>

    <?php get_footer(); ?>