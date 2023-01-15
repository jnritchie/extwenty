<?php
/**
 * Template Name: X Cover Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header('front');
?>

<style>

	.post-meta-wrapper {
		/* this is an annoy addition from the content-cover.php part */
		display: none;
	}

</style>
<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content-cover-front' );
		}
	}

	?>

	<!-- -->

	<div id="products" class="w-100 pv6 bg-light-pink">
		<div class="mw9 center">
			<h2 class="f0 tc mb1"><?php echo get_field('product_section_title'); ?></h2>
			<p class="tc"><?php echo get_field('product_section_text') ?></p>

			<?php 

				$prod = array (
					'post_type' => 'product',
					//'post_status' => 'published',
					'orderby' => 'published_date'				
				);

				$products = array();
				$products['products'] = Timber::get_posts($prod);
				Timber::render('fp-product-grid.twig', $products);	

				//echo "<pre>";
				//echo print_r($products);
				//echo "</pre>";

				if ( get_field('product_section_link') != "" ) {
					echo "<div class='mt5 tc'><a class='pa4 f1 fw6 ba bw3 white b--white dim' style='text-decoration:none;' href='";
					echo get_field("product_section_link");
					echo "'>See All Bundles</a></div>";
				}

			?>
		</div>
	</div><!-- /Shop -->

	<div id="join" class="pv6">
		<div class="cf mw9-l center">
			<h2 class="f0 tc">Let's Connect</h2>
			<!--div class="fl w-50 pa3">
				<p class="f2">Get periodic updates via email on progress in this sector. Whether your a consumer, patient or potential producer.</p>
			</div -->
			<div class="ph3 ph0-l">
			 	<?php echo do_shortcode('[ninja_form id='.get_field('form_id').']'); ?>
			</div>
		</div>
	</div>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
