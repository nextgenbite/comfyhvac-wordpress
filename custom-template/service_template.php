<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package comfyhvac
 * 
 * Template Name: Service Page
 */
get_header();
?>

<main id="main-container">

	<div id="content">
		<section id="content-wrap">

			<div class="width-limiter">
				<div class="content-left">

					<?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content', 'page');

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>


				</div>

				<?php get_sidebar(); ?>

			</div>
		</section>

	</div><!-- #content -->
</main>

<div id="promotion-popup" class="ims-lightbox" style="display: none;">
	<div class="promotions-popup" id="promotion-popup-59">
		<div class="popup-inner">
			<div class="promotions-popup-header">
				<div class="popup-header-left">
					<div class="promotion expanded">
						<?php $logo= get_field('site_logo', 'option');
						if(!empty($logo)): ?>
							<img src="<?php echo esc_url($logo['url']); ?>" alt="<?php bloginfo('name'); ?>" class="promotion-logo">
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>" class="promotion-logo">
						<?php endif; ?>
						<h2><a href="/promotions/free-estimates">Free Estimates</a></h2>

						<p>Free Estimates on New Installations</p>
						<p class="disclaimer">Limit one coupon per customer. Offers cannot be combined with any other discounts, promotions, or coupons. Coupon must be presented at time of purchase and is valid for a single use only. No cash value. Other restrictions may apply.</p>
						<p class="expiration"></p>
					</div>
					<h4>Call to Redeem</h4>
					<div class="phone-button cta-button">
						<a href="tel:<?php echo get_field('phone_number', 'option'); ?>"><?php echo get_field('phone_number', 'option'); ?></a>
					</div>
				</div>
				<div class="popup-header-right">
					<span class="close-popup">X</span>
				</div>
			</div>
			<p class="view-all"><a href="/about/promotions?v=">View All Promotions</a></p>
		</div>
	</div>
</div>

<?php get_footer(); ?>