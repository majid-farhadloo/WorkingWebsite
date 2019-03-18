<?php
/**
    * Template Name: Post Page Template
    */
   
get_header(); ?>

    <div id="primary" class="content-area-lander-page">
        <main id="main" class="site-main" role="main">

          <section class="bg">
            <?php 
                 $image = get_field('img-bg');
            if( !empty($image) ): ?>
                <img id="image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>

          </section>

          <section class="container">
                <div id="title">OP-EDS</div>

                <div class="divider_header">
                <hr id="titleDivider" style="width: 50%; margin: auto;">
                </div>
                <section id="call-to-action">
                    <div class="indent clear">
                      <?php
                      $args = array('post_type' => 'post'); 
    			            $query = new WP_Query( $args);
                    	// The Loop
                			if ( $query->have_posts() ) {
                          while ( $query->have_posts() ) {
                					$query->the_post();
                					echo '<div class="entry-content">';
                          echo "<br>";
                          $content = get_the_content(); 
                          if(strlen($content)<500+10) echo mb_strimwidth($content, 0, 650, '<br><span><a href="' . get_permalink() . '">[Read more]</a></span>');
                          $break_pos = strpos($content, ' ', 650);//find next space after desired length
                          $visible = substr($content, 0, $break_pos);
                          echo balanceTags($visible) . ' ... <br><span><a href="' . get_permalink() . '"><button class="readmore" style="margin:1.5rem; color:white;  background: rgb(75, 127, 168);">Read More</button></a></span>';

                        echo "<hr id='divider2'>";
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

         </section>
               <!-- container  -->

        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->



<style type="text/css">


/******************************************** Font-Family-setup ***************************************************************/

* {
    font-family: 'Montserrat';
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Montserrat';
    margin: 0 auto;
}


/******************************************** overall setting ***************************************************************/
#title {
    margin-top: -100vh;
    font-size: 3.5rem;
    padding: 2.5rem;
    text-align: center;
    /*transform: translateY(2.5);*/
}


#main{
    background-size: 0 auto;
    background-position: 1500px top;
    background: linear-gradient(0deg, rgba(255, 255, 255, 0.3), rgba(75, 127, 168, 0.35));
    background-repeat: no-repeat;
    object-fit: cover;

    /*float: none;*/
    /*transform: scale(1);*/
}

.moretext {
    color: #999;
    font-size: 2.5rem;
    padding: 4rem;
    text-decoration: none;
    line-height: 10px;
    letter-spacing: 0.5rem;
}



.bg #image{
  margin-left: 72vw;
  margin-top: 15vh;

}


.bg{

  /*position: relative;*/
  /*max-height:00px;*/
  /*overflow-y: scroll;*/
  /*max-height: 6500px;*/
  /*min-height: 800px;*/
}



#call-to-action{

  margin-top: 0vh;
  /*max-height: 9400px;*/
}


.entry-content{

  line-height: 3.3rem;
  margin: auto;
   /*margin-top: -150vh;*/

}

.readmore{
  font-size: 1.25rem;
}



#titleDivider,#divider2 {
    width: 100%;
    text-align: center;
    height: 5px;
    background: rgb(75, 127, 168);
    color: #123;
    margin-top: 15px;
    margin-bottom: 15px;
}
    



/******************************************** responsive ***************************************************************/

@media screen and (min-width: 320px) and (max-width: 1160px) {
   

    .bg #image{
      
      display: none;

    }

    #title {
    margin-top: 0vw;
  }

  .entry-content{

    font-size: 1.5rem;

  }

  #call-to-action{
    margin-left: 0vw;
    width: 100%;
  }

}

@media screen and (min-width: 1161px) and (max-width: 1335px) {
    .bg #image{
      
      width: 200px;
      height: 800px;
      margin-left: 70vw;

    }

    #title{
      margin-top: -90vh;
      margin-left: -20vw;
    }


    .entry-content{

    margin-left: 235px;
    }

    #call-to-action{
     width: 70%;


    } 
    

    .divider_header{

      margin-left: -140px;
    }
}


@media screen and (min-width: 1335px) and (max-width: 1900px) {
    .bg #image{
      
      width: 200px;
      height: 800px;
      margin-left: 75vw;

    }

    #title{
      margin-top: -90vh;
      margin-left: -150px;
    }


    .entry-content{

    margin-left: 235px;
    }

    #call-to-action{
     width: 70%;


    } 
    

    .divider_header{

      margin-left: -140px;
    }
}


@media screen and (min-width: 2150px) and (max-height: 1300px){
    .bg #image{
      
      display: block;
      margin: auto;
      margin-right: 12vw;
    }

    #call-to-action{
      /*margin-left: 72vw;*/
      margin-top: 0vh;

  }

   #title{
      margin-top: -70vh;
      /*margin-top: 0vh;*/
      /*min-height: 3000px;*/
    }


}



@media screen and (min-width: 2150px) and (min-height: 1301px){
    .bg #image{
      
      display: block;
      margin: auto;
      margin-right: 12vw;
    }

    #call-to-action{
      /*margin-left: 72vw;*/
      margin-top: 0vh;

  }

   #title{
      margin-top: -30vh;
      /*margin-top: 0vh;*/
      /*min-height: 3000px;*/
    }


}

</style>

    <?php get_footer(); ?>