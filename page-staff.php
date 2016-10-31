<?php
/**
 * Template Name: Staff
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

<?php 
$args = array( 'post_type' => 'staff', 'posts_per_page' => -1, 'order' => 'ASC' );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
	echo '<div class="staff-member">';
  	the_title();
   	echo '<div class="staff-content">';
  		the_content();
  	echo '</div>';
  echo '</div>';
endwhile; ?>
		<div class="clearfix"></div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();?>
</div>
<?php
get_footer();
