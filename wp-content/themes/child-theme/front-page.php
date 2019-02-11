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
                                $args = array(
                                    'posts_per_page' => 3,
                                    'orderby' => 'date'
                                    // 'category_name' => 'testimonials'
                                );

                                $query = new WP_Query( $args );
                                // The Loop
                                if ( $query->have_posts() ) {
                                    echo '<ul class="testimonials">';
                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                        echo '<li class="clear">';
                                        // echo '<figure class="testimonial-thumb">';
                                        // if ( get_the_post_thumbnail() ) {
                                        //  the_post_thumbnail( "full", array("class" => "testimonial-img") );
                                        // } else {
                                        // echo '<img src="http://localhost/dariusassemi/wp-content/uploads/2018/11/clever-visuals-712887-unsplash-1.jpg">';
                                        // }
                                        // // the_post_thumbnail('testimonial-mug');
                                        // echo '</figure>';
                                        echo '<aside class="testimonial-text">';
                                        // echo '<h3 class="testimonial-name">' . get_the_title() . '</h3>';
                                        echo '<div class="testimonial-excerpt">';
                                        // the_content('');
                                        $content = get_the_content();
                                         echo '<div class="testimonial-content">'; 
                                        if(strlen($content)<300+10) echo mb_strimwidth($content, 0, 350, '<br><span><a href="' . get_permalink() . '">[Read more]</a></span>');
                                        $break_pos = strpos($content, ' ', 380);//find next space after desired length
                                        $visible = substr($content, 0, $break_pos);
                                        echo '</div>'; 
                                        echo balanceTags($visible) . ' ... <br><span><a style ="font-size:2rem; padding:1.5rem; color:#188;" href="' . get_permalink() . '">Read More ...</a></span>';
                                        echo '</div>';
                                        echo '</aside>';
                                        echo '</li>';
                                    }
                                    echo '</ul>';
                                }

                                /* Restore original Post Data */
                                wp_reset_postdata();
                                ?>

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
                        <?php
                            $image1 = get_field('video1-image');
                            $image2 = get_field('video2-image');
                            $image3 = get_field('video3-image');
                            ?>

                            <!-- <hr id="divider"> -->

                            <ul class="videos-section">
                                <li id="video">
                                    <br>
                                   
                                   <a href="<?php  the_field ('video1-url') ?>" data-toggle="lightbox">
                                        <img class="v-cover1 video-image img-fluid" style="border-radius: 20%; width:400px; height:400px;" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>"/>
                                    </a>
            

                                </li>

                                <li id="video">
                                    <br>
                                    <a href="<?php  the_field ('video2-url') ?>" data-toggle="lightbox">
                                        <img class="v-cover1 video-image img-fluid" style="border-radius: 20%; width:400px; height:400px;" src="<?php echo $image2['url']; ?>" alt="<?php echo $image1['alt']; ?>"/>
                                    </a>

                                </li>

                                <li id="video">
                                    <br>
                                    <a href="<?php  the_field ('video3-url') ?>" data-toggle="lightbox">
                                        <img class="v-cover1 video-image img-fluid" style="border-radius: 20%; width:400px; height:400px;" src="<?php echo $image3['url']; ?>" alt="<?php echo $image1['alt']; ?>"/>
                                    </a>
                                </li>

                            </ul>

                            <!-- <div>
                                <a rel="pulse" class="button pulse" href="http://localhost/">
                                    <button>View All</button>
                                </a>
                            </div> -->

                            <br>

                            <a rel="pulse" class="button" href="dariusassemi/videos/">
                                    <button class="button-style pulse">View All</button>
                            </a>

                    </div>
            </section>
            <br>

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