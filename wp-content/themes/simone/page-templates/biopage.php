<?php
   /**
    * Template Name: Bio Page Template
    */
   
   get_header(); ?>

<style type="text/css">
    
    .main-navigation.sticky-header {
    position: fixed;
    width: 100%;
    z-index: 100;
    top: 0;
    left: 0;
}

.shifted {
    margin-top: 54px;
}

</style>
   
<style type="text/css">

   #primary{
   /*background:linear-gradient(0deg,rgba(255,255,255,0.8),rgba(10,10,10,0.7));*/
   background:linear-gradient(0deg,rgba(255,255,255,0.3),rgba(255,250,220,0.7));
   }

   .left{
   /*margin: auto;*/
   width: 50%;
   margin-left: 27vw;
   }

   .right{
   /*margin: auto;*/
   width: 75%;
   margin-left: 15vw;
   }


   img{
   padding: 20px;
   margin-top: 10px;
   width: 55%;
   height: 550px;
   margin-left: 10vw;
   }

   .bio-title{
   font-size: 50px;
   font-weight: bold;
   padding: 2rem;
   font-family: Lato;
   text-align: center;
   }

   p{
   font-size: 1.95rem;
   font-family: Lato;
   text-align: justify;
   letter-spacing: 2px;
   line-height: 40px;
   text-align: center;
   bottom: 0;
   padding: 2rem;

   }

   #divider{
   width: 50%;
   margin: auto;
   background-color: #123;
   height: 5px;
   padding: 2px;
   }

   .des-section p{
      margin-left: -150px;
   }


  
   @media screen and (min-width: 320px) and (max-width: 490px) {
   img{
   width: 80%;
   height: 350px;
   margin: auto;
   }
   .bio-title{
   font-size: 20px;
   letter-spacing: 0.2px;
   line-height: 5px;
   margin-left: -115px;
   text-align: center;

   }
   #divider{
   margin:auto;
   margin-top: 10px;
   margin-left: -2vw;
   }

   p{
    font-size: 10px;
    letter-spacing: 0.2px;
    text-indent: 0px;
    line-height: 25px;
    margin-left: 80px;
   }

   .left{
   margin: 0;
   margin-left: 8vw;
   padding: 5px;
   width: 100%;
   }
   .right{
   float: left;
   margin-left: 150px;
   width: 60%;
   }
   }


 
   @media screen and (min-width: 491px) and (max-width: 768px) {

      #image{
      width: 500px;
      padding: 50px;
      height: 350px;
      margin-top: 30px;
      }

      .bio-title{
      font-size: 30px;
      letter-spacing: 0.2px;
      line-height: 5px;
      margin: 0px;
      margin-left: -50px;
      }
      #divider{
      margin-left: 10vw;
      margin-top: 20px;
      }
      p{
      font-size: 13px;
      letter-spacing: 0.2px;
      text-indent: 0px;
      line-height: 25px;
      margin-left: 80px;
      }

   .left{
   /*margin: auto;*/
   width: 50%;
   margin-left: 19vw;
   }

   .right{
   /*margin: auto;*/
   width: 85%;
   margin-left: 20vw;
   padding: 4.5rem;
   }
  
   }


   @media screen and (min-width:767px) and (max-width:1150px) {

    #image{
      width: 100%;
      padding: 50px;
      height: 450px;
      margin-top: 100px;
      }


      .bio-title{
      font-size: 30px;
      letter-spacing: 0.2px;
      line-height: 5px;
      margin-left: -50px;
      margin-top: 50px;
      }

      #divider{
      margin-top: 25px;
      margin-left: 15vw;

      }


   p{
      font-size: 13px;
      letter-spacing: 0.2px;
      text-indent: 0px;
      line-height: 25px;
      padding-left, padding-right: 6.5rem;
      }


     .left{
   /*margin: auto;*/
   width: 50%;
   margin-left: 19vw;
   }

   .right{
   /*margin: auto;*/
   width: 70%;
   margin-left: 23vw;
   }

}






@media screen and (min-width:1150px) and (max-width:1500px) {

    #image{
      width: 100%;
      padding: 50px;
      height: 450px;
      margin-top: 100px;
      }


      .bio-title{
      font-size: 30px;
      letter-spacing: 0.2px;
      line-height: 5px;
      margin-left: -50px;
      margin-top: 50px;
      }

      #divider{
      margin-top: 25px;
      margin-left: 15vw;

      }


   p{
      font-size: 18px;
      letter-spacing: 0.2px;
      text-indent: 0px;
      line-height: 35px;
      padding-left, padding-right: 6.5rem;
      }


     .left{
   /*margin: auto;*/
   width: 75%;
   margin-left: 19vw;
   }

   .right{
   /*margin: auto;*/
   width: 100%;
   margin-left: 23vw;
   }

}



  
</style>

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
        </section>
        </div>
        </div>

        </section>
    </main>
    <!-- #main -->
    </div>
<!-- #primary -->
<?php get_footer(); ?>