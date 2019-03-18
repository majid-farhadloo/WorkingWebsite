<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Simone
 */



get_header(); ?>
    
    <div id="primary" class="content-area lander-page">
        <main id="main" class="site-main" role="main">

            <section id="slide-show">
                <!-- <h2>Title</h2> -->
                <div id="high-width">
                    <?php echo do_shortcode('[masterslider id="7"]'); ?>
                </div>
                <div id="low-width" onload="switch();">
                    <?php echo do_shortcode('[masterslider id="5"]'); ?>
                </div>
            </section>


            <!-- *********************************************** OP-EDS ******************************* -->
            <section id="testimonials">
                <div class="indent clear">
                    <section class="bordered-title">
                    <div class="title">Op-Eds</</div>
                    </section>
                        <!-- <hr id="divider"> -->
                        <br>

                         <?php 

                            // query
                            $the_query = new WP_Query(array(
                                // 'post_type'         => 'event',
                                'posts_per_page'    => 3,
                                // 'meta_key'          => 'featured',
                                'meta_key'          => 'date',
                                'orderby'           => 'meta_value'
                                // 'order'             => 'DESC'
                            ));

                                if( $the_query->have_posts() ){
                                 echo '<ul class="testimonials">';

                                 while( $the_query->have_posts() ) {
                                $the_query->the_post();
                                 echo '<li class="clear">';
                                 echo '<aside class="testimonial-text">';
                                        // echo '<h3 class="testimonial-name">' . get_the_title() . '</h3>';
                                        echo '<div class="testimonial-excerpt">';
                                        // the_content('');
                                        $content = get_the_content();
                                         echo '<div class="testimonial-content">'; 
                                        if(strlen($content)<300+10) echo mb_strimwidth($content, 0, 350, '<br><span><a href="' . get_permalink() . '">[Read more]</a></span>');
                                        $break_pos = strpos($content, ' ', 380);//find next space after desired length
                                        $visible = substr($content, 0, $break_pos);   
                                        // $date = get_field('date') ? 'class="date"' : '';
                                        $class = get_field('featured') ? 'class="featured"' : '';
                                        echo '</div>'; 
                                        echo balanceTags($visible) . ' ... <br><span><a style ="font-size:1.5rem; padding:1.5rem; color:#188;" href="' . get_permalink() . '">Read More ...</a></span>';
                                        echo '</div>';
                                        echo '</aside>';
                                        echo '</li>';
                                    }
                                    echo '</ul>';
                                }
                                wp_reset_postdata(); ?>


                                <a rel="pulse" class="button" href="/dariusassemi/post/">
                                    <button class="button-style pulse">View All</button>
                                </a>

                    </div>

            </section>
            <br>

              <!-- *********************************************** videos ******************************* -->
            <section id="videos">
                <div class="indent clear">
                    <section class="bordered-title">
                    <div class="title">Videos</</div>
                    </section>
                    <br>
                    <div class="row">
                          <div class="col-6">
                            <div id="video1">
                                 <?php 
                                    $image = get_field('video1-image');
                                    if( !empty($image) ): ?>
                                        <a href="<?php the_field ('video1-url') ?>"><button id="bgTumbnailVideo" style="background-image: url('<?php echo $image['url']; ?>');"></button>
                                        <div  class="videocaption">
                                        <p>​<?php the_field ('video_caption1') ?></p>
                                        </div>
                                        </a>    
                                    <?php endif; ?> 
                            </div>

                            <div id="video1">
                                 <?php 
                                    $image = get_field('video2-image');
                                    // $link = get_field('video1_caption');
                                    if( !empty($image) ): ?>
                                        <a href="<?php the_field ('video2-url') ?>"><button id="bgTumbnailVideo" style="background-image: url('<?php echo $image['url']; ?>');"></button>
                                        <div  class="videocaption">    
                                        <p>​<?php the_field ('video_caption2') ?></p></a>
                                        </div>    
                                    <?php endif; ?> 
                            </div>

                            <div id="video1">
                                 <?php 
                                    $image = get_field('video3-image');
                                    // $link = get_field('video1_caption');
                                    if( !empty($image) ): ?>
                                        <a href="<?php the_field ('video3-url') ?>"><button class="video_three" id="bgTumbnailVideo" style="background-image: url('<?php echo $image['url']; ?>');"></button>
                                        <div  class="videocaption">
                                        <p>​<?php the_field ('video_caption3') ?></p>
                                        </div>
                                        </a>    
                                    <?php endif; ?> 
                            </div>


                             
                         </div>
                    </div>


                     <br>

                    <a rel="pulse" class="button" href="videogallerysection/">
                        <button class="button-style pulse">View All</button>
                    </a>

                </div>
            </section>        


            <section id="websites">
                <div class="indent clear">
                    <section class="bordered-title">
                    <div class="title">Website</</div>
                    </section>
                        <!-- <hr id="divider"> -->

                        <br>

                        <ul class="websites-section">
                            <li id="website">
                                <br>

                                <a href="https://www.gvhomes.com/"><img class="web1" width="350" height="250" src="/dariusassemi/wp-content/uploads/2019/01/Granville-Homes-2015-logo.png"></a>

                            </li>
                            <li id="website">

                                <br>
                                <a href="http://www.gvhomeofhope.com/news-dates/"><img class="web2" width="350" height="250" src="/dariusassemi/wp-content/uploads/2019/01/2010_HOHLogo.png"></a>

                            </li>

                            <li id="website">
                                <br>

                                <a href="https://gvwire.com/"><img class="web3" width="350" height="250" src="/dariusassemi/wp-content/uploads/2019/01/GV-Wire-2018_web.png"></a>

                            </li>
                        </ul>
                    </div>
                    <!-- .indent -->
            </section>
            <!-- #testimonials -->
            </section>

        </main>
        <!-- #main -->
        </div>
        <!-- #primary -->

        <?php get_footer(); ?>