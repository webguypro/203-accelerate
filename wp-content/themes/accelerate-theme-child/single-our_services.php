<?php
/**
 * The template for displaying our services
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="content" role="main">

		 <?php while ( have_posts() ) : the_post();
        $services = get_field('services');
        $image_1 = get_field('image_1');
        $image_2 = get_field('image_2');
        $image_3 = get_field('image_3');
        $image_4 = get_field('image_4'); ?>


      <article class="our-service">
        <?php $size = "full"; ?>
        <aside class="our-service-sidebar">
        	<h2><?php the_title(); ?></h2>
          <h5><?php echo $services; ?></h5>

           <?php the_content(); ?>
             	<a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
        </aside>

       <div class="our-service-images">
         <?php if($image_1) {
          echo wp_get_attachment_image( $image_1, $size );
        }?>
        <?php if($image_2) {
         echo wp_get_attachment_image( $image_2, $size );
        }?>
        <?php if($image_3) {
        echo wp_get_attachment_image( $image_3, $size );
        }?>
        <?php if($image_4) {
        echo wp_get_attachment_image( $image_4, $size );
        }?>

      </div>
    </article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->




<?php get_footer(); ?>
