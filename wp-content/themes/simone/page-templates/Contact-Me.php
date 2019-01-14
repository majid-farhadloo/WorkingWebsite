<?php
/**
 * Template Name: Contact Page
 */
?>



<?php
get_header(); ?>

	<div id="primary" class="content-area" >
    <main id="main" class="site-main" role="main">

        <div id="contact" class="text-center">
            <div class="container">
                <div class="section-title center">
                    <h2 id="title">Contact</h2>
                    <hr id="divider">
                </div>
                <div class="col1">
                    <div id="responsive" class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
                        <p>5241 N Maple Ave
                            <br> Fresno, CA 93740</p>
                    </div>
                    <div id="responsive" class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
                        <p>user@gmail.com</p>
                    </div>
                    <div id="responsive" class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
                        <p> +1 555-555-5555</p>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col1 col1-collapse section-title">
                    <h3>Leave me a message</h3>
                    <hr  id="divider2">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6 col-h-size">
                                <div class="form-group">
                                    <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-h-size">
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div id="success"></div>
                        <button type="submit" class="btn btn-default">Send Message</button>
                       </div>
                    </form>


                    <div class="social">
                        <ul>
                            <li><a href="https://www.facebook.com/majid.farhadloo"><i class="fa fa-facebook"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                            <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                            <!-- <li><a href="https://github.com/majid-farhadloo"><i class="fa fa-github"></i></a></li> -->
                            <li><a href="https://www.instagram.com/majidcsci/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/majid-farhadloo-b68839113/"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- #main -->
</div>
<!-- #primary -->



<style type="text/css">

 

<?php 
$image = get_field('background-img');
?>



 @media  screen and (min-width: 320px) and (max-width: 568px)
  and (-webkit-min-device-pixel-ratio: 2) {
  	#title{
  		font-size: 3.5rem;
  	}
  	
  	div #responsive{
	width: 100%;
	margin: auto;
	text-align: center;
	padding: 5px;
	display: inline-block;
	}

	.form-group{
		width: 250px;
		margin-left: -75px
	}  


  }

  @media screen and (min-width: 480px) and (max-width: 768px) {

  	#title{
  		font-size: 3.5rem;
  	}
  	
  	div #responsive{
	width: 32%;
	margin: auto;
	text-align: center;
	padding: 5px;
	display: inline-block;
	}

	.form-group{
		width: 450px;
		margin-left: -105px
	}  


  }


 @media screen and (min-width: 768) and (max-width: 1024px) {

  	#title{
  		font-size: 3.5rem;
  	}
  	
  	div #responsive{
	width: 32%;
	margin: auto;
	text-align: center;
	padding: 5px;
	display: inline-block;
	}

	.form-group{
		width: 850px;
		margin-left: -105px
	}  


  }
  

.content-area{
	 background:linear-gradient(0deg,rgba(255,255,255,0.3),rgba(255,250,220,0.7)),url('<?php echo $image['url'] ?>');
	 /*background-image: url(' ');*/
  	 background-size:cover;
  	 background-position: center;
  	 /*max-height: 1200px;*/
}

div.col-md-4{
	width: 32%;
	margin: auto;
	text-align: center;
	padding: 5px;
	display: inline-block;
}

.section-title{
	text-align: center;
	margin: auto;
	font-size: 5rem;
	color: black;
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

#divider2{
         width: 35%;
         text-align: center;
         height: 5px;
         background-color: rgba(0,0,0,0.7);
         color: #123;
         margin-top: 15px;
         margin-bottom: 15px;
    }        

.row{
	width: 35%;
	margin: auto;
	text-align: center;
	padding: 20px;
}

.col-h-size{
	height: 50px;
}

#contact {
color: #121d1f;
/*background-color: white;*/

}
#contact h2 {
	color: #000;
}

#contact h3 {
	padding-top: 20px;
	font-size: 20px;
	font-weight: 400;
	color: black;
}
#contact form {
	padding: 30px 0;
}
#contact i.fa {
	color: black;
	margin-bottom: 10px;
}
#contact .text-danger {
	color: #E87E04;
	text-align: left;
}
label {
	font-size: 12px;
	font-weight: 400;
	font-family: 'Open Sans', sans-serif;
	float: left;
}
#contact .form-control {
	display: block;
	width: 100%;
	padding: 6px 12px;
	font-size: 14px;
	line-height: 1.42857143;
	color: #2c3e50;
	background-color: #999;
	background-image: none;
	border: 0.25rem solid black;
	border-radius: 2px;
	-webkit-box-shadow: none;
	box-shadow: none;
	-webkit-transition: none;
	-o-transition: none;
	transition: none;
}
#contact .form-control:focus {
	border-color: inherit;
	outline: 0;
	-webkit-box-shadow: transparent;
	box-shadow: transparent;
}
.form-control::-webkit-input-placeholder {
color: #2c3e50;
}
.form-control:-moz-placeholder {
color: #2c3e50;
}
.form-control::-moz-placeholder {
color: #2c3e50;
}
.form-control:-ms-input-placeholder {
color: #2c3e50;
}

#contact .social {
	margin-top: 60px;
	margin-left: -150px;
}
#contact .social ul li {
	display: inline-block;
	margin: 0 20px;
}
#contact .social i.fa {
	font-size: 30px;
	padding: 4px 5px;
	margin-left:-20px;
	color: rgba(255,143,20,0.5);
	transition: all 0.5s;
}
#contact .social i.fa:hover {
	color: #121d1f;
}
#contact .btn {
	background-color: #122;
	border: 1px solid #fff;
	border-radius: 0;
	padding: 10px 20px;
	color: #fff;
	margin-top: 15px;
}
#contact .btn:hover, #contact .btn:focus {
	background-color: lightblue;
	border: 1px solid #121d1f;
}
.btn:active, .btn.active {
	background-image: none;
	outline: 0;
	-webkit-box-shadow: none;
	box-shadow: none;
}
a:focus, .btn:focus, .btn:active:focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn.active.focus {
	outline: none;
	outline-offset: none;
}





	</style>




<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'mfarhadloo@gvhomes.com';
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>


<!--  -->

<?php get_footer(); ?>
