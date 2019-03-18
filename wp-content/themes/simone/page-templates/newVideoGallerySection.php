<?php
   /**
    * Template Name: template for newVideoGallerySection
    */

   get_header(); ?>
    <div id="primary" class="content-area.lander-page">
        <main id="main" class="site-main" role="main">
             <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

            <!-- <body> -->
                <p style="text-align:center; padding: 2.5rem; font-size: 2.5rem; font-family:Montserrat,sans-serif">A selection of recent public addresses and interviews.</p>
                <ul id="svList">

                    <?php 
                    $caption = get_field('video1_caption');
                    $video = get_field('data-videoid_1');
                    // echo '<h1 style="color:red">'.$video.'</h1>';

                    if($video): ?>
                    <li class="svThumb ytVideo" data-videoID="<?php echo $video; ?>">​<?php echo $caption; ?></li>
                    <?php endif; ?>

                    <?php 
                    $caption = get_field('video2_caption');
                    $video = get_field('data-videoid_2');
                    // echo '<h1 style="color:red">'.$video.'</h1>';

                    if($video): ?>
                    <li class="svThumb ytVideo" data-videoID="<?php echo $video; ?>">​<?php echo $caption; ?></li>
                    <?php endif; ?>
                    
                    <?php 
                    $caption = get_field('video3_caption');
                    $video = get_field('data-videoid_3');
                    // echo '<h1 style="color:red">'.$video.'</h1>';

                    if($video): ?>
                    <li class="svThumb ytVideo" data-videoID="<?php echo $video; ?>">​<?php echo $caption; ?></li>
                    <?php endif; ?>


                    <?php 
                    $caption = get_field('video4_caption');
                    $video = get_field('data-videoid_4');
                    // echo '<h1 style="color:red">'.$video.'</h1>';

                    if($video): ?>
                    <li class="svThumb ytVideo" data-videoID="<?php echo $video; ?>">​<?php echo $caption; ?></li>
                    <?php endif; ?>


                    <?php 
                    $caption = get_field('video5_caption');
                    $video = get_field('data-videoid_5');
                    // echo '<h1 style="color:red">'.$video.'</h1>';

                    if($video): ?>
                    <li class="svThumb ytVideo" data-videoID="<?php echo $video; ?>">​<?php echo $caption; ?></li>
                    <?php endif; ?>


                    <?php 
                    $caption = get_field('video6_caption');
                    $video = get_field('data-videoid_6');
                    // echo '<h1 style="color:red">'.$video.'</h1>';

                    if($video): ?>
                    <li class="svThumb ytVideo" data-videoID="<?php echo $video; ?>">​<?php echo $caption; ?></li>
                    <?php endif; ?>


                    <?php 
                    $caption = get_field('video7_caption');
                    $video = get_field('data-videoid_7');
                    // echo '<h1 style="color:red">'.$video.'</h1>';

                    if($video): ?>
                    <li class="svThumb ytVideo" data-videoID="<?php echo $video; ?>">​<?php echo $caption; ?></li>
                    <?php endif; ?>


                    <?php 
                    $caption = get_field('video8_caption');
                    $video = get_field('data-videoid_8');
                    // echo '<h1 style="color:red">'.$video.'</h1>';

                    if($video): ?>
                    <li class="svThumb ytVideo" data-videoID="<?php echo $video; ?>">​<?php echo $caption; ?></li>
                    <?php endif; ?>


                    <?php 
                    $caption = get_field('video9_caption');
                    $video = get_field('data-videoid_9');
                    // echo '<h1 style="color:red">'.$video.'</h1>';

                    if($video): ?>
                    <li class="svThumb ytVideo" data-videoID="<?php echo $video; ?>">​<?php echo $caption; ?></li>
                    <?php endif; ?>


                    <?php 
                    $caption = get_field('video10_caption');
                    $video = get_field('data-videoid_10');
                    // echo '<h1 style="color:red">'.$video.'</h1>';

                    if($video): ?>
                    <li class="svThumb ytVideo" data-videoID="<?php echo $video; ?>">​<?php echo $caption; ?></li>
                    <?php endif; ?>


                    <?php 
                    $caption = get_field('video11_caption');
                    $video = get_field('data-videoid_11');
                    // echo '<h1 style="color:red">'.$video.'</h1>';

                    if($video): ?>
                    <li class="svThumb ytVideo" data-videoID="<?php echo $video; ?>">​<?php echo $caption; ?></li>
                    <?php endif; ?>

                </ul>

                <br><br><br>
                 <hr id="divider2">

<section class="lower-section">

 <div class="row">

  <div class="col-6">
          <div id="video1">
              <?php 
              $link = get_field('video1_caption');
              $img = get_field('pic1');
              $src = get_field('video_source1');
              if( $link ): ?>
                <a href="<?php echo $src; ?>"><button class="bgTumbnailVideo1" id="bgTumbnailVideo" style="background-image: url('<?php echo $img['url']; ?>');"></button>
                    <div>
                     <p>​<?php echo "$link"; ?></p>
                    </div>
                </a>
            <?php endif;?>
          </div>

          <div id="video1">
              <?php 
              $link = get_field('video2_caption');
              $img = get_field('pic2');
              $src = get_field('video_source2');
              if( $link ): ?>
                <a href="<?php echo $src; ?>"><button class="bgTumbnailVideo1" id="bgTumbnailVideo" style="background-image: url('<?php echo $img['url']; ?>');"></button>
                    <div>
                     <p>​<?php echo "$link"; ?></p>
                    </div>
                </a>
            <?php endif;?>
          </div>


          <div id="video1">
              <?php 
              $link = get_field('video3_caption');
              $img = get_field('pic3');
              $src = get_field('video_source3');
              if( $link ): ?>
                <a href="<?php echo $src; ?>"><button class="bgTumbnailVideo1" id="bgTumbnailVideo" style="background-image: url('<?php echo $img['url']; ?>');"></button>
                    <div>
                     <p>​<?php echo "$link"; ?></p>
                    </div>
                </a>
            <?php endif;?>
          </div>


          <div id="video1">
              <?php 
              $link = get_field('video4_caption');
              $img = get_field('pic4');
              $src = get_field('video_source4');
              if( $link ): ?>
                <a href="<?php echo $src; ?>"><button class="bgTumbnailVideo1" id="bgTumbnailVideo" style="background-image: url('<?php echo $img['url']; ?>');"></button>
                    <div>
                     <p>​<?php echo "$link"; ?></p>
                    </div>
                </a>
            <?php endif;?>
          </div>
    </div>

  <div class="col-6">
          <div id="video1">
              <?php 
              $link = get_field('video5_caption');
              $img = get_field('pic5');
              $src = get_field('video_source5');
              if( $link ): ?>
                <a href="<?php echo $src; ?>"><button id="bgTumbnailVideo" style="background-image: url('<?php echo $img['url']; ?>');"></button>
                    <div>
                     <p>​<?php echo "$link"; ?></p>
                    </div>
                </a>
            <?php endif;?>
          </div>

          <div id="video1">
              <?php 
              $link = get_field('video6caption');
              $img = get_field('pic6');
              $src = get_field('video_source6');
              if( $link ): ?>
                <a href="<?php echo $src; ?>"><button id="bgTumbnailVideo" style="background-image: url('<?php echo $img['url']; ?>');"></button>
                    <div>
                     <p>​<?php echo "$link"; ?></p>
                    </div>
                </a>
            <?php endif;?>
          </div>


          <div id="video1">
              <?php 
              $link = get_field('video7_caption');
              $img = get_field('pic7');
              $src = get_field('video_source7');
              if( $link ): ?>
                <a href="<?php echo $src; ?>"><button id="bgTumbnailVideo" style="background-image: url('<?php echo $img['url']; ?>');"></button>
                    <div>
                     <p>​<?php echo "$link"; ?></p>
                    </div>
                </a>
            <?php endif;?>
          </div>


          <div id="video1">
              <?php 
              $link = get_field('video8_caption');
              $img = get_field('pic8');
              $src = get_field('video_source8');
              if( $link ): ?>
                <a href="<?php echo $src; ?>"><button id="bgTumbnailVideo" style="background-image: url('<?php echo $img['url']; ?>');"></button>
                    <div>
                     <p>​<?php echo "$link"; ?></p>
                    </div>
                </a>
            <?php endif;?>
          </div>
    </div>

    <div class="col-6">
          <div id="video1">
              <?php 
              $link = get_field('video11_caption');
              $img = get_field('pic11');
              $src = get_field('video_source11');
              if( $link ): ?>
                <a href="<?php echo $src; ?>"><button id="bgTumbnailVideo" style="background-image: url('<?php echo $img['url']; ?>');"></button>
                    <div>
                     <p>​<?php echo "$link"; ?></p>
                    </div>
                </a>
            <?php endif;?>
          </div>

          <div id="video1">
              <?php 
              $link = get_field('video10_caption');
              $img = get_field('pic10');
              $src = get_field('video_source10');
              if( $link ): ?>
                <a href="<?php echo $src; ?>"><button id="bgTumbnailVideo" style="background-image: url('<?php echo $img['url']; ?>');"></button>
                    <div>
                     <p>​<?php echo "$link"; ?></p>
                    </div>
                </a>
            <?php endif;?>
          </div>


          <div id="video1">
              <?php 
              $link = get_field('video9_caption');
              $img = get_field('pic9');
              $src = get_field('video_source9');
              if( $link ): ?>
                <a href="<?php echo $src; ?>"><button id="bgTumbnailVideo" style="background-image: url('<?php echo $img['url']; ?>');"></button>
                    <div>
                     <p>​<?php echo "$link"; ?></p>
                    </div>
                </a>
            <?php endif;?>
          </div>
    </div>
</div>

</section>
                            


               <script type = "text/javascript">
    var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})(); 

</script>

<script>

    $(document).ready(function() {
        var $svThumb = $('.svThumb');

        $('#svList').wrapAll('<div id="svBox"></div>');
        $('#svBox').prepend('<div class="svPlayer">\
                  <div class="infoBox">\
                  <div class="nowPlaying"><h3 class="svTitle svTitleFix">Select a video from the gallery.</h3></div>\
                  </div>\
                  </div>');
        // $('.svPlayer').append('<div class="infoBox"></div>');
        //$('.infoBox').prepend('<div class="nowPlaying"><h3 class="svTitle svTitleFix">Select a video from the gallery.</h3></div>');
        $svThumb.wrapInner('<div class="sv-text"></div>');
        $svThumb.prepend('<span class="sv-overlay"></span>');

        $(".sv-text").each(function() {
            var $numWords = $(this).text().length;

            if (($numWords >= 35) && ($numWords < 45)) {
                $(this).css("font-size", "15px");
            } else if ($numWords >= 46) {
                $(this).css("font-size", "14px");
            }
        });

    });

$(document).ready(function() {
    // Youtube Video
    $('.ytVideo').each(function() {
        var $videoID = $(this).attr('data-videoID'),
            $txt = $(this).text(),
            $ytVideo = $('<div class="meuVideo"> <iframe width="560" height="315" src="https://www.youtube.com/embed/' + $videoID + '?showinfo=1&autoplay=1" frameborder="0" allowfullscreen></iframe> </div>'),
            $ytThumb = $('<img src="https://img.youtube.com/vi/' + $videoID + '/mqdefault.jpg" data-anchor="svBox"/>');

        $(this).prepend($ytThumb);
        $(this).click(function() {
            $('.meuVideo, .nowPlaying').remove();
            $('.svPlayer').prepend($ytVideo).hide().slideDown("fast");
            $('.infoBox').prepend('<div class="nowPlaying"><h3 class="svTitle">' + $txt + '</h3></div>');
            return false;
        });
    });

    // Vimeo Video
    $('.vimeoVideo').each(function() {
        var $videoID = $(this).attr('data-videoID'),
            $txt = $(this).text(),
            $vimeoVideo = $('<div class="meuVideo"> <iframe src="https://player.vimeo.com/video/' + $videoID + '?title=1&byline=1&portrait=1&badge=1&autoplay=1" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> </div>'),
            $thisElHack = this;

        $.getJSON('https://vimeo.com/api/v2/video/' + $videoID + '.json?callback=?', {
            format: "json"
        }, function(data) {
            var $vimeoThumb = data[0].thumbnail_large;
            $($thisElHack).prepend('<img src="' + $vimeoThumb + '" width="268" data-anchor="svBox"/>');
        });

        $(this).click(function() {
            $('.meuVideo, .nowPlaying').remove();
            $('.svPlayer').prepend($vimeoVideo).hide().slideDown("fast");
            $('.infoBox').prepend('<div class="nowPlaying"><h3 class="svTitle">' + $txt + '</h3></div>');
            return false;
        });
    });

    // DailyMotion Video
    $('.dailyMVideo').each(function() {
        var $videoID = $(this).attr('data-videoID'),
            $txt = $(this).text(),
            $dailyMVideo = $('<div class="meuVideo"> <iframe frameborder="0" width="640" height="360" src="//www.dailymotion.com/embed/video/' + $videoID + '?autoplay=1" allowfullscreen></iframe> </div>'),
            $thisElHack = this;

        $.getJSON('https://api.dailymotion.com/video/' + $videoID + '?fields=id,thumbnail_url', function(data) {
            var $dailyMThumb = data.thumbnail_url;
            $($thisElHack).prepend('<img src="' + $dailyMThumb + '" width="268" data-anchor="svBox"/>');
        });

        $(this).click(function() {
            $('.meuVideo, .nowPlaying').remove();
            $('.svPlayer').prepend($dailyMVideo).hide().slideDown("fast");
            $('.infoBox').prepend('<div class="nowPlaying"><h3 class="svTitle">' + $txt + '</h3></div>');
            return false;
        });
    });
});

//Scroll to Top on image click
$(document).ready(function() {
    $('.svThumb').click(function() {

        var $thumbPath2 = $('.svThumb img').attr("data-anchor"),
            $thumbAnchor2 = $("#" + $thumbPath2),
            $leftAbsolute2 = $(".html,body");
        // fixed bug by swapping .position to .offset
        // added + (-40) pixels from top
        $thumbPosition2 = $thumbAnchor2.offset().top + (-40)
        console.log($thumbPosition2);
        $leftAbsolute2.animate({
            scrollTop: $thumbPosition2
        });

        $('.closeUiBtn').remove();
        $('#svBox').prepend('<div class="closeUiBtn">&times;</div>');
        return false;
    });
    // Fechar Videos
    $(document).on('click', '.closeUiBtn', function() {
        $('.meuVideo, .nowPlaying, .closeUiBtn').remove();
        return false;
    });
});

$(document).ready(function() {
    function checkWidth() {

        var $svBoxParent = $("#svBox").parent().width(),
            $svBox = $("#svBox");

        if ($svBoxParent >= 900) {
            $svBox.removeClass();
            $svBox.addClass('mQuery900');
            console.log("900mQuery");
        } else if ($svBoxParent >= 700) {
            $svBox.removeClass();
            $svBox.addClass('mQuery700');
            console.log("700mQuery");
        } else if ($svBoxParent <= 550) {
            $svBox.removeClass();
            $svBox.addClass('mQuery550');
            console.log("550mQuery");
        }
    }
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);
    //Remove before shipping

});

</script>

  </main>
</div>
<?php get_footer(); ?>




<style type="text/css">
   


@import 'https://fonts.googleapis.com/css?family=Roboto';
@import url('https://fonts.googleapis.com/css?family=Oswald');


#primary {
      background:linear-gradient(0deg,rgba(255,255,255,0.3),rgba(75, 127, 168,0.2));
} 


#main{
  font-family: Montserrat;
}


/***************************** upper section video Js setting (css) ****************************************/
 
.svTitleFix {
   text-align:center;
}

.meuVideo {
    position: relative;
    padding-bottom: 53.25%; /* 16:9 */
    padding-top: 0px;
    height: 0;
}


.meuVideo iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.svTitle {
    font-family: Montserrat,sans-serif;
   font-weight: normal;
   margin: 0;
   padding: 0.5em;
    color: #444;
}

.adCenter {
   margin:0 auto;
   max-width:1300px;
}
#svBox{
   max-width:1300px;
   font-family: 'Montserrat', serif;
    margin:0 auto;
   position:relative;
   padding: 15px;
    background-color: rgba(75, 127, 168,0.5)
}
#svList {
    list-style: none;
    margin: 0 auto;
    padding: 0;
    display: block;
    font-size: 0;
}
#svList li {
    display: inline-block;
    *display:inline;/*for IE6 - IE7*/
    width:25%;
    vertical-align:middle;
    box-sizing:border-box;
    margin:0;
    padding:5px;
}
        
/* The wrapper for each item */
.svThumb {
    /*margin:12px;
    box-shadow:0 0 6px rgba(0,0,0,0.3);*/
    display:block;
    position: relative;
    overflow:hidden;
}
        
/* If have the image layer */
.svThumb img {
    display:block;
    width: 100%;
    height: auto;
    border:none;
    transition:all 1s;
}

#svList li:hover .svThumb img {
    transform:scale(1.05);
}
        
/***************************************** If have the overlay layer ******************************************/
.sv-overlay {
    position: absolute;
    display:block;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    background-size:50px 50px;
    opacity:0;
    filter:alpha(opacity=0);/*For IE6 - IE8*/
    transition:all 0.6s;
}
.ytVideo .sv-overlay {
    background: #3DC0F1 url("../images/youtube.png") no-repeat center 20%;
   background-size: 35px auto;
}
.vimeoVideo .sv-overlay {
    background: #3DC0F1 url("../images/vimeo.png") no-repeat center 20%;
   background-size: 30px auto;
}
.dailyMVideo .sv-overlay {
    background: #3DC0F1 url("../images/dailyMotion.png") no-repeat center 20%;
   background-size: 30px auto;
}
#svList li:hover .sv-overlay {
    opacity:0.8;
}

/***************************************** If have captions ******************************************/
.sv-text {
    display:block;
    padding:0 30px;
    box-sizing:border-box;
    position:absolute;
    left:0;
    width:100%;
    text-align:center;
    text-transform:capitalize;
    font-size:18px;
    font-weight:bold;
    font-family: 'Montserrat', sans-serif;
    font-weight:normal!important;
    top:40%;
    color:white;
    opacity:0;
    filter:alpha(opacity=0);/*For older IE*/
    transform:translateY(-20px);
    transition:all .3s;
   max-height: 65px;
    overflow: hidden;
}
#svList li:hover .sv-text {
    transform:translateY(0px);
    opacity:0.9;
}

.infoBox {
   clear: both;
   background-color: rgba(255,255,255,0.6);
   padding: 10px 10px;
}


.closeUiBtn {
    font-weight: 700;
    font-size: 40px;
    line-height: 40px;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    padding: 5px 15px;
    border-radius: 5px;
    position: absolute;
    right: -55px;
    background-color: rgba(0, 0, 0, 0.4);
}
.closeUiBtn:hover {
    color: #f5f5f5;
   background-color: #730f0f;
}

.svThumb, .closeUiBtn {cursor:pointer;}
.clear {clear: both;}


/***************************************** /* jQuery 9000 Media Queries/ ******************************************/

.mQuery900 #svList li {
   width:25%;
}
.mQuery900 .svTitle {
   font-size: 1.5em;
}

/***************************************** /* jQuery 700 Media Queries ******************************************/

.mQuery700 #svList li {
   width:33.33%;
}
.mQuery700 #svBox {
   width: 100%;
   max-width: 100%;
   font-size: 100%;
}
.mQuery700 .svTitle {
   font-size: 1.5em;
}
.mQuery700 .sv-text {
   font-size: 23px;
}


/***************************************** /* jQuery 550 Media Queries ******************************************/
.mQuery550 .meuVideo {
    padding-bottom: 51.20%;
}
.mQuery550 .svTitle {
   font-size: 1.17em;
}
.mQuery550 #svList li {
   width:50%;
}
.mQuery550 .closeUiBtn {
   font-size: 200%;
   line-height: 100%;
   position: initial;
   border-bottom-left-radius: 0;
   border-bottom-right-radius: 0;
}

/***************************** Testimonial video section ****************************************/



.bgTumbnailVideo1{

    background-size: cover; width: 265px;height: 250px;
   border-radius: 10%;
   background-position: center;
}

#bgTumbnailVideo{


   background-size: cover; width: 265px;height: 250px;
   border-radius: 10%;
   background-position: center;

}


/***************************** animation setting ****************************************/

.bgTumbnailVideo1{

   transition: all 0.7s ease-in-out;
}



#bgTumbnailVideo{
    transition: all 0.7s ease-in-out;
}


.bgTumbnailVideo1{
    transform: scale(1.08);
    cursor: pointer;
  }

#bgTumbnailVideo:hover{
    transform: scale(1.08);
    cursor: pointer;

}



/***************************** Low Testmonila section ****************************************/

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
    padding: 15px;
}

.col-6 {
    width: 18%;
}

#video1 {
    margin: 1.75rem;
    padding: 5px;
}

#video1 img {
    height: 200px;
    width: 200px;
    border-radius: 20%;
    padding: 3.5rem;
    margin-top: 1vh;
    margin-left: 9.5vw;
}

#video1 p {
    position: relative;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 1.25rem;
    /* padding around text */
    font-size: 1.3rem;
    text-align: center;
    width: 100%;
    margin-left: 21.5vw;

}

#video1 a {
    width: 100%;
    height: 100%;
    text-align: center;
    font-weight: bold;
    margin-left: 22.5vw;
}

#video1 #linkCaption{

    width: 100%;
    height: 100%;
    text-align: center;
    font-weight: bold;
    margin-left: 10.5vw;
    font-size: 2.2rem;
    font-family: Montserrat;

}


/******************************************************* responsive *********************************************************/

@media screen and (min-width: 320px) and (max-width: 375px) {

    .col-6 {
        width: 100%;
    }

    #bgTumbnailVideo{
      background-size: cover; 
      width: 250px;
      height: 200px;
      border-radius: 10%;
      background-position: center;

   }

      #video1 a {
       width: 100%;
       height: 100%;
       text-align: center;
       font-weight: bold;
       margin-left: 1.5vw;
   }

      #video1 p {
       
       font-size: 1.35rem;
       margin-left: -1.5vw;

   }
   
}

@media screen and (min-width: 376px) and (max-width: 475px) {

      .col-6 {
          width: 100%;
      }

      #video1 a {
       width: 100%;
       height: 100%;
       text-align: center;
       font-weight: bold;
       margin-left: 11.5vw;
   }

   #video1 p {
       
       font-size: 1.35rem;
       margin-left: -4.5vw;

   }
}


@media screen and (min-width: 476px) and (max-width: 581px) {

      .col-6 {
          width: 100%;
      }

      #video1 a {
       width: 100%;
       height: 100%;
       text-align: center;
       font-weight: bold;
       margin-left: 20.5vw;
   }

   #video1 p {
       
       font-size: 1.35rem;
       margin-left: -1.5vw;

   }
}

/*
@media screen and (min-width: 451px) and (max-width: 580px) {

    .col-6 {
        width: 100%;
    }

    #bgTumbnailVideo{
      background-size: cover; 
      width: 250px;
      height: 200px;
      border-radius: 10%;
      background-position: center;

   }

      #video1 a {
       width: 100%;
       height: 100%;
       text-align: center;
       font-weight: bold;
       margin-left: 10vw;
   }

      #video1 p {
       
       font-size: 1.75rem;

   }

  
   
}*/

@media screen and (min-width: 582px) and (max-width: 720px) {

    .col-6 {
        width: 50%;
    }

    #bgTumbnailVideo{
      background-size: cover; 
      width: 210px;
      height: 180px;
      border-radius: 10%;
      background-position: center;

   }

      #video1 a {
       width: 100%;
       height: 100%;
       text-align: center;
       font-weight: bold;
       margin: auto;
   }

      #video1 p {
       
       font-size: 1.25rem;
       margin: auto;


   }


      #video1 #linkCaption{

      width: 100%;
       height: 100%;
       text-align: center;
       font-weight: bold;
       margin-left: 8.5vw;
       font-size: 1.3rem;
       font-family: Montserrat;

   }

    
}

@media screen and (min-width: 720px) and (max-width: 900px) {

    
    .row{

      margin-left: -8vw;

    }

    .col-6 {
        width: 50%;
    }

    #bgTumbnailVideo{
      background-size: cover; 
      width: 220px;
      height: 200px;
      border-radius: 10%;
      background-position: center;

   }

      #video1 a {
       width: 100%;
       height: 100%;
       text-align: center;
       font-weight: bold;
       margin-left: 5vw;
   }

      #video1 p {
       
       font-size: 1.45rem;
       margin: auto;

   }


      #video1 #linkCaption{

      width: 100%;
       height: 100%;
       text-align: center;
       font-weight: bold;
       margin-left: 8.5vw;
       font-size: 2.0rem;
       font-family: Montserrat;

   }

    
}



@media screen and (min-width: 901px) and (max-width: 1200px) {

   .col-6 {
        width: 33.33%;
    }

    #bgTumbnailVideo{
      background-size: cover; 
      width: 200px;
      height: 200px;
      border-radius: 3%;
      background-position:center;
      /*margin: 5px;*/

   }

      #video1 a {
       width: 100%;
       height: 100%;
       text-align: center;
       font-weight: bold;
       margin-left: 1.5vw;
   }

      #video1 p {
       
       font-size: 1.35rem;
       margin-left: -8px;
       margin-top: -1vh;

   }

    #video1 #linkCaption{

      font-size: 1.2rem;
      margin-left: 4vw;

   }

    
}



@media screen and (min-width: 1201px) and (max-width: 1600px) {

   .col-6 {
        width: 33.33%;
    }

    #bgTumbnailVideo{
      background-size: cover; 
      width: 220px;
      height: 200px;
      border-radius: 3%;
      background-position:center;
      /*margin: 5px;*/

   }

      #video1 a {
       width: 100%;
       height: 100%;
       text-align: center;
       font-weight: bold;
       margin-left: 5vw;
   }

      #video1 p {
       
       font-size: 1.55rem;
       margin-left: -1vw;

   }

    #video1 #linkCaption{

      font-size: 1.5rem;
      margin-left: 8vw;

   }

    
}


@media screen and (min-width: 1601px) and (max-width: 1800px) {

   .col-6 {
        width: 33.33%;
    }

    #bgTumbnailVideo{
      background-size: cover; 
      width: 220px;
      height: 200px;
      border-radius: 3%;
      background-position:left;
      /*margin: 5px;*/

   }

      #video1 a {
       width: 100%;
       height: 100%;
       text-align: center;
       font-weight: bold;
       margin-left: 3vw;
   }

      #video1 p {
       
       font-size: 1.45rem;
      margin-left: -2.5vw;

   }

    #video1 #linkCaption{

      font-size: 1.5rem;
      margin-left: 8vw;

   }

    
}
    
    
}
</style>