<?php
/**
    * Template Name: bio Page Template
    */
   
get_header(); ?>

    <div id="primary" class="content-area-lander-page">
        <main id="main" class="site-main" role="main">
          <section class="bio-template">

            <div class="image left">
                <div class="img-section">
                    <?php 
               $image = get_field('image');

               if( !empty($image) ): ?>
                        <img id="image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                </div>
            </div>

            <div class="right">
                <div class="bio-section">
                    <h2 class="bio-title"><?php the_field('title'); ?></h2>
                    <hr id="divider">
                    <div class="des-section">
                        <p class="description-section">
                            <?php the_field('description'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
     </main>
        <!-- #main -->
</div>
    <!-- #primary -->

<?php get_footer(); ?>    

<style type="text/css">
  

@media screen and (max-width: 1539px) and (min-width: 1160px){ 
    .content-area-lander-page {
         margin-left: 0; 
        padding-left: 0; 
    }
}


@media screen and (max-width: 500px) and (min-width: 575px){ 
    .content-area-lander-page {
         margin-left: 0; 
        padding-left: 0; 
    }
}
 

 .shifted {
      margin-top: 54px;
  }
  
  #primary {
      /*background:linear-gradient(0deg,rgba(255,255,255,0.8),rgba(10,10,10,0.7));*/
      background: linear-gradient(0deg, rgba(255, 255, 255, 0.3), rgba(255, 250, 220, 0.7));
  } 
 
  * {
        margin: 0;
    }

 .left {
      margin: auto;
      width: 50%;
      margin-left: 27vw;
  }
  
  .right {
      margin: auto;
      width: 35%;
      margin-left:50vw;
  }

   img {
      padding: 20px;
      margin-top: 10px;
      width: 60%;
      height: 60%;
      margin-left: 10vw;
      /*height: auto;*/
  }
  .bio-title {
      font-size: 50px;
      font-weight: bold;
      padding: 2rem;
      font-family: Lato;
      text-align: center;
      margin-left: -30vw;
      height: auto;
  }
  

  .des-section{
      font-size: 1.65rem;
      font-family: Lato;
      text-align: justify;
      height: auto;
      /*margin-left: 30vw;*/
      margin-bottom: 15vh;  
      text-align: center;
      bottom: 0;
      padding: 2rem;
      text-align: center;
      letter-spacing: 2px;
      /*margin-left: -150px;*/
      line-height: 40px;
      /*margin: auto;*/
      text-align: center;
      margin-left: -35vw;

  }

  #divider {
      width: 50%;
      margin: auto;
      margin-left: -6vw;
      background-color: #123;
      height: 5px;
      padding: 2px;

  }
  
  @media screen and (min-width: 320px) and (max-width: 490px) {
      img {
          width: 80%;
          height: 350px;
          /*margin: auto;*/
      }
      .bio-title {
          font-size: 20px;
          letter-spacing: 0.2px;
          line-height: 5px;
          text-align: center;
          margin-left: -35vw;
      }
      #divider {
          margin: auto;
          margin-top: 10px;
          margin-left: -2vw;
      }
      p {
          font-size: 10px;
          letter-spacing: 0.2px;
          text-indent: 0px;
          line-height: 25px;
      }
      .left {
          margin: 0;
          padding: 5px;
          width: 100%;
      }
      .right {
          float: left;
          /*margin-left: 150px;*/
          margin-left: 35vw;
          width: 60%;
      }
  }
  
  @media screen and (min-width: 491px) and (max-width: 768px) {
      #image {
          width: 500px;
          padding: 50px;
          height: 350px;
          margin-top: 30px;
      }
      .bio-title {
          font-size: 30px;
          letter-spacing: 0.2px;
          line-height: 5px;
          text-align: center;
          margin-left: -30vw;
      }
      #divider {
          margin-left: 0vw;
          margin-top: 20px;
      }
      p {
          font-size: 13px;
          letter-spacing: 0.2px;
          text-indent: 0px;
          line-height: 25px;
          margin-left: 80px;
      }
      .left {
          margin: auto;
          width: 50%;
          margin-left: 20vw;
      }
     .right {
          float: left;
          /*margin-left: 150px;*/
          margin-left: 39vw;
          width: 60%;
      }
  }
  
  @media screen and (min-width:769px) and (max-width:1150px) {
      #image {
          width: 100%;
          padding: 50px;
          height: 450px;
          margin-top: 100px;
      }
      .bio-title {
          font-size: 30px;
          letter-spacing: 0.2px;
          line-height: 5px;
          margin-left: -50px;
          margin-top: 50px;
      }
      #divider {
          margin-top: 25px;
          margin-left: 15vw;
      }
      p {
          font-size: 13px;
          letter-spacing: 0.2px;
          text-indent: 0px;
          line-height: 25px;
          padding-left:30vw;
          /*padding-right: 6.5rem;*/
      }
      .left {
          margin: auto;
          width: 50%;
          margin-left: 19vw;
      }
      .right {
          /*margin: auto;*/
          width: 70%;
          margin-left: 23vw;
      }
  }
  
  @media screen and (min-width:1150px) and (max-width:1900px) {
     #image {
          width: 100%;
          padding: 50px;
          height: 450px;
          margin-top: 100px;
      }
      .bio-title {
          font-size: 30px;
          letter-spacing: 0.2px;
          line-height: 5px;
          margin-left: -50px;
          margin-top: 50px;
      }
      #divider {
          margin-top: 25px;
          margin-left: 15vw;
      }
      p {
          font-size: 13px;
          letter-spacing: 0.2px;
          text-indent: 0px;
          line-height: 25px;
          padding-left:30vw;
          /*padding-right: 6.5rem;*/
      }
      .left {
          margin: auto;
          width: 50%;
          margin-left: 19vw;
      }
      .right {
          /*margin: auto;*/
          width: 70%;
          margin-left: 23vw;
      }


  }


  

</style>
