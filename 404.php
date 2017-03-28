<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found w3-center">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'TestTheme' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( "Maybe it's in the trash?", 'TestTheme' ); ?></p>
					<img src="<?php echo get_template_directory_uri(); ?>/img/404_trash.png"></img><br>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Return Home</a>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->
</body>
</html>
