<?php
 get_header(); //header 
?>
<!DOCTYPE html>
<html>
  <head>
  <title>Corus Exercise</title>
  <!--css files-->            
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <!--<link rel="stylesheet" type="text/css" href="/slick-theme.css"/>-->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>  
  <style>
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }

    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
          
    .slick-slider{
      margin: 0px auto; 
    }
          
    .slick-slider div{
      margin: 0px auto; 
      text-align:center; 
    }
  </style>
  </head>
  <body>
   <div class="slick-slider">
    <div><img src='<?php echo get_field("slide1");  ?>'></div>
    <div><img src='<?php echo get_field("slide2");  ?>'></div>
    <div><img src='<?php echo get_field("slide3");  ?>'></div>
   </div>
   <!--script files-->      
   <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
   <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
   <!--<script type="text/javascript" src="/slick.min.js"></script>-->
   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

   <script type="text/javascript">
    $(document).ready(function(){
      $('.slick-slider').slick({
        //setting-name: setting-value
           prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
           nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>',
           dots:true
      });
    });
   </script>

  </body>
</html>
<?php 
  get_footer(); //footer 
?>