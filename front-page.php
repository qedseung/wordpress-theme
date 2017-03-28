<?php 
/** This static front page overrides any designated front-page from wp-admin. 
 *  use the below code to insert other post or pages into this page
 		$mypostid = 52;//This is page id or post id
		$content = get_post($mypostid)->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		echo $content;
*/
get_header(); ?>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <ul class="w3-navbar w3-white w3-text-black" id="myNavbar">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-hover-black" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
    </li>
    <li class="w3-left-align"><a href="#home"><i class="fa fa-home"></i></i>Home</a></li>
    <li class="w3-hide-small"><a href="#about"><i class="fa fa-user"></i>About Me</a></li>
    <li class="w3-hide-small w3-dropdown-hover">
    	<a href="#portfolio"><i class="fa fa-th"></i>Portfolio</a>
    	<div class="w3-dropdown-content w3-white w3-card-4">
	      <a href="#supercamp"><i class="fa fa-tree"></i> Super Camp</a>
	      <a href="#mush"><i class="fa fa-rocket"></i> Mushka</a>
	    </div>
    </li>
    <li class="w3-hide-small"><a href="https://gumroad.com/wizardofkitty"><i class="fa fa-money"></i>Store</a></li>
    <li class="w3-hide-small"><a href="#contact"><i class="fa fa-envelope"></i>Contact</a></li>
  </ul>
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-white">
      <li><a href="#about" onclick="toggleFunction()"><i class="fa fa-user"></i>ABOUT</a></li>
      <li><a href="#portfolio" onclick="toggleFunction()"><i class="fa fa-th"></i>PORTFOLIO</a></li>
      <li class="w3-left-align"><a href="https://gumroad.com/wizardofkitty"><i class="fa fa-money"></i>Store</a></li>
      <li class="w3-left-align"><a href="#contact"><i class="fa fa-envelope"></i>Contact</a></li>
    </ul>
  </div>
</div>
<!--end navs-->
<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <!--<span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span class="w3-hide-small">WEBSITE</span> LOGO</span>-->
    <span class="w3-center w3-padding-xlarge w3-black w3-xxlarge w3-wide w3-animate-opacity">CRYSTAL KAN'S PORTFOLIO</span>
  </div>
</div>
<div class="w3-content w3-container w3-padding-64" id="portfolio"> <br>
  <h3 class="w3-center">MY WORK</h3>
  <p class="w3-center"><em>Here are some of my latest storyboards.<br> Please give them a nice click</em></p><br>
  <p id="output"></p>
  <br>
</div>
<div id="supercamp" class="bgisc w3-display-container w3-opacity-min">
  <div class = "w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xxlarge w3-wide w3-animate-opacity ">ILLUSTRATIONA AND SKETCHES</span>
  </div>
</div>
<div class="w3-content w3-container w3-center w3-margin-top w3-margin-bottom w3-padding-xlarge">
<!--?php echo do_shortcode('[gallery columns="4" link="file" size="thumbnail" ids="15,16,17,18"]') ?-->
	<?php 
		$mypostid = 47;//This is page id or post id
		$content = get_post($mypostid)->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		echo $content;
	?>
</div>
<div id="mush" class="bgimu w3-display-container w3-opacity-min">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xxlarge w3-wide w3-animate-opacity">MUSHKA</span>
  </div>
</div>
<div class="w3-content w3-container w3-center w3-margin-top w3-margin-bottom">
	<div class= "w3-row-padding w3-center w3-padding-16">
		<?php 
		$mypostid = 52;//This is page id or post id
		$content = get_post($mypostid)->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		echo $content;
	  ?>
	</div>
</div>

<!-- Second paralax image -->
<div class="bgimg-2 w3-display-container w3-opacity-min" id="about">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xxlarge w3-wide w3-animate-opacity">ABOUT ME</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64">
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <!--<p><b><i class="fa fa-user w3-margin-right"></i>My Name</b></p><br>-->
      <img src="<?php echo get_template_directory_uri(); ?>/img/BioPic.png" class="w3-round w3-image w3-hover-opacity-off" alt="Photo of Me" width="500px" height="333px">
      <!-- <%= image_tag("BioPic.png",alt: "photo of me") %> -->
    </div>
    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>Crystal Kan is an freelance comic artist and illustrator based in Los Angeles. She self publishes comic books and works freelance on various projects. In her spare time, Crystal enjoys cooking, video games, making silly puns and growing plants from kitchen scraps.<br>
      Previous projects include:</p>
      <ul>
        <li>Marvel's Spiderman (Storyboards)</li>
        <li>Kazu Kibuishi's Amulet (Page Flats)</li>
        <li>Dungeon Marauders (iOS Game Character Art)</li>
        <li>Light Weight RPG (Book Illustrations and Playtesting)</li>
      </ul>
    </div>
  </div>
</div>
<div class="w3-padding-64 w3-content" id="contact">
	<h2>Contact Me</h2>
	<hr style="width:200px">
    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-black w3-xxlarge w3-margin-right"></i> Los Angeles, CA</p>
      <p><i class="fa fa-envelope fa-fw w3-text-black w3-xxlarge w3-margin-right"> </i> Email: crystaltk(at)gmail.com</p>
    </div><br>
</div>

<?php get_footer(); ?>
