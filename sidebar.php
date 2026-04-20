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

<!-- <aside id="secondary" class="widget-area">
	<?php dynamic_sidebar('sidebar-1'); ?>
</aside> -->

<!-- #secondary -->

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
				<div id="miniform-content" style="display:none;">
					<section id="mini-form" class="secondary-tools-outer">
						<div class="width-limiter">
							<div class="secondary-tools">
								<h4 class="secondary-tools-heading mf-title">The First Step Towards Staying Comfy</h4>
								<p class="mf-subtitle">Fill Out The Form Below:</p>


								<form action="/contact/get-a-call-back" id="ims-form-module-form-10" enctype="multipart/form-data" class="horizontal" method="post">
									<fieldset>
										<ul>
											<li id="item-li-1" class=" required"><label for="list-response-form-10-item-1" class="label-heading">First Name <em>*</em></label> <input name="data[FormResponse-10][1]" id="list-response-form-10-item-1" value="" type="text"></li>
											<li id="item-li-2" class=" required"><label for="list-response-form-10-item-2" class="label-heading">Last Name <em>*</em></label> <input name="data[FormResponse-10][2]" id="list-response-form-10-item-2" value="" type="text"></li>
											<li id="item-li-4" class=" required"><label for="list-response-form-10-item-4" class="label-heading">Phone Number <em>*</em></label> <input name="data[FormResponse-10][4]" id="list-response-form-10-item-4" value="" type="text"></li>
											<li id="item-li-10-3" class=" required"><label for="list-response-form-10-item-3" class="label-heading">Email <em>*</em></label> <input name="data[FormResponse-10][3]" id="list-response-form-10-item-3" value="" type="text"></li>
											<li id="item-li-10" class=" required"><label for="list-response-form-10-item-10" class="label-heading">Zip</label> <input name="data[FormResponse-10][10]" id="list-response-form-10-item-10" value="" type="text"></li>
											<li id="item-li-67" class=" required"><label for="list-response-form-10-item-67">What kind of service do you need?</label> <select name="data[FormResponse-10][67]" id="list-response-form-10-item-67">
													<option value="">(select one)</option>
													<option value="1">Air Conditioning</option>
													<option value="9">Generators</option>
													<option value="2" selected="selected">Heating</option>
													<option value="3">Indoor Air Quality</option>
													<option value="10">Water Heaters</option>
												</select></li>
											<li id="item-li-68" class="radio required">
												<p class="label-heading"></p><span class="wrapper"><label for="dataformresponse1068_looking_for_a_new_system_or_replacement"><input type="radio" name="data[FormResponse-10][68]" id="dataformresponse1068_looking_for_a_new_system_or_replacement" value="2"> <span>Looking for a new system or replacement</span></label><label for="dataformresponse1068_in_need_of_repairs"><input type="radio" name="data[FormResponse-10][68]" id="dataformresponse1068_in_need_of_repairs" value="3"> <span>In need of repairs</span></label><label for="dataformresponse1068_interested_in_maintenance"><input type="radio" name="data[FormResponse-10][68]" id="dataformresponse1068_interested_in_maintenance" value="4"> <span>Interested in maintenance</span></label></span>
											</li>
											<li id="item-li-6" class="checkbox required">
												<p class="label-heading"></p><span class="wrapper"><label for="dataformresponse106_169c4d5631a91d"><input type="checkbox" name="data[FormResponse-10][6][]" id="dataformresponse106_169c4d5631a91d" value="1"> <span>Yes! Sign me up for the Comfy Heating &amp; Air Conditioning Inc. email list</span></label></span>
											</li>
										</ul>
									</fieldset>
									<fieldset>
										<ul>
											<li class="structured_particle_required company_name_required required"><label for="structured_particle_required_10">Structured Particle <em>*</em></label> <input name="structured_particle_required" id="structured_particle_required_10" value="" class="no-autopopulate" tabindex="-1" style="display: none;" type="text"></li>
										</ul> <input name="current_url" id="current_url-10" value="/heating/installation" type="hidden"> <input name="page_info" id="page_info-10" value="a:3:{s:2:&quot;id&quot;;i:200;s:4:&quot;name&quot;;s:69:&quot;Heating Installation &amp;ndash; Comfy Heating &amp;amp; Air in San Ramon, CA&quot;;s:9:&quot;page_type&quot;;s:12:&quot;Content Page&quot;;}" type="hidden">
										<ul class="submit">
											<li><button type="submit" class="action-button">Send</button></li>
										</ul>
									
									</fieldset>
								</form>
							</div><!-- secondary-tools -->
						</div>
					</section><!-- mini-form -->
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

											<p class="quote">"Comfy was the only company that could accommodate Saturday appointments. They exceeded my expectations and were polite, professional and knowledgeable."</p>
											<p class="source">- James H. Pleasant Hill, CA</p>
										</blockquote>
									</div>
									<p class="view-all"><a href="about/reviews">View All Reviews</a></p>
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