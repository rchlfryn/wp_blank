<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blank
 */

get_header(); ?>
	<div class="content-container">
	<div id="primary" class="content-area">
		<main id="main" role="main">

		<!-- Hero section -->
		<div class="hero">
			<img src="http://placehold.it/1100x500">
			<button class="hero-cta">Call to action</button>
		</div>

		<div class="main-content">
			<div class="boxes">
				<div class="box"></div>
				<div class="box"></div>
				<div class="box"></div>
				<div class="box"></div>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
