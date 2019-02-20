<?php
   /**
    * Template Name: New video gallery Template
    */
   
   get_header(); ?>



<style type="text/css"> 

#primary {
    /*background: linear-gradient(0deg, rgba(255, 255, 255, 0.3), rgba(255, 250, 220, 0.7));*/
    background-size: cover;
    background-position: center;
    font-family: Lato;
    padding: 0px;
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

@-webkit-keyframes slide {
    100% {
        left: 0;
    }
}

@keyframes slide {
    100% {
        left: 0;
    }
}

.mySlides {
    display: none;
    /*margin-left: 0vw;*/
    margin: auto;
}

img {
    vertical-align: middle;
}


/* Slideshow container */

.slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
    margin-top: 7vh;
    /*margin: auto;*/
}

#preview img {
    width: 670px;
    height: 430px;
    /*margin-left: -7vw;*/
    margin: auto;
}

#video {
    width: 1200px;
    height: 750px;
    margin-left: 0.5vw;
}

#video-ready {}

#video {
    opacity: 0.8;
    margin-top: 25px;
    font-size: 21px;
    text-align: center;
    -webkit-transition: opacity 2s ease-in;
    -moz-transition: opacity 2s ease-in;
    -o-transition: opacity 2s ease-in;
    -ms-transition: opacity 2s ease-in;
    transition: opacity 2s ease-in;
}


/* Next & previous buttons */

.prev,
.next {
    cursor: pointer;
    position: absolute;
    top: -4%;
    width: auto;
    padding: 10px 18px;
    /*margin-top: -22px;*/
    /*color: black;*/
    letter-spacing: 2px;
    font-weight: bold;
    font-size: 15px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    margin-left: 5.5vw;
    user-select: none;
}



/* Position the "next button" to the right */

.next {
    right:1;
    border-radius: 3px 0 3px 3px;
}


/* On hover, add a black background color with a little bit see-through */

/*.prev:hover,
.next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}
*/

/* Caption text */

.text {
    color: #f2f2f2;
    /*font-size: 15px;*/
    padding: 8px 12px;
    position: relative;
    margin-top: 4vh;
    bottom: 1.5vh;
    width: 100%;
    text-align: center;
    /*margin-bottom: 1.5vh;*/
    font-size: 3.5rem;
    color: black;
    margin-left: -4vw;
    text-align: center;

}


/* Number text (1/3 etc) */

.numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
}


/* The dots/bullets/indicators */

.active {
    background-color: #717171;
}


/* Fading animation */

.fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
}

@-webkit-keyframes fade {
    from {
        opacity: .4
    }
    to {
        opacity: 1
    }
}

@keyframes fade {
    from {
        opacity: .4
    }
    to {
        opacity: 1
    }
}


/* On smaller screens, decrease text size */

@media only screen and (max-width: 300px) {
    .prev,
    .next,
    .text {
        font-size: 11px;
    }
}

.title {
    text-align: center;
    /*margin-top:2vh;*/
    padding-top: 2.5rem;
    font-size: 3.5rem;
}


/*hr divider */

#divider {
    width: 40%;
    /*margin-left: 15vw;*/
    margin:auto;
    margin-top: 4vh;
    margin-bottom: 2rem;
    /*background-color: #123;*/
    background: rgb(75, 127, 168);
    height: 5px;
    padding: 2px;
}


/* second type of hr divider */

#divider2 {
    width: 70%;
    margin: auto;
    margin-top: 4vh;
    margin-bottom: 2rem;
    /*background-color: #123;*/
    background: rgb(75, 127, 168);
    height: 5px;
    padding: 2px;
}


/* button setting for next and previous */

.w3-position {
    /*margin: auto;*/
    /*margin-left: 18vw;*/
    margin: auto;
    margin-left: 18.5vw;

}


/*.w3-position .w3-black:hover {
    color: lightblue!important;
    background-color: red!important;
}*/

.w3-button {
    border: none;
    display: inline-block;
    padding: 20px 35px;
    vertical-align: middle;
    overflow: hidden;
    text-decoration: none;
    color: #453;
    background-color: transparent;
    text-align: center;
    cursor: pointer;
    white-space: nowrap;
    font-size: 2rem;
    margin-left: -.5vw;
}

.w3-button:hover{

    background: rgb(75, 127, 168);
}


.w3-button {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.w3-button:disabled {
    cursor: not-allowed;
    opacity: 0.3
}

.w3-disabled *,
:disabled * {
    pointer-events: none
}

#video {
    max-width: 1000px;
    height: 1550px;
    margin: auto;
    width: 1550px;
}


/*Responsive*/

@media screen and (min-width: 320px) and (max-width: 580px) {
    .title {
        font-size: 2.0rem;
        text-align: center;
        padding: 1.5rem;
    }
    #preview img {
        width: 100%;
        height: 300px;
        /*margin-left: 0vw;*/
    }
    #divider {
        /*margin: auto;*/
        margin-left: 25vw;
    }
    .w3-position {
        margin-left: 15.5vw;
    }
}

@media screen and (min-width: 580px) and (max-width: 768px) {

    .title {
        font-size: 2.5rem;
        text-align: center;
    }
    #preview img {
        width: 75%;
        height: 300px;
        margin-left: 10vw;
    }
    #divider {
        /*margin: auto;*/
        margin-left: 25vw;
    }
    .w3-position {
        margin-left: 35.5vw;
    }
}

@media screen and (min-width:769px) and (max-width:1200px) {

    .title {
        font-size: 2.5rem;
        text-align: center;
    }
    #preview img {
        width: 75%;
        height: 450px;
        margin-left: 10vw;
    }
    #divider {
        /*margin: auto;*/
        margin-left: 25vw;
    }
    .w3-position {
        margin-left: 38.5vw;
    }

    .text{
        text-align: center;
        margin-left: 0vw;
    }
}


@media screen and (min-width: 1201px) {

   .title {
        font-size: 2.5rem;
        text-align: center;
    }
    #preview img {
        width: 75%;
        height: 450px;
        margin-left: 7vw;
    }
    /*#divider {
        margin: auto;
        margin-left: 22vw;
    }*/

    #divider2 {
        /*margin: auto;*/
        margin-left: 18vw;
    }
    /*.w3-position {
        margin-left: 28.5vw;
    }*/

    .text{
        text-align: center;
        margin-left: 3vw;
    }
}

.mySlides div iframe{

    margin-left: 6vw;
}

/***************************** Testmonila video section ****************************************/

.body {
    box-sizing: border-box;
    width: 100%;
    /*margin-left: -10.5vw;*/
    /*padding: 1.5rem;*/
    margin-right: 0;
    margin-left: 0;
}

.row::after {
    content: "";
    clear: both;
    display: table;
}

[class*="col-"] {
    float: left;
    padding: 25px;
}

.col-6 {
    width: 33%;
}

#video1 {
    margin: 2.75rem;
    padding: 1.5rem;
}

#video1 img {
    height: 450px;
    width: 400px;
    border-radius: 20%;
    padding: 2.5rem;
    margin-top: 1vh;
}

#video1 p {
    position: relative;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 1.75rem;
    /* padding around text */
    font-size: 1.75rem;
    text-align: center;
    width: 100%;
    margin-left: -4.5vw;
}

#video1 a {
    width: 100%;
    height: 100%;
    text-align: center;
    font-weight: bold;
    margin-left: 5vw;
}

#video1 p div {
    position: relative;
    display: inline-block;
    max-width: 80%;
    padding: 0;
    font-size: 1.5rem;
}

@media screen and (min-width: 320px) and (max-width: 580px) {
    .text {
        font-size: 2.5rem;
    }
    .col-6 {
        width: 100%;
    }
    #video1 a {
        margin-left: 19.5vw;
    }
    #video1 p {
        margin: auto;
        font-size: 1.2rem;
        width: 80%;
    }
    #video1 img {
        height: 300px;
        width: 650px;
        border-radius: 70%;
        margin: auto;
    }
}

@media screen and (min-width: 581px) and (max-width: 800px) {
    .text {
        font-size: 2.5rem;
    }
    .col-6 {
        width: 50%;
    }
    #video1 img {
        width: 700px;
        height: 150px;
        border-radius: 70%;
    }
    #video1 p {
        margin: auto;
        font-size: 1.4rem;
        width: 80%;
    }
}

@media screen and (min-width: 800px) and (max-width: 1200px) {
    .text {
        font-size: 2.5rem;
    }
    .col-6 {
        width: 50%;
    }
    #video1 img {
        width: 700px;
        height: 350px;
        border-radius: 70%;
    }
    #video1 p {
        margin: auto;
        font-size: 1.4rem;
        width: 80%;
    }
    #video1 a {
        text-align: center;
        margin-left: 15vw;
    }
}

/*.upper-section,
.lower-section {
    background-color: #e6e6e6;
}
*/
/*.upper-section{*/

   
    /*background-size: cover;*/
/*}*/

/*.lower-section{
    background-image: url('/dariusassemi/wp-content/uploads/2019/02/jazmin-quaynor-105210-unsplash.jpg');
    background-size: cover;
}
*/
.lower-section .row {

    /*background-color: #e6e6e6;*/
    margin-left: 8vw;
}



.content-area-lander-page { 
    background:linear-gradient(0deg,rgba(255,255,255,0.3),rgba(75, 127, 168,0.2));
     /*background:linear-gradient(0deg,rgba(255,255,255,0.3),rgba(75, 127, 168,0.2)), url('/dariusassemi/wp-content/uploads/2019/02/ina-soulis-227104-unsplash.jpg');*/
    background-size: cover;
    background-position: center;
    /*font-family: Lato;*/
    /*height: 100%;  */
}


</style>   

<div id="primary" class="content-area-lander-page">
    <main id="main" class="site-main" role="main">

   <section class="upper-section">
    <div class="title">A selection of recent public addresses and interviews.</div>

    <div class="slideshow-container" id="slideshow">  
               <section>
        <div class="w3-position">
                <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
                <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
        </div>
        </section>
        <br>

<!-- ************************************************************************************************************-->      
<div class="mySlides fade">
        <!-- <div class="numbertext">1 / 11</div> -->
        <?php 
            $link = get_field('video1_caption');
            $img = get_field('pic1-slider');
            $src = get_field('video_source1');
            if( $link ): ?>
            <div id="preview" onclick="this.nextSibling.style.display='block'; this.style.display='none'"><img src="<?php echo $img['url']; ?>" style="cursor:pointer" /></div><div style="display:none">
                <iframe style="width: 800px; height: 500px;" src="<?php echo $src; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="myVideo"></iframe>
            </div>

            <hr id="divider">

            <div class="text">
                <?php echo $link; ?>
            </div>   
    </div>
    <?php endif; ?> 

<!-- ************************************************************************************************************-->
    <div class="mySlides fade">
        <!-- <div class="numbertext">2 / 11</div> -->
        <?php 
            $link = get_field('video2_caption');
            $img = get_field('pic2-slider');
            $src = get_field('video_source2');
            if( $link ): ?>
            <div id="preview" onclick="this.nextSibling.style.display='block'; this.style.display='none'"><img src="<?php echo $img['url']; ?>" style="cursor:pointer" /></div><div style="display:none">
                <iframe style="width: 800px; height: 500px;" src="<?php echo $src; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="myVideo"></iframe>
            </div>

            <hr id="divider">

            <div class="text">
                <?php echo $link; ?>
            </div>    
    </div>
    <?php endif; ?>
<!-- ************************************************************************************************************-->

     <div class="mySlides fade">
        <!-- <div class="numbertext">3 / 11</div> -->
        <?php 
            $link = get_field('video3_caption');
            $img = get_field('pic3-slider');
            $src = get_field('video_source3');
            if( $link ): ?>
            <div id="preview" onclick="this.nextSibling.style.display='block'; this.style.display='none'"><img src="<?php echo $img['url']; ?>" style="cursor:pointer" /></div><div style="display:none">
                <iframe style="width: 800px; height: 500px;" src="<?php echo $src; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="myVideo"></iframe>
            </div>

            <hr id="divider">

            <div class="text">
                <?php echo $link; ?>
            </div>  
    </div>
    <?php endif; ?>  
<!-- ************************************************************************************************************-->

    <div class="mySlides fade">
        <!-- <div class="numbertext">4 / 11</div> -->
        <?php 
            $link = get_field('video4_caption');
            $img = get_field('pic4-slider');
            $src = get_field('video_source4');
            if( $link ): ?>
            <div id="preview" onclick="this.nextSibling.style.display='block'; this.style.display='none'"><img src="<?php echo $img['url']; ?>" style="cursor:pointer" /></div><div style="display:none">
                <iframe style="width: 800px; height: 500px;" src="<?php echo $src; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="myVideo"></iframe>
            </div>

            <hr id="divider">

            <div class="text">
                <?php echo $link; ?>
            </div>
        <?php endif; ?>    
    </div>
<!-- ************************************************************************************************************-->

 <div class="mySlides fade">
        <!-- <div class="numbertext">5 / 11</div> -->
        <?php 
            $link = get_field('video5_caption');
            $img = get_field('pic5-slider');
            $src = get_field('video_source5');
            if( $link ): ?>
            <div id="preview" onclick="this.nextSibling.style.display='block'; this.style.display='none'"><img src="<?php echo $img['url']; ?>" style="cursor:pointer" /></div><div style="display:none">
                <iframe style="width: 800px; height: 500px;" src="<?php echo $src; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="myVideo"></iframe>
            </div>

            <hr id="divider">

            <div class="text">
                <?php echo $link; ?>
            </div>
        <?php endif; ?>    
    </div>

<!-- ************************************************************************************************************-->
    <div class="mySlides fade">
        <!-- <div class="numbertext">5 / 11</div> -->
        <?php 
            $link = get_field('video5_caption');
            $img = get_field('pic6-slider');
            $src = get_field('video_source6');
            if( $link ): ?>
            <div id="preview" onclick="this.nextSibling.style.display='block'; this.style.display='none'"><img src="<?php echo $img['url']; ?>" style="cursor:pointer" /></div><div style="display:none">
                <iframe style="width: 800px; height: 500px;" src="<?php echo $src; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="myVideo"></iframe>
            </div>

            <hr id="divider">

            <div class="text">
                <?php echo $link; ?>
            </div>
        <?php endif; ?>    
    </div>

<!-- ************************************************************************************************************-->

 <div class="mySlides fade">
        <!-- <div class="numbertext">7 / 11</div> -->
        <?php 
            $link = get_field('video7_caption');
            $img = get_field('pic7-slider');
            $src = get_field('video_source7');
            if( $link ): ?>
            <div id="preview" onclick="this.nextSibling.style.display='block'; this.style.display='none'"><img src="<?php echo $img['url']; ?>" style="cursor:pointer" /></div><div style="display:none">
                <iframe style="width: 800px; height: 500px;" src="<?php echo $src; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="myVideo"></iframe>
            </div>

            <hr id="divider">

            <div class="text">
                <?php echo $link; ?>
            </div>
        <?php endif; ?>    
    </div>

<!-- ************************************************************************************************************-->
    <div class="mySlides fade">
        <!-- <div class="numbertext">8 / 11</div> -->
        <?php 
            $link = get_field('video8_caption');
            $img = get_field('pic8-slider');
            $src = get_field('video_source8');
            if( $link ): ?>
            <div id="preview" onclick="this.nextSibling.style.display='block'; this.style.display='none'"><img src="<?php echo $img['url']; ?>" style="cursor:pointer" /></div><div style="display:none">
                <iframe style="width: 800px; height: 500px;" src="<?php echo $src; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="myVideo"></iframe>
            </div>

            <hr id="divider">

            <div class="text">
                <?php echo $link; ?>
            </div>
        <?php endif; ?>    
    </div>
<!-- ************************************************************************************************************-->

 <div class="mySlides fade">
        <!-- <div class="numbertext">9 / 11</div> -->
        <?php 
            $link = get_field('video9_caption');
            $img = get_field('pic9-slider');
            $src = get_field('video_source9');
            if( $link ): ?>
            <div id="preview" onclick="this.nextSibling.style.display='block'; this.style.display='none'"><img src="<?php echo $img['url']; ?>" style="cursor:pointer" /></div><div style="display:none">
                <iframe style="width: 800px; height: 500px;" src="<?php echo $src; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="myVideo"></iframe>
            </div>

            <hr id="divider">

            <div class="text">
                <?php echo $link; ?>
            </div>
        <?php endif; ?>    
    </div>

<!-- ************************************************************************************************************-->
    <div class="mySlides fade">
        <!-- <div class="numbertext">10 / 11</div> -->
        <?php 
            $link = get_field('video10_caption');
            $img = get_field('pic10-slider');
            $src = get_field('video_source10');
            if( $link ): ?>
            <div id="preview" onclick="this.nextSibling.style.display='block'; this.style.display='none'"><img src="<?php echo $img['url']; ?>" style="cursor:pointer" /></div><div style="display:none">
                <iframe style="width: 800px; height: 500px;" src="<?php echo $src; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="myVideo"></iframe>
            </div>

            <hr id="divider">

            <div class="text">
                <?php echo $link; ?>
            </div>
        <?php endif; ?>    
    </div>
<!-- ************************************************************************************************************-->

 <div class="mySlides fade">
        <!-- <div class="numbertext">11 / 11</div> -->
        <?php 
            $link = get_field('video11_caption');
            $img = get_field('pic11-slider');
            $src = get_field('video_source11');
            if( $link ): ?>
            <div id="preview" onclick="this.nextSibling.style.display='block'; this.style.display='none'"><img src="<?php echo $img['url']; ?>" style="cursor:pointer" /></div><div style="display:none">
                <iframe style="width: 800px; height: 500px;"   src="<?php echo $src; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="myVideo"></iframe>
            </div>

            <hr id="divider">

            <div class="text">
                <?php echo $link; ?>
            </div>
        <?php endif; ?>    
    </div>
</div>
 <hr id="divider2">
 <br>
</section>

<!-- ************************************************************************************************************-->
<br>
<section class="lower-section">


 <div class="row">
 <div class="col-6">
        <div id="video1">
                <?php 
                  $link = get_field('video1_caption');
                  $img = get_field('pic1');
                  $src = get_field('video_source1');
                  if( $link ): ?>
                <img src="<?php echo $img['url']; ?>">
                <div>
                <p>​<?php echo "$link"; ?></p>
                </div>
                <a href="<?php echo $src; ?>" data-featherlight="iframe" data-featherlight-iframe-width="1000" data-featherlight-iframe-height="1000" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true">Watch Video</a>
                 <?php endif; ?>  

        </div>

        <div id="video1">
                <?php 
                  $link = get_field('video2_caption');
                  $img = get_field('pic2');
                  $src = get_field('video_source2');
                  if( $link ): ?>
                <img src="<?php echo $img['url']; ?>">
                <div>
                <p>​<?php echo "$link"; ?></p>
                </div>
                <a href="<?php echo $src; ?>" data-featherlight="iframe" data-featherlight-iframe-width="1000" data-featherlight-iframe-height="1000" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true">Watch Video</a>
                 <?php endif; ?>  

      </div>

      <div id="video1">
                <?php 
                  $link = get_field('video3_caption');
                  $img = get_field('pic3');
                  $src = get_field('video_source3');
                  if( $link ): ?>
                <img src="<?php echo $img['url']; ?>">
                <div>
                <p>​<?php echo "$link"; ?></p>
                </div>
                <a href="<?php echo $src; ?>" data-featherlight="iframe" data-featherlight-iframe-width="1000" data-featherlight-iframe-height="1000" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true">Watch Video</a>
                 <?php endif; ?>  

      </div>

      <div id="video1">
                <?php 
                  $link = get_field('video4_caption');
                  $img = get_field('pic4');
                  $src = get_field('video_source4');
                  if( $link ): ?>
                <img src="<?php echo $img['url']; ?>">
                <div>
                <p>​<?php echo "$link"; ?></p>
                </div>
                <a href="<?php echo $src; ?>" data-featherlight="iframe" data-featherlight-iframe-width="1000" data-featherlight-iframe-height="1000" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true">Watch Video</a>
                 <?php endif; ?>  
      </div>
</div>

        <div class="col-6">

             <div id="video1">
                <?php 
                  $link = get_field('video5_caption');
                  $img = get_field('pic5');
                  $src = get_field('video_source5');
                  if( $link ): ?>
                <img src="<?php echo $img['url']; ?>">
                <div>
                <p>​<?php echo "$link"; ?></p>
                </div>
                <a href="<?php echo $src; ?>" data-featherlight="iframe" data-featherlight-iframe-width="1000" data-featherlight-iframe-height="1000" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true">Watch Video</a>
                 <?php endif; ?>  

            </div>

           <div id="video1">
                <?php 
                  $link = get_field('video6_caption');
                  $img = get_field('pic6');
                  $src = get_field('video_source6');
                  if( $link ): ?>
                <img src="<?php echo $img['url']; ?>">
                <div>
                <p>​<?php echo "$link"; ?></p>
                </div>
                <a href="<?php echo $src; ?>" data-featherlight="iframe" data-featherlight-iframe-width="1000" data-featherlight-iframe-height="1000" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true">Watch Video</a>
                 <?php endif; ?>  

            </div>

            <div id="video1">
                <?php 
                  $link = get_field('video7_caption');
                  $img = get_field('pic7');
                  $src = get_field('video_source7');
                  if( $link ): ?>
                <img src="<?php echo $img['url']; ?>">
                <div>
                <p>​<?php echo "$link"; ?></p>
                </div>
                <a href="<?php echo $src; ?>" data-featherlight="iframe" data-featherlight-iframe-width="1000" data-featherlight-iframe-height="1000" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true">Watch Video</a>
                 <?php endif; ?>  

            </div>

            <div id="video1">
                <?php 
                  $link = get_field('video8_caption');
                  $img = get_field('pic8');
                  $src = get_field('video_source8');
                  if( $link ): ?>
                <img src="<?php echo $img['url']; ?>">
                <div>
                <p>​<?php echo "$link"; ?></p>
                </div>
                <a href="<?php echo $src; ?>" data-featherlight="iframe" data-featherlight-iframe-width="1000" data-featherlight-iframe-height="1000" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true">Watch Video</a>
                 <?php endif; ?>  

            </div>


        </div>


                 <div class="col-6">    
          

             <div id="video1">
                <?php 
                  $link = get_field('video10_caption');
                  $img = get_field('pic10');
                  $src = get_field('video_source10');
                  if( $link ): ?>
                <img src="<?php echo $img['url']; ?>">
                <div>
                <p>​<?php echo "$link"; ?></p>
                </div>
                <a href="<?php echo $src; ?>" data-featherlight="iframe" data-featherlight-iframe-width="1000" data-featherlight-iframe-height="1000" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true">Watch Video</a>
                 <?php endif; ?>  

            </div>

            <div id="video1">
                <?php 
                  $link = get_field('video11_caption');
                  $img = get_field('pic11');
                  $src = get_field('video_source11');
                  if( $link ): ?>
                <img src="<?php echo $img['url']; ?>">
                <div>
                <p>​<?php echo "$link"; ?></p>
                </div>
                <a href="<?php echo $src; ?>" data-featherlight="iframe" data-featherlight-iframe-width="1000" data-featherlight-iframe-height="1000" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true">Watch Video</a>
                 <?php endif; ?>  

            </div>

             <div id="video1">
                <?php 
                  $link = get_field('video9_caption');
                  $img = get_field('pic9');
                  $src = get_field('video_source9');
                  if( $link ): ?>
                <img src="<?php echo $img['url']; ?>">
                <div>
                <p>​<?php echo "$link"; ?></p>
                </div>
                <a href="<?php echo $src; ?>" data-featherlight="iframe" data-featherlight-iframe-width="1000" data-featherlight-iframe-height="1000" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true">Watch Video</a>
                 <?php endif; ?>  

                </div>
            </div>

</div>
</section>

</main>
<!-- #main -->
</div>
<!-- #primary -->
<?php get_footer(); ?>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

function reset(){
  var iframe = document.getElementById('myVideo');
  iframe.src = iframe.src;
  var preview = document.getElementById('preview');

}


var slideIndex = 1;
showDivs(slideIndex);
// showSlides(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}



function currentSlide(n) {
  showSlides(slideIndex = n);
}


function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

</script>
