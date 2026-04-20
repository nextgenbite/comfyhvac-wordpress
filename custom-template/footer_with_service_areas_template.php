<?php

/**
 * Template Name: Footer with Service Areas Template
 * @package comfyhvac
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
			   <section class="secondary-tools-outer" id="service-area-list">
                <div class="sa-outer-box">
                    <div class="width-limiter">
                        <div class="sa-top-box">
                            <h4 class="secondary-tools-heading sa-title">Serving the East Bay and Tri Valley Areas Since 2001</h4>
                            <section class="secondary-tools-outer" id="service-area-search">
                                <div class="width-limiter">
                                    <div class="secondary-tools">
                                        <p>Do we serve your neighborhood?</p>
                                        <form method="post" action="<?php echo esc_url(home_url('/service-areas/')); ?>" id="service-area-search-form">
                                            <fieldset>
                                                <ul>
                                                    <li class="zip-input">
                                                        <label class="hide" for="zip_code">ZIP Code</label>
                                                        <input type="text" id="zip_code" name="zip_code" placeholder="Zip Code" />
                                                    </li>
                                                    <li class="submit">
                                                        <input type="submit" value="Search" />
                                                        <input type="hidden" value="1" name="is_postback" />
                                                    </li>
                                                </ul>
                                            </fieldset>
                                        </form>
                                    </div><!--secondary-tools-->
                                </div>
                            </section><!--secondary-tools-outer-->

                        </div>
                    </div>
                </div>
                <div class="sa-towns-box">
                    <div class="width-limiter">
                        <div class="sa-city-wrapper">

                            <ul class="service-cities">
                                <li><a href="/service-areas/alameda-ca-hvac">Alameda</a></li>
                                <li><a href="/service-areas/alamo-ca">Alamo</a></li>
                                <li><a href="/service-areas/danville-ca-hvac">Danville</a></li>
                                <li><a href="/service-areas/dublin-ca-hvac">Dublin</a></li>
                                <li style='clear:left;'><a href="/service-areas/hayward-ca-hvac">Hayward</a></li>
                                <li><a href="/service-areas/lafayette-ca">Lafayette</a></li>
                                <li><a href="/service-areas/livermore-ca">Livermore</a></li>
                                <li><a href="/service-areas/oakland-ca-hvac">Oakland</a></li>
                                <li style='clear:left;'><a href="/service-areas/orinda-ca">Orinda</a></li>
                                <li><a href="/service-areas/piedmont">Piedmont</a></li>
                                <li><a href="/service-areas/pleasanton-ca-hvac">Pleasanton</a></li>
                                <li><a href="/service-areas/san-leandro-ca-hvac">San Leandro</a></li>
                                <li style='clear:left;'><a href="/service-areas/san-ramon-ca-hvac">San Ramon</a></li>
                                <li><a href="/service-areas/walnut-creek-ca-hvac">Walnut Creek</a></li>
                            </ul>

                            <ul class="service-cities">

                            </ul>

                        </div>
                        <p class="view-all"><a href="/service-areas">View All Towns</a></p>
                    </div>
                </div>
            </section>
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
<?php

get_footer();
