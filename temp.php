<?php /* Template Name: tempo */ 

if (strpos($pagename, "mushka") !== false) 
    $var = "bgimu";
elseif (strpos($pagename, "super")!==false)
    $var = "bgisc";
else $var = "bgimg-1";
get_header(); ?>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <ul class="w3-navbar" id="myNavbar">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-hover-black" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
    </li>
    <li class="w3-left-align"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-home"></i></i> Home</a></li>
    <li class="w3-left-align"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#about"><i class="fa fa-user"></i>About Me</a></li>
    <li class="w3-left-align"><a href="<?php echo esc_url( home_url('/')); ?>#portfolio"><i class="fa fa-th"></i> Portfolio</a></li>
    <li class="w3-left-align"><a href="https://gumroad.com/wizardofkitty"><i class="fa fa-usd"></i>Store</a></li>
    <li class="w3-left-align"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact"><i class="fa fa-envelope"></i>Contact</a></li>
  </ul>
  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-white">
      <li class="w3-left-align"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-home"></i></i> Home</a></li>
      <li class="w3-left-align"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#about"><i class="fa fa-user"></i>About Me</a></li>
      <li class="w3-left-align"><a href="<?php echo esc_url( home_url('/')); ?>#portfolio"><i class="fa fa-th"></i> Portfolio</a></li>
      <li class="w3-left-align"><a href="https://gumroad.com/wizardofkitty"><i class="fa fa-usd"></i>Store</a></li>
      <li class="w3-left-align"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact"><i class="fa fa-envelope"></i>Contact</a></li>
    </ul>
  </div>
</div>
<!--end navbars-->
<div class="<?php echo $var ?> w3-display-container w3-opacity-min" id="home" style="min-height:100%;">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xxlarge w3-wide w3-animate-opacity"><?php wp_title(''); ?></span>
  </div>
</div>

<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
    <div class="w3-content w3-container w3-margin-top w3-margin-bottom w3-padding-xlarge w3-justify">
        <!--<h2 class="pagetitle"><a href="<?php the_permalink() ?>" title="Permalink">ABOUT ME</a></h2>-->
<?php the_content(); ?>
    </div>
<?php
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
    get_footer(); 
?>