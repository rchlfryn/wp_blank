<?php
/**
 * Template Name: Training
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blank
 */

get_header(); ?>
	<div class="content-container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<h1 class="page-title screen-reader-text"><?php the_title(); ?></h1>  
		
		        <div class="entry">
		            <?php the_content(); ?>
		        </div><!-- entry -->
		<?php endwhile; ?>
		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();?>
</div>
<?php
get_footer();
