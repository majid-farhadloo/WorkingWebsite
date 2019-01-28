<!-- <?php
/**
 * Template Name: Bio Template
*/

get_header(); ?>

	<div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">
      <section class="bio-template">
         
        <div class="image left">
            <?php 
               $image = get_field('image');
               
               if( !empty($image) ): ?>
            <img id="image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
         </div>

      </section>
   </main>
   <!-- #main -->
</div>
<!-- #primary -->
<?php get_footer(); ?>



<style type="text/css">
    
.main-navigation.sticky-header {
 	position: fixed;
    width: 100%;
    z-index: 100;
    top: 0;
    left: 0;
}

.content-area{
	height: 100%;
}

.shifted {
    margin-top: 54px;
}


.bio-template {
    top: 100px;
    bottom: 100px;
    left: 0;
    right: 0;
    overflow: auto;
}

 img{
   padding: 20px;
   margin-top: 10px;
   width: 55%;
   height: 550px;
   }
</style>
<!-- 
<div class="image left">
            <?php 
               $image = get_field('image');
               
               if( !empty($image) ): ?>
            <img id="image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
         </div>
         <div class="right">
            <h2 class="bio-title"><?php the_field('title'); ?></h2>
            <hr id="divider">
            <div class="des-section">
            <p class="description-section"><?php the_field('description'); ?></p>
            </div>
         </div> --> -->