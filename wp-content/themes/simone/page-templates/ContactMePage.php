<?php
/**
 * Template Name: Page with contact form
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<p id="title"> Contact Page</p>

				<hr id="divider">

			<div id="form">
                <?php echo do_shortcode('[contact-form-7 id="348" title="Contact form 1"]'); ?>
            </div>

              <div class="social">
            	<ul>
	              <li><a href="https://www.facebook.com/majid.farhadloo"><i class="fa fa-facebook"></i></a></li>
	              <li><a href="https://www.instagram.com/majidcsci/"><i class="fa fa-instagram"></i></a></li>
	              <li><a href="https://www.linkedin.com/in/majid-farhadloo-b68839113/"><i class="fa fa-linkedin"></i></a></li>
          	    </ul>
            </div> 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>




<?php

 $image = get_field('background-img');

?>



<style type="text/css"> 




.content-area-lander-page {	
	background: linear-gradient(0deg, rgba(255, 255, 255, 0.3), rgba(255, 250, 220, 0.7)), url('<?php echo $image['url'] ?>');
    background-size: cover;
    background-position: center;
    font-family: Lato;
    height: 100%;  
}

#primary {
    height: auto;
    background: linear-gradient(0deg, rgba(255, 255, 255, 0.3), rgba(255, 250, 220, 0.7)), url('<?php echo $image['url'] ?>');
    background-size: cover;
    background-position: center;
}

@media screen and (max-width: 1539px) and (min-width: 1160px) {
    .content-area.lander-page {
        margin-left: 0;
        padding-left: 0;
    }
}

@media screen and (max-width: 1539px) and (min-width: 1160px) {
    #primary{
        margin-left: 0;
        padding-left: 0;
    }
}


#title {
    font-size: 3.5rem;
    padding: 2.5rem;
    text-align: center;
    font-family: Lato;
    font-weight: bold;
}

#form {
    margin: auto;
    margin-left: 31vw;
    padding: 2%;
    /*margin-top: -8vh;*/
    font-family: Lato;
}

/*hr divider */

#divider {
    width: 40%;
    margin: auto;
    margin-top: 4vh;
    margin-bottom: 2rem;
    background-color: #123;
    height: 5px;
    padding: 2px;
    margin-top: -5.5vh;
}


.wpcf7 {
    background: rgba(0, 0, 0, 0.3);
    border: 5px solid #494949;
    width: 700px;
    padding: 20px 20px 20px 50px !important;
}


/* Contact Form 7 Input CSS 
---------------------------*/

.wpcf7 input[type="text"],
.wpcf7 input[type="email"],
.wpcf7 input[type="tel"],
textarea {
    font-size: 16px;
    background-color: rgba(250, 250, 250, 0.4);
    border: none;
    width: 95%;
    padding: 2%;
}


/* Contact Form 7 Submit Button 
-------------------------------*/

.wpcf7 input[type="submit"] {
    color: #ffffff;
    font-size: 18px;
    font-weight: 700;
    background: #E2272E;
    padding: 15px 25px 15px 25px;
    border: none;
    border-radius: 5px;
    width: auto;
    text-transform: uppercase;
    letter-spacing: 5px;
}

.wpcf7 input:hover[type="submit"] {
    background: #494949;
    transition: all 0.4s ease 0s;
}

.wpcf7 input:active[type="submit"] {
    background: #000000;
}


/* Checkbox CSS
----------------*/

input[type="checkbox"] {
    transform: scale(1.3);
    margin-left: 5px;
}

span.wpcf7-list-item {
    margin: 0;
    padding-bottom: 20px;
}



/* Social
----------------*/

.social {
    margin-top: 50px;
    margin-left: 42.5vw;
    padding: 1%;
}

.social ul li {
    display: inline-block;
    margin: 0 20px;
}

.social i.fa {
    margin: auto;
    font-size: 30px;
    padding: 4px 5px;
    margin-left: -20px;
    color: black;
    transition: all 0.5s;
}

.social i.fa:hover {
    color: #999;
}


/* Mobile Friendly
----------------*/


@media screen and (min-width: 320px) and (max-width: 580px) {
    
#form {

    	margin:auto;
    	padding: 5%;
}

.wpcf7 {
    
    width: 100%;
}

  .social{
      margin-left: 14vw;
    }


 .content-area-lander-page {
    height: 100%;
 }    

}



@media screen and (min-width: 491px) and (max-width: 768px) {


	#form {

    	margin:auto;
    	padding: 5%;
	}

	.wpcf7 {
    
    width: 100%;	
	}

    .social{
      margin-left: 36vw;
    }


    .content-area-lander-page {
    height: 100%;
 	}   

   }


 @media screen and (min-width:767px) and (max-width:1150px) {

 	#form {

    	margin:auto;
    	padding: 5%;
	}

	.wpcf7 {
    
    width: 100%;	
	}

      .social{
      margin-left: 39vw;
      }

     .content-area-lander-page {
    height: 100%;
 	}


    }