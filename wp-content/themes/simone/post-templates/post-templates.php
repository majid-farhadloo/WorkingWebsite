    <?php
/*
* Template Name: Post Template
* Template Post Type: post
*/

get_header();
?> 
<style type="text/css">
/******************************************** layout responsive ***************************************************************/

#primary {
    background: linear-gradient(0deg, rgba(255, 255, 255, 0.3), rgba(75, 127, 168, 0.2));
}

@media screen and (max-width: 1539px) and (min-width: 1160px) {
    .content-area-lander-page {
        margin-left: 0;
        padding-left: 0;
    }
}

@media screen and (max-width: 500px) and (min-width: 575px) {
    .content-area-lander-page {
        margin-left: 0;
        padding-left: 0;
    }
}


/******************************************** font-family setting ***************************************************************/

body {
    font-family: Montserrat;
}


/******************************************** main setting ***************************************************************/

#post {
    width: 80%;
    margin: auto;
    font-size: 1.75rem;
    text-align: justify;
    margin-top: 0vh;
}

#post a {
    color: rgba(24, 127, 230, 0.8);
}

#the_title {
    padding: 2rem;
    font-size: 3rem;
    font-weight: bold;
    text-align: center;
}

#date {
    padding: 2rem;
    font-size: 1.5rem;
    font-weight: bold;
    text-align: center;
}

#author {
    font-size: 1.5rem;
    font-weight: bold;
    text-align: center;
}

.img {
    /*margin: auto;*/
    margin-left: 30vw;
}

#share-this {
    margin: auto;
    margin-top: 0vh;
    width: 75%;
}

.feature-img {
    margin-left: -10vw;
    clear: both;
}


/* style for h2 heading tag */

h2.heading_rel_posts {
    padding: 0px;
    margin: 0px;
    font-size: 1.4em;
    color: #666;
}

#source {
    text-align: center;
    padding: 2rem;
    margin-left: 5vw;
}


/******************************************** page responsive components ***************************************************************/

@media screen and (min-width: 320px) and (max-width: 600px) {
    #post {
        font-size: 1.5rem;
        text-align: justify;
    }
    .img {
        width: 100%;
        margin: auto;
    }
}

@media screen and (min-width: 601px) and (max-width: 768px) {
    #post {
        font-size: 1.5rem;
        text-align: justify;
    }
    .img {
        width: 75%;
        margin-left: 15vw;
    }
}

@media screen and (min-width:767px) and (max-width:1700px) {
    #post {
        font-size: 1.65rem;
        text-align: justify;
        line-height: 2.95rem;
    }
    .featureImg.wp-post-image {
        width: 65%;
        margin-left: -5vw;
    }
    /*  .wp-post-image {
        width: 65%;
        margin-left: 0vw;
    }*/
    #sharethis {
        width: 50%;
        margin: auto;
    }
}

</style>



    <div style="margin: auto;"></div>
    <div id="primary" class="content-area-lander-page">
    <main id="main" class="site-main" role="main"> <?php get_header();?>

   


    
    <?php if (have_posts()): while (have_posts()): the_post();?> 
        <?php if (get_the_post_thumbnail()) {
        echo "<div class= 'img'>";
        the_post_thumbnail('medium_large', array( 'class'=> 'featureImg'));
        // set_post_thumbnail_size( 600, 600, true);
        echo "</div>";
    }?> 

    <br>
    <div id="share-this"><?php echo sharethis_inline_buttons();?></div>
    <div id="the_title"> <?php the_title();?></div>
    <br>

    <div class="post_info">
    <?php $date = get_field('date');  ?>
    <?php $author= get_field('author');
    $author_name= get_the_author_meta('display_name');
    $link = get_field('link');
    // echo "<a href='http://localhost/dariusassemi/author/".$author_name."'";

    echo '<div id="author">' . 'Written by: ' . $author . "</a>" . ", " . $date. '</div>';?>


    <!-- echo "<a href= '/dariusassemi/author/" . $author_name . "'>" . '<div id="author">' . 'Written by ' . $author . "</a>" . ", " . $date. '</div>';?> -->

    <?php 
    $link = get_field('link');
    if( $link ): ?>
    <a class="button" href="<?php echo $link; ?>"><div style="text-align: center;"> Source: <?php the_field('source'); ?></div></a>
    <?php endif; ?>
    </div>
    <br>

    <div id="post"><?php the_content();?></div> 
    <!-- <div id="date"><?php echo get_the_date();?></div>  -->

	<?php endwhile;?> 
	<?php endif;?>


    <?php // If comments are open or we have at least one comment, load up the comment template
    if (comments_open() || '0' !=get_comments_number()): comments_template();
    endif;?> 

 

    </main>
    <!-- main -->
	</div>
    <!-- #primary -->
    <?php get_footer();?>



<!--    echo " <div id= 'the_title'>Related Posts:</h2>";
        echo "<br />";
        echo "<div class='relatedposts'>";
        dfw_related_posts();
       	dfw_related_posts('tag');
        echo "</div>";
        echo "<a href= 'http://localhost/dariusassemi/authorpage'>".'<div id="author">'. 'Written by: '. $author_name . '</div>' . "</a>"
        "<div id='author'>"."Written by:". $author_name ."</div>"."</a>"; -->

<!-- 
    <style type="text/css">

     #related-post {
        font-size: 1.5rem;
    }
    .relatedposts ul {
        list-style: none;
    }
    .wp-post-image {
        /*margin-left: 15vw;*/
        padding: 2rem;
    }
    .relatedthumb {
        margin: 0 1px 0 1px;
        float: left;
    }
    .relatedthumb img {
        margin: 0 0 3px 0;
        padding: 0;
    }
    .relatedthumb a {
        color: #333;
        text-decoration: none;
        display: block;
        padding: 4px;
        width: 150px;
    }
    .relatedthumb a:hover {
        background-color: #ddd;
        color: #000;
    }

    </style> -->

    <!-- if I need to have post navigation for hte different post in the same page (go to next, go to prev) simone_post_nav() -->
