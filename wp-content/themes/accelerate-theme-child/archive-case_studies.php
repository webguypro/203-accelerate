<?php
/**
 * The template for displaying the archive of case studies
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

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
        $image_1 = get_field("image_1");
        $size = "medium";
        $services = get_field('services');
      ?>
      <article class="case-study">
        <aside class="case-study-sidebar">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <h5><?php echo $services; ?></h5>

           <?php the_content(); ?>

           <p><strong><a href="<?php the_permalink(); ?>">View Project</a></strong></p>
      </aside>

      <div class="case-study-images">
          <?php if($image_1) {
            echo wp_get_attachment_image( $image_1, $size );
          }?>

      </div>

            </article>

				<?php the_excerpt(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

		<?php get_sidebar(); ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
