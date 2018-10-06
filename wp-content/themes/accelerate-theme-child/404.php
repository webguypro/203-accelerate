<?php
/**
 * The template for displaying 404 pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content-404 sidebar">
		<div class="main-content" role="main">
			<div class="description-404 clearfix">
				<a href="http://localhost:8888/accelerate/wp-content/uploads/2018/10/map-accelerate.png"><img src="http://localhost:8888/accelerate/wp-content/uploads/2018/10/map-accelerate-300x278.png" alt="" width="300" height="278" class="alignnone size-medium wp-image-47547" /></a>

				<h1>Whoops, Took a Wrong Turn...</h1>

				<h4>Sorry, this page no longer exists, never existed or has been moved.  We feel like complete jerks for totally misleading you.</h4>
				<h4>Feel free to take a look around our blog or some of our featured work.</h4>
				
			</div>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
