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
										<script>
											imsUtil.registerFormValidationSettings("#ims-form-module-form-10", {
												"rules": {
													"data[FormResponse-10][1]": {
														"required": true
													},
													"data[FormResponse-10][2]": {
														"required": true
													},
													"data[FormResponse-10][4]": {
														"required": true
													},
													"data[FormResponse-10][3]": {
														"required": true
													}
												},
												"messages": {
													"data[FormResponse-10][1]": {
														"required": "Please enter your first name"
													},
													"data[FormResponse-10][2]": {
														"required": "Please enter your last name"
													},
													"data[FormResponse-10][4]": {
														"required": "Please enter your phone number"
													},
													"data[FormResponse-10][3]": {
														"required": "Please enter an email address"
													},
													"data[FormResponse-10][10]": {
														"required": "Please enter your zip code"
													},
													"data[FormResponse-10][67]": {
														"required": "Please let us know what kind of service you need"
													},
													"data[FormResponse-10][68]": {
														"required": "Please let us know what kind of service you need"
													},
													"data[FormResponse-10][6][]": "Please enter a response for "
												}
											});
										</script>
									</fieldset>
								</form>
							</div><!-- secondary-tools -->
						</div>
					</section><!-- mini-form -->
				</div>
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
									<div class="promotions-popup" id="promotion-popup-59" style="display:none;">
										<div class="popup-inner">
											<div class="promotions-popup-header">
												<div class="popup-header-left">
													<div class="promotion expanded">
														<?php
														$logo = get_field('site_logo', 'option');
														if (!empty($logo)): ?>
															<img class="promotion-logo" src="<?php echo esc_url($logo['url']); ?>" alt="<?php bloginfo('name'); ?>" />
														<?php else: ?>
															<img class="promotion-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Comfy Heating &amp; Air Conditioning Inc." />
														<?php endif; ?>
														<h2><a href="/promotions/free-estimates">Free Estimates</a></h2>

														<p>Free Estimates on New Installations</p>
														<p class="disclaimer">Limit one coupon per customer. Offers cannot be combined with any other discounts, promotions, or coupons. Coupon must be presented at time of purchase and is valid for a single use only. No cash value. Other restrictions may apply.</p>
														<p class="expiration"></p>
													</div>
													<h4>Call to Redeem</h4>
													<div class="phone-button cta-button">
														<?php $business_phone= get_field('phone_number', 'option');
														if ($business_phone):
															$clean_phone = preg_replace('/\D+/', '', $business_phone);
															$tel_link = 'tel:' . $clean_phone;
														else:
															$tel_link = 'tel:8777726639';
															$business_phone = '877-772-6639';
														?>
														<a href="tel:<?php echo str_replace(array('(', ')', ' ', '-'), '', $business_phone); ?>">
															<?php echo $business_phone ? $business_phone : '877-772-6639'; ?>
														</a>
														<?php endif; ?>
													</div>
												</div>
												<div class="popup-header-right">
													<span class="close-popup">X</span>
												</div>
											</div>
											<p class="view-all"><a href="/about/promotions?v=">View All Promotions</a></p>
										</div>
									</div>
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
			</div>
		</div>
	</aside>
</div>