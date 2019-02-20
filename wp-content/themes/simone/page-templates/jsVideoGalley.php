<?php
   /**
    * Template Name: Js New video gallery Template
    */
   
   get_header(); ?>



<style type="text/css"> 

#primary {
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
}

#preview img {
    width: 670px;
    height: 430px;
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
    padding-top: 2.5rem;
    font-size: 3.5rem;
}


/*hr divider */

#divider {
    width: 40%;
    margin:auto;
    margin-top: 4vh;
    margin-bottom: 2rem;
    background-color: #123;
    height: 5px;
    padding: 2px;
}


/* second type of hr divider */

#divider2 {
    width: 70%;
    margin: auto;
    margin-top: 4vh;
    margin-bottom: 2rem;
    background-color: #123;
    height: 5px;
    padding: 2px;
}


/* button setting for next and previous */

.w3-position {
    margin: auto;
    margin-left: 17.5vw;

}

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
        font-size: 2.5rem;
        text-align: center;
    }
    #preview img {
        width: 100%;
        height: 300px;
        margin-left: -3vw;
    }
    #divider {
        margin-left: 25vw;
    }
    .w3-position {
        margin-left: 30.5vw;
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

    #divider2 {
        margin-left: 18vw;
    }

    .text{
        text-align: center;
        margin-left: 3vw;
    }
}



/***************************** Testmonila video section ****************************************/

.body {
    box-sizing: border-box;
    width: 100%;
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

.lower-section .row {
    margin-left: 8vw;
}

.content-area-lander-page { 
    background: linear-gradient(0deg, rgba(255, 255, 255, 0.3), rgba(255, 250, 220, 0.7)), url('/dariusassemi/wp-content/uploads/2019/02/ina-soulis-227104-unsplash.jpg');
    background-size: cover;
    background-position: center;
}



.myvideo{

    display: none;
}

</style>   

<div id="primary" class="content-area-lander-page">
    <main id="main" class="site-main" role="main">
<!-- 
<?php

$img = get_field('pic1-slider');
echo '<h1>' . $img .'</h1>';


?> -->

    </main>
<!-- #main -->
</div>
<!-- #primary -->




<?php get_footer(); ?>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>


var main = document.querySelector('main');
console.log(main);

var i =0;
// var link = "<?php 
//             $link = get_field('video1_caption');
//             $img = get_field('pic1-slider');
//             $src = get_field('video_source1');
//             if( $link ): ?>"


var mySlide;
var preview;
var img;
var myvideo;
var iframe;




// var imgSrc = '<?php  get_field('pic1-slider'); ?>';
// console.log(imgSrc);

for(i;i<11;i++){


    mySlide = document.createElement('div');
    mySlide.setAttribute('class', 'mySlides fade');
    preview = document.createElement('div');
    preview.setAttribute('id', 'preview');
    // $('preview').click(function(){
    // $(this).nextSibling.style.display='block'
    // $(this).style.display='none'
    // });

    img = document.createElement('img');
    img.setAttribute('id', 'src');
    img.setAttribute('src', 'dariusassemi/wp-content/uploads/2019/02/lukas-blazek-261681-unsplash.jpg');

    myvideo = document.createElement('div');
    myvideo.setAttribute('class', 'myvideo');
    iframe = document.createElement('iframe');
    preview.textContent = 'sdsaas';
   
    main.appendChild(mySlide);
    mySlide.appendChild(preview);
    preview.appendChild(img);
    mySlide.appendChild(myvideo);
    myvideo.appendChild(iframe);


}    

// function reset(){
//   var iframe = document.getElementById('myVideo');
//   iframe.src = iframe.src;
//   var preview = document.getElementById('preview');

// }


// var slideIndex = 1;
// // showDivs(slideIndex);
// // showSlides(slideIndex);

// function plusDivs(n) {
//   showDivs(slideIndex += n);
// }



// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }


// function showDivs(n) {
//   var i;
//   var x = document.getElementsByClassName("mySlides");
//   if (n > x.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = x.length}
//   for (i = 0; i < x.length; i++) {
//     x[i].style.display = "none";  
//   }
//   x[slideIndex-1].style.display = "block";  
// }

</script>
