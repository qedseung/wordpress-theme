<?php /**
 * Much customization can be done here in the style section with a little knowlegde of html and css.
 * As of the creation of this theme front-page.ph and tempo.php only use these parallax background images.
 * These backgrounds are available to any page, to change the background images you may either reference 
 * one of the existing classes, change the image references by one of the existing classes, or make your
 * own class. Then you must make sure the html container reference the class you want.
 */ ?>
<!DOCTYPE html>
<html>
  <head>
      <title>Testing</title>
      <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    	<style type="text/css">
        body {font-family: Arial, sans-serif;}
    		body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
    		body, html {
    		    height: 100%;
    		    color: #777;
    		    line-height: 1.8;
    		}
    		/* Create a Parallax Effect */
    		.bgimg-1, .bgimg-2, .bgimg-3, .bgimu, .bgisc {
    		    background-attachment: fixed;
    		    background-position: center;
    		    background-repeat: no-repeat;
    		    background-size: cover;
    		}
    		/* First image (Logo. Full height) */
    		.bgimg-1 {
    		    background-position: 50% 20%;
    		    background-image: url("<?php echo get_template_directory_uri(); ?>/img/cooking.png");
    		    min-height: 100%;
    		}
    		/* Second image (About) */
    		.bgimg-2 {
    			  background-position: 50% 80%;
    		    background-image: url("<?php echo get_template_directory_uri(); ?>/img/HugTheGoat_NoTXT.png");
    		    min-height: 500px;
    		}
    		.bgimu{
    			background-position: 50% 20%;
    			background-image: url("<?php echo get_template_directory_uri(); ?>/img/muposter.png");
    			min-height: 500px
    		}
    		.bgisc{
    		  background-position: 50% 20%;
    			background-image: url("<?php echo get_template_directory_uri(); ?>/img/supercamp_pamphlet.png");
    			min-height: 500px
    		}
    		.w3-wide {letter-spacing: 10px;}
    		.w3-hover-opacity {cursor: pointer;}
    
    		/* Turn off parallax scrolling for tablets and phones */
    		@media only screen and (max-device-width: 1024px) {
    		    .bgimg-1, .bgimg-2, .bgimg-3, .bgimu, .bgisc, .bgipage {
    		        background-attachment: scroll;
    		    }
    		}
        </style>
        <?php wp_head(); ?>
    </head>
<body>
    	  
    	

