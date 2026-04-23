<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package comfyhvac
 */

if (! is_active_sidebar('sidebar-1')) {
	return;
}
?>



<div class="content-right">
	<aside class="sidebar-right">
		<div id="sidebar-content-bottom" class="sidebar-content">
			<div class="content-spacer">
				<div id="mini-form-cta" class="secondary-tools-outer">
					<div class="width-limiter">
						<span class="call-text-title">Get Started Today:</span>
						<div class="cta-button">
							<a href="" class="modal-trigger" data-append-id="miniform-content" data-modal-id="site-modal">Contact Us</a>
						</div>
						<span class="call-text">Or Call</span>
						<span class="cta-phone"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-phone.svg" width="45" height="56"><a href="tel:<?php echo get_field('phone_number', 'option'); ?>"><?php echo get_field('phone_number', 'option'); ?></a></span>
					</div>
				</div>


				<?php
				$current_id = get_the_ID();
				$parent_id  = wp_get_post_parent_id($current_id);
				$ancestors  = get_post_ancestors($current_id);


				$zone_id = (count($ancestors) == 2) ? $parent_id : $current_id;
				$services = get_children(array(
					'post_parent' => $zone_id,
					'post_type'   => 'service_area',
					'post_status' => 'publish',
					'orderby'     => 'menu_order',
					'order'       => 'ASC'
				));

				if (!empty($services)):
				?>
					<section id="secondary-navigation-outer" class="secondary-tools-outer">
						<div class="width-limiter">
							<div class="secondary-tools">
								<h4 class="secondary-tools-heading">
									<a href="<?php echo get_permalink($zone_id); ?>">
										<?php echo get_the_title($zone_id); ?>
									</a>
								</h4>
								<ul>
									<?php
									foreach ($services as $service) {
										if (($current_id === $service->ID)) {
											echo '<li class="current">';
											echo '<strong>' . esc_html($service->post_title) . '</strong>';
											echo '</li>';
										} else {

											echo '<li>';
											echo '<a href="' . get_permalink($service->ID) . '">' . esc_html($service->post_title) . '</a>';
											echo '</li>';
										}
									}
									?>
								</ul>
							</div>
						</div>
					</section>
				<?php endif; ?>
								<section class="secondary-tools-outer" id="promotions-secondary">
					<div class="width-limiter">
						<div class="secondary-tools">
							<h4 class="secondary-tools-heading">Stay Comfy and Save Money</h4>
							<ul class="promotions">
								<li>
									<a class="modal-trigger" data-modal-id="promotion-popup" data-append-id="promotion-popup-59">
										<div class="promo-image "></div>
										<span class="promo-title">Free Estimates</span>
										<span class="promo-teaser">on New Installations</span>
										<span class="promo-view-details">View Details</span>
									</a>
								
								</li>
							</ul>

							<p class="view-all"><a href="/about/promotions">View All Promotions</a></p>
						</div>
					</div>
				</section>
				<section class="secondary-tools-outer" id="testimonials-secondary">
					<div class="width-limiter">
						<div class="secondary-tools">
							<div class="testimonials-img">
								<picture>
									<source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/other/reviews-img.webp">
									<source type="image/jpeg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/other/reviews-img.jpg">
									<img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/other/reviews-img.jpg" width="700" height="472">
								</picture>
							</div>
							<div class="testimonials-main">
								<h4 class="secondary-tools-heading">Here’s What Our Loyal Customers Say</h4>
								<div class="testimonials-inner">
									<div class="testimonial">
										<blockquote>
											<?php $testimonial = get_field('testimonial'); if ($testimonial): ?>
												<p class="quote">"<?php echo $testimonial['quote']; ?>"</p>
												<p class="source">- <?php echo $testimonial['name']; ?></p>
											<?php endif; ?>
										</blockquote>
									</div>
									<p class="view-all"><a href="/about/reviews">View All Reviews</a></p>
								</div>
							</div>
						</div><!--secondary-tools-->
					</div>
				</section><!--secondary-tools-outer-->
				<?php if (have_rows('zip_codes')) :
					$total_rows = count(get_field('zip_codes'));
					$i = 0;

				?>
					<section class="secondary-tools-outer" id="zips-secondary">
						<div class="width-limiter">
							<div class="secondary-tools">
								<h4 class="secondary-tools-heading">We Serve The Following Zip Codes in <?php the_title(); ?>:</h4>
								<p>

									<?php while (have_rows('zip_codes')) : the_row(); ?>
										<?php the_sub_field('zip_code'); ?>
										<?php if (++$i !== $total_rows) echo ', '; ?>
									<?php endwhile; ?>
								</p>
							</div>
						</div>
					</section>
				<?php endif; ?>
			</div>
		</div>
	</aside>
</div>