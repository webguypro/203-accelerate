<?php
/**
 * The template for displaying the About page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">

			<div class="about-description clearfix">
			<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
						<?php endwhile; // end of the loop. ?>
			</div>



		</div><!-- .main-content -->

	</div><!-- #primary -->


	<section class="our-services">
		<div class="site-content">
			<div id="our-services-top">
	    <h3>OUR SERVICES</h3>
			<h6>We take pride in our clients and the content we create for them.<br>
			Here's a brief overivew of our offered services.</h6>
		 </div>

     <div class="about-services clearfix">
			 <div class="services">
				 <ul class="homepage-our-services">
 				 <?php query_posts('posts_per_page=4&post_type=our_services'); ?>
 					 <?php while ( have_posts() ) : the_post();
 								 $image_1 = get_field("image_1");
                 $text = get_field("text");
 								 $size = "medium";
 				 ?>
 				 <li class="individual-our-services">

 							  <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image_1, $size); ?></a>

 								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<h4><?php the_content(); ?></h4>

 				 </li>

 				 <?php endwhile; ?>
 				<?php wp_reset_query(); ?>
 			</ul>
		</div>
	</section>

   <div class="interested-contact clearfix">
		 <a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a><h3>Interested in working with us?</h3>

	<div>

<?php get_footer(); ?>
