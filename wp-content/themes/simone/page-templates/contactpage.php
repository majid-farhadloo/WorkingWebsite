<?php
/**
 * Template Name: New Contact Page 
 */
?>


<?php

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div style='color:black; padding:2rem;' class='success form-control'>{$message}</div><br>";
    else $response = "<div style='color:black; padding:2rem;' class='error form-control'>{$message}</div><br>";

  }

  //response messages
  $not_human       = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

  if(!$human == 0){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>



<?php

get_header(); ?>

    <div id="primary" class="content-area-lander-page">
        <main id="main" class="site-main" role="main">

            <style type="text/css">
                .error {
                    padding: 5px 9px;
                    border: 1px solid red;
                    color: red;
                    border-radius: 3px;
                }
                
                .success {
                    padding: 5px 9px;
                    border: 1px solid green;
                    color: green;
                    border-radius: 3px;
                }
                
                form span {
                    color: red;
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

    				#title{
    					font-size: 3.5rem;
    					padding: 2.5rem;
    					text-align: center;
    				}
            </style>


            <h2 id="title">Contact Form</h2>
            <hr id="divider">
            <section id="contact">
            <div id="respond">
                <?php echo $response; ?>
                    <form action="<?php the_permalink(); ?>" method="post">
                        <input class="form-control" type="text" name="message_name" placeholder="Name" value="<?php echo esc_attr($_POST['message_name']); ?>"><br>
                        <input class="form-control" type="text" name="message_email" placeholder="Email" value="<?php echo esc_attr($_POST['message_email']); ?>"><br>
                        <textarea class="form-control"  style="height: 180px;" placeholder="Your Message" type="text" name="message_text" >
                        	<?php echo esc_textarea($_POST['message_text']); ?>
                        </textarea> 
                            <!-- <label class="align" for="message_human" style="margin: a" ">Human Verification: <span>*</span> -->
                        <br>

                       <p style="text-align: center;"><label for="message_human">Human Verification: <span>*</span> <br><input  type="text" style="width: 60px; background-color: rgba(0,0,0,0.2);" name="message_human"> + 3 = 5</label></p>
                        <input type="hidden" name="submitted" value="1"><br>
                        <input class="form-control" type="submit" value="Send">
                        
                    </form>
            </div>
            </section>
            
            <div class="social">
                <ul>
                    <li><a href="https://www.facebook.com/majid.farhadloo"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/majidcsci/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/majid-farhadloo-b68839113/"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
       

        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <?php get_footer(); ?>

   <style type="text/css">

  <?php 
	$image = get_field('background-img');
	?>

.content-area-lander-page{
	  background:linear-gradient(0deg,rgba(255,255,255,0.3),rgba(255,250,220,0.7)),url('<?php echo $image['url'] ?>');
  	background-size:cover;
  	background-position: center;
	}

	#contact{
	padding: 5rem;
	margin: 2rem;
	}

	.form-control {
	display: block;
	width: 50%;
	padding: 6px 12px;
	font-size: 14px;
	line-height: 1.42857143;
	color: #2c3e50;
	background-color: rgba(0,0,0,0.2);
	background-image: none;
	border: 0.25rem solid black;
	border-radius: 2px;
	-webkit-box-shadow: none;
	box-shadow: none;
	-webkit-transition: none;
	-o-transition: none;
	transition: none;
	margin: auto;
	height: 60px;
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


	.social {
		margin-top: 50px;
		margin-left: 45vw;

	}
	.social ul li {
		display: inline-block;
		margin: 0 20px;
	}
	 .social i.fa {
	 	margin: auto;
		font-size: 30px;
		padding: 4px 5px;
		margin-left:-20px;
		color: black;
		transition: all 0.5s;
	}
	.social i.fa:hover {
		color: #999;
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

  @media screen and (min-width: 320px) and (max-width: 490px) {

    .form-control {

      width: 85%;
    }

    .social{
      margin-left: 17vw;
    }

  }

   @media screen and (min-width: 491px) and (max-width: 768px) {

    .social{
      margin-left: 36vw;
    }

   }

    @media screen and (min-width:767px) and (max-width:1150px) {

      .social{
      margin-left: 39vw;
      }
    }

   </style>