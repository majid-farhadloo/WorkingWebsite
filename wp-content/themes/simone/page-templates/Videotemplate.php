<?php
   /**
    * Template Name: template for Video page files
    */
   
   get_header(); ?>
<script type="text/javascript"></script>
<style type="text/css">
</style>
<div id="primary" class="content-area.lander-page">
   <main id="main" class="site-main" role="main">
      <section>
         <div class="select-model">
            <h1>A selection of recent public addresses and interviews.</h1>
         </div>
         <div class="model-tour" style="display: none">
            <iframe name="model-selection" id="model-selection" width="100%" height="100%" frameborder="0" allowfullscreen allow="vr"></iframe>
         </div>
         <div class="video-tour">
            <iframe name="video-selection" id="video-selection" width="100%" height="100%" frameborder="0" allowfullscreen allow="vr"></iframe>
         </div>
         <hr id="divider">
         <div class="row">
            <div id="animation" class="column category">
               <?php 
                  $link = get_field('video1_caption');
                  $img = get_field('pic1');
                  $src = get_field('video_source1');
                  if( $link ): ?>
               <a href="#video-selection" target="model-selection" 
                  onclick="window.frames[1].location.href='<?php echo $src; ?>'; return true;">
                  <figure>
                     <div>
                        <img class="place-holder" src="<?php echo $img['url']; ?>">
                        <figcaption class="caption"><?php echo $link; ?></figcaption>
                     </div>
                  </figure>
               </a>
               <?php endif; ?>
            </div>
            <div id="animation" class="column category">
               <?php 
                  $link = get_field('video2_caption');
                  // $image = get_field('link2');
                  $img = get_field('pic2');
                  $src = get_field('video_source2');
                  if( $link ): ?>
               <a href="#video-selection" target="model-selection" 
                  onclick="window.frames[1].location.href='<?php echo $src; ?>'; return true;">
                  <figure>
                     <div>
                        <img class="place-holder" src= "<?php echo $img['url']; ?>">
                        <figcaption class="caption"><?php echo $link; ?></figcaption>
                     </div>
                  </figure>
               </a>
               <?php endif; ?>
            </div>
            <div id="animation" class="column category">
               <?php 
                  $link = get_field('video3_caption');
                  // $image = get_field('link3');
                  $img = get_field('pic3');
                  $src = get_field('video_source3');
                  if( $link ): ?>
               <a href="#video-selection" target="model-selection" 
                  onclick="window.frames[1].location.href='<?php echo $src; ?>'; return true;">
                  <figure>
                     <div>
                         <img class="place-holder" src="<?php echo $img['url']; ?>">
                        <figcaption class="caption"><?php echo $link; ?></figcaption>
                     </div>
                  </figure>
               </a>
               <?php endif; ?>
            </div>
            <div id="animation" class="column category">
               <?php 
                  $link = get_field('video4_caption');
                  // $image = get_field('link4');
                  $img = get_field('pic4');
                  $src = get_field('video_source4');
                  if( $link ): ?>
               <a href="#video-selection" target="model-selection" 
                  onclick="window.frames[1].location.href='<?php echo $src; ?>'; return true;">
                  <figure>
                     <div>
                         <img class="place-holder" src="<?php echo $img['url']; ?>">
                        <figcaption class="caption"><?php echo $link; ?></figcaption>
                     </div>
                  </figure>
               </a>
               <?php endif; ?>
            </div>
            <div id="animation" class="column category">
               <?php 
                  $link = get_field('video5_caption');
                  // $image = get_field('link5');
                  $img = get_field('pic5');
                  $src = get_field('video_source5');
                  if( $link ): ?>
               <a href="#video-selection" target="model-selection" 
                  onclick="window.frames[1].location.href='<?php echo $src; ?>'; return true;">
                  <figure>
                     <div>
                         <img class="place-holder" src="<?php echo $img['url']; ?>">
                        <figcaption class="caption"><?php echo $link; ?></figcaption>
                     </div>
                  </figure>
               </a>
               <?php endif; ?>
            </div>
            <div id="animation" class="column category">
               <?php 
                  $link = get_field('video6_caption');
                  // $image = get_field('link6');
                  $img = get_field('pic6');
                  $src = get_field('video_source6');
                  if( $link ): ?>
               <a href="#video-selection" target="model-selection" 
                  onclick="window.frames[1].location.href='<?php echo $src; ?>'; return true;">
                  <figure>
                     <div>
                        <img class="place-holder" src="<?php echo $img['url']; ?>">
                        <figcaption class="caption"><?php echo $link; ?></figcaption>
                     </div>
                  </figure>
               </a>
               <?php endif; ?>
            </div>
            <div id="animation" class="column category">
               <?php 
                  $link = get_field('video7_caption');
                  // $image = get_field('link7');
                  $img = get_field('pic7');
                  $src = get_field('video_source7');  
                  if( $link ): ?>
               <a href="#video-selection" target="model-selection" 
                  onclick="window.frames[1].location.href='<?php echo $src; ?>'; return true;">
                  <figure>
                     <div>
                        <img class="place-holder" src="<?php echo $img['url']; ?>">
                        <figcaption class="caption"><?php echo $link; ?></figcaption>
                     </div>
                  </figure>
               </a>
               <?php endif; ?>
            </div>
            <div id="animation" class="column category">
               <?php 
                  $link = get_field('video8_caption');
                  // $image = get_field('link8');
                  $img = get_field('pic8');
                  $src = get_field('video_source8');
                  if( $link ): ?>
               <a href="#video-selection" target="model-selection" 
                  onclick="window.frames[1].location.href='<?php echo $src; ?>'; return true;">
                  <figure>
                     <div>
                        <img class="place-holder" src="<?php echo $img['url']; ?>">
                        <figcaption class="caption"><?php echo $link; ?></figcaption>
                     </div>
                  </figure>
               </a>
               <?php endif; ?>
            </div>
            <div id="animation" class="column category">
               <?php 
                  $link = get_field('video9_caption');
                  // $image = get_field('link9');
                  $img = get_field('pic9');
                  $src = get_field('video_source9');
                  if( $link ): ?>
               <a href="#video-selection" target="model-selection" 
                  onclick="window.frames[1].location.href='<?php echo $src; ?>'; return true;">
                  <figure>
                     <div>
                        <img class="place-holder" src="<?php echo $img['url']; ?>">
                        <figcaption class="caption"><?php echo $link; ?></figcaption>
                     </div>
                  </figure>
               </a>
               <?php endif; ?>
            </div>
            <div id="animation" class="column category">
               <?php 
                  $link = get_field('video10_caption');
                  // $image = get_field('link10');
                  $img = get_field('pic10');
                  $src = get_field('video_source10');
                  if( $link ): ?>
               <a href="#video-selection" target="model-selection" 
                  onclick="window.frames[1].location.href='<?php echo $src; ?>'; return true;">
                  <figure>
                     <div>
                         <img class="place-holder" src="<?php echo $img['url']; ?>">
                        <figcaption class="caption"><?php echo $link; ?></figcaption>
                     </div>
                  </figure>
               </a>
               <?php endif; ?>
            </div>
            <div id="animation" class="column category">
               <?php 
                  $link = get_field('video11_caption');
                  // $image = get_field('link11');
                  $img = get_field('pic11');
                  $src = get_field('video_source11');
                  if( $link ): ?>
               <a href="#video-selection" target="model-selection" 
                  onclick="window.frames[1].location.href='<?php echo $src; ?>'; return true;">
                  <figure>
                     <div>
                         <img class="place-holder" src="<?php echo $img['url']; ?>">
                        <figcaption class="caption"><?php echo $link; ?></figcaption>
                     </div>
                  </figure>
               </a>
               <?php endif; ?>
            </div>
         </div>
      </section>
   </main>
</div>
<?php get_footer(); ?>
<style type="text/css">


   <?php 
   $image = get_field('bgvideo');
   ?>


#primary{
    background:linear-gradient(0deg,rgba(255,255,255,0.3),rgba(255,250,220,0.7));
    /*background-image: url(' ');*/
    background-size:cover;
    background-position: center;
    /*max-height: 1200px;*/
}


   section figure figcaption {
   position: absolute;
   bottom: 0;
   left: 0;
   right: 0;
   background: black; /* fallback */
   background: rgba(0,0,0,.7); /* transparent background */  
   color: #fff; 
   padding: 10px;    /* padding around text */
   font-size: 1.5rem;
   }
   figure div {
   position: relative;
   display: inline-block;
   max-width: 80%;
   padding: 0;
   font-size: 1.5rem;
   }

/*
   #primary{
   background:linear-gradient(0deg,rgba(255,240,180,0.3),rgba(255,255,200,0.3));
   background:linear-gradient(0deg,rgba(255,255,255,0.8),rgba(10,10,10,0.7));
   background:linear-gradient(0deg,rgba(255,255,255,0.3),rgba(255,250,220,0.7));
   }*/ 


   .place-holder{
   width: 550px;
   height: 300px;
   }
   .tours-flex-container {
   display: flex;
   flex-flow: row wrap;
   justify-content: center;
   max-width: 1080px;
   margin: auto;
   }
   .model-tour {
   margin: auto;
   text-align: center;
   max-width: 853px;
   height: 480px;
   padding: 0;
   }
   .video-tour {
   margin-left: auto;
   margin-right: auto;
   margin-top: 10px;
   margin-bottom: 50px;
   text-align: center;
   max-width: 853px;
   height: 480px;
   border: 2px solid #123;
   border-spacing: 5px;
   }
   .select-model {
   text-align: center;
   margin: auto;
   padding: 35px 25px 15px 25px;
   text-transform: uppercase;
   }
   .model-highlight {
   background-color: #e6eaed;
   border-width: 2px;
   border-radius: 2px;
   text-decoration: none;
   }
   #model-selection {
   background-image: url("http://gvhomes.s3.amazonaws.com/images/select-a-tour_placeholder.jpg");
   background-position: center;
   }
   #video-selection {
   background-image: url("http://i.ytimg.com/vi/wkeNSBrdG8Y/maxresdefault.jpg");
   background-position: center;
   background-size: cover;
   }
   .column {
   width: 23%;
   display: inline-block;
   margin: auto;
   padding: 5px;
   margin: 5px;
   }
   .column img {
   opacity: 0.8;
   cursor: pointer;
   }
   .column img:hover {
   opacity: 1;
   }
   .row {
   display: table;
   text-align: center;
   margin: auto;
   max-width: 100%;
   }
   #divider {
   width: 75%;
   text-align: center;
   height: 5px;
   background-color: rgba(0,0,0,0.7);
   color: #123;
   margin-top: 15px;
   margin-bottom: 15px;
   }    
   @media screen and (min-width: 320px) and (max-width: 580px) {
   .column {
   width: 100%;    
   display: inline-block;
   margin: auto;
   padding: 20px;
   }
   .place-holder{
   width: 350px;
   height: 200px;
   }
 }

  @media screen and (min-width: 580px) and (max-width: 1000px) {
   .column {
   width: 50%;    
   display: inline-block;
   margin: auto;
   padding: 20px;
   }
   .place-holder{
   width: 350px;
   height: 200px;
   }
 }
   /*@media screen and (min-width:767px) and (max-width:1200px) {
   .column {
   width: 100%;
   display: inline-block;
   margin: auto;
   padding: 15px;
   }
   .place-holder{
   width: 100%;
   height: 350px;
   }
   }*/
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function () {
     $(".model-links").click(function () {
     $(".model-links").removeClass("model-highlight");
     $(this).addClass("model-highlight");
    });
   });
   
   $("a[href='#video-selection']").click(function() {
   $("html, body").animate({ scrollTop: 0 }, "slow");
   return false;
   });
</script>
<?php get_footer(); ?>