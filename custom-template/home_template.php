<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package comfyhvac
 * template name: Home Template
 */

get_header();
?>
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/home.css">

<style>
    @media all and (max-width: 800px) {
        #container-banner {
            background-image: url("<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-mobile.jpg");
        }
    }

    @media all and (min-width: 801px) {
        #container-banner {
            background-image: url("<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero.jpg");
        }
    }
</style>


<div id="container-banner">
    <section id="hero-outer">
        <div class="width-limiter">
            <div class="hero-content-box ">
                <h1>Time to Get Comfy!</h1>
                <span class="h3">Quality, Comfort, and Customer Service</span>
                <ul>
                    <li>Family Owned and Operated Since 2001</li>
                    <li>Always Honest, and Always on Time</li>
                    <li>Lifetime Warranty on Workmanship</li>
                </ul>
                <div class="request-estimate-button cta-button">
                    <a href="/contact/request-estimate"><span>Request An Estimate</span></a>
                </div>
            </div>
        </div>
    </section>
</div><!-- #container-banner -->

<main id="main-container">

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
                    <li>
                        <a class="modal-trigger" data-modal-id="promotion-popup" data-append-id="promotion-popup-39">
                            <div class="promo-image "></div>
                            <span class="promo-title">Receive Up To $6500</span>
                            <span class="promo-teaser">in Energy Upgrade CA Rebates</span>
                            <span class="promo-view-details">View Details</span>
                        </a>
                    </li>
                </ul>

                <p class="view-all"><a href="/about/promotions">View All Promotions</a></p>
            </div>
        </div>
    </section>

    <section id="home-top-content">
        <div class="width-limiter">
            <div class="home-top-content-inner">
                <div class="home-top-content-left">
                    <div class="home-top-content-box">
                        <h1>Your Local HVAC Experts in San Ramon, CA!</h1>
                        <span id="content-phone-callout" class="h3">Give us a call today: <a href="tel:877-772-6639">877-772-6639</a></span>
                        <div class="top-content-main">
                            <p>Comfy Heating &amp; Air Conditioning Inc. is a premier, full-service HVAC provider that can keep temperatures cozy and comfortable all-year long in San Ramon, CA. All you need to do is tell us what the problem is, or show us where you&rsquo;re uncomfortable, and we can get to work providing you with full system installations, repairs, or even yearly maintenance. With us, you can count on:</p>
                            <ul>
                                <li><strong>A team that&rsquo;s family-owned and operated.</strong></li>
                                <li><strong>An amazing customer service experience.</strong></li>
                                <li><strong>Expert opinions from licensed professionals.</strong></li>
                            </ul>
                            <a href="#" id="hc-trigger" class="hc-trigger" data-expanded="false">[READ MORE +]</a>
                            <div class="hc-start">
                                <p>Take a look at the services we offer and don&rsquo;t forget to give our team a call for any of your HVAC needs.</p>
                                <p><strong>Call Comfy Heating &amp; Air Conditioning Inc. for quality comfort control in San Ramon, CA and throughout the East Bay and Tri Valley areas!</strong></p>
                            </div>
                            <div class="request-estimate-button cta-button">
                                <a href="/contact/request-estimate"><span>Request An Estimate</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-top-content-right">
                    <div class="home-top-content-image-desktop">
                        <picture>
                            <source type="image/webp" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/top-content-mascot.webp">
                            <source type="image/png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/top-content-mascot.png">
                            <img alt="Comfy Heating &amp; Air Conditioning Inc.'s mascot" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/top-content-mascot.png" width="671" height="816">
                        </picture>
                    </div>
                    <div class="home-top-content-image-mobile">
                        <picture>
                            <source type="image/webp" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/top-content-mascot-mobile.webp">
                            <source type="image/png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/top-content-mascot-mobile.png">
                            <img alt="Comfy Heating &amp; Air Conditioning Inc.'s mascot" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/top-content-mascot-mobile.png" width="253" height="308">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="promotions-testimonials-service-area" class="full-width">

        <section class="secondary-tools-outer" id="testimonials-secondary">
            <div class="width-limiter">
                <div class="secondary-tools">
                    <div class="testimonials-img">
                        <picture>
                            <source type="image/webp" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/reviews-img.webp">
                            <source type="image/jpeg" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/reviews-img.jpg">
                            <img alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/reviews-img.jpg" width="700" height="472">
                        </picture>
                    </div>
                    <div class="testimonials-main">
                        <h4 class="secondary-tools-heading">Here’s What Our Loyal Customers Say</h4>
                        <div class="testimonials-inner">
                            <div class="testimonial">
                                <blockquote>

                                    <p class="quote">"Abel did a great job. He was professional, courteous, and explained everything; even showing me the repairs and explaining how my A/C unit should work."</p>
                                    <p class="source">- Carey C. Stockton, CA</p>
                                </blockquote>
                            </div>
                            <p class="view-all"><a href="about/reviews">View All Reviews</a></p>
                        </div>
                    </div>
                </div><!--secondary-tools-->
            </div>
        </section><!--secondary-tools-outer-->
        <!---->

        <div id="rwl-reviews-carousel-homepage"></div>
        <div id="rwl-media-carousel-homepage"></div>


        <div id="mini-form-cta" class="secondary-tools-outer">
            <div class="width-limiter">
                <span class="call-text-title">Get Started Today:</span>
                <div class="cta-button">
                    <a href="" class="modal-trigger" data-append-id="miniform-content" data-modal-id="site-modal">Contact Us</a>
                </div>
                <span class="call-text">Or Call</span>
                <span class="cta-phone"><img alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icons/icon-phone.svg" width="45" height="56"><a href="tel:<?php echo get_field('phone_number', 'option') ? preg_replace('/\D+/', '', get_field('phone_number', 'option')) : '8777726639'; ?>"><?php echo get_field('phone_number', 'option') ? get_field('phone_number', 'option') : '877-772-6639'; ?></a></span>
            </div>
        </div>


        <section id="home-main-content">

            <div class="width-limiter">
                <span class="h1">Stay Comfy in the East Bay and Tri Valley Areas</span>
            </div>

            <div class="width-limiter acc-limiter">

                <div id="main-content-nav">
                    <ul class="tab-nav" role="tablist">
                        <li class="tab-item"><button class="tab-link active-d" data-target="#acc-content-1" role="tab">Heating</button></li>
                        <li class="tab-item"><button class="tab-link" data-target="#acc-content-2" role="tab">Air Conditioning</button></li>
                        <li class="tab-item"><button class="tab-link" data-target="#acc-content-3" role="tab">Water Heaters</button></li>
                        <li class="tab-item"><button class="tab-link" data-target="#acc-content-4" role="tab">Indoor Air Quality</button></li>
                        <li class="tab-item"><button class="tab-link" data-target="#acc-content-5" role="tab">Generators</button></li>
                        <li class="tab-item"><button class="tab-link" data-target="#acc-content-6" role="tab">Maintenance</button></li>
                    </ul>
                </div>

                <div id="main-content-accordion">

                    <div class="acc-content fade active-d" id="acc-content-1" role="tabpanel">
                        <div class="acc-title-outer">
                            <h2 class="acc-title"><a id="acc-1" class="acc-trigger" href="javascript:void(0)">Heating</a></h2>
                        </div>
                        <div class="acc-inner-content">
                            <p>From powerful gas furnaces to high-efficiency heat pumps, there are several ways to keep your home warm and cozy in San Ramon, CA. The important thing is to have a team of licensed, expert technicians on hand to provide you with fast repairs and a full system replacement when the time comes. There are no hassles, no upsells, just quality solutions when you contact our team.</p>
                            <p class="acc-learn-more"><a href="/heating">Read More About Heating</a></p>
                        </div>
                    </div>

                    <div class="acc-content fade" id="acc-content-2" role="tabpanel">
                        <div class="acc-title-outer">
                            <h2 class="acc-title"><a id="acc-2" class="acc-trigger" href="javascript:void(0)">Air Conditioning</a></h2>
                        </div>
                        <div class="acc-inner-content">
                            <p>It&rsquo;s vital that you stay protected against some of the scorching summer heat that comes our way. We provide homeowners with stable air conditioning care, from affordable targeted repairs that get things running smoothly again to installations for heat pumps and ductless units that add convenience to your life.</p>
                            <p class="acc-learn-more"><a href="/air-conditioning">Read More About Air Conditioning</a></p>
                        </div>
                    </div>

                    <div class="acc-content fade" id="acc-content-3" role="tabpanel">
                        <div class="acc-title-outer">
                            <h2 class="acc-title"><a id="acc-3" class="acc-trigger" href="javascript:void(0)">Water Heaters</a></h2>
                        </div>
                        <div class="acc-inner-content">
                            <p>A huge chunk of our monthly energy consumption comes from our water heaters. These systems provide us with convenient and comfortable hot water when we need it, as long as they&rsquo;re working properly. Our team is trained and experienced in the field of water heater repairs, maintenance, and installation, so you can call us for your needs.</p>
                            <p class="acc-learn-more"><a href="/water-heaters">Read More About Water Heaters</a></p>
                        </div>
                    </div>

                    <div class="acc-content fade" id="acc-content-4" role="tabpanel">
                        <div class="acc-title-outer">
                            <h2 class="acc-title"><a id="acc-4" class="acc-trigger" href="javascript:void(0)">Indoor Air Quality</a></h2>
                        </div>
                        <div class="acc-inner-content">
                            <p>Our homes are constructed so tightly these days that the indoor air can get inundated with contaminants from dust to viruses and bacteria. Our scientific solutions like air purifiers and air filtration systems are proven to help eliminate the particles in your home and provide you with clean, fresh, and breathable air for the foreseeable future.</p>
                            <p class="acc-learn-more"><a href="/indoor-air-quality">Read More About Indoor Air Quality</a></p>
                        </div>
                    </div>

                    <div class="acc-content fade" id="acc-content-5" role="tabpanel">
                        <div class="acc-title-outer">
                            <h2 class="acc-title"><a id="acc-5" class="acc-trigger" href="javascript:void(0)">Generators</a></h2>
                        </div>
                        <div class="acc-inner-content">
                            <p>What will your situation be the next time we experience a power outage or natural disaster? Generators represent the first line of defense against the loss of power and control in your San Ramon, CA residence. When you work with our team, we&rsquo;ll make sure you&rsquo;re prepared for the next power outage with a powerful generator system.</p>
                            <p class="acc-learn-more"><a href="/air-conditioning/generators">Read More About Generators</a></p>
                        </div>
                    </div>

                    <div class="acc-content fade" id="acc-content-6" role="tabpanel">
                        <div class="acc-title-outer">
                            <h2 class="acc-title"><a id="acc-6" class="acc-trigger" href="javascript:void(0)">Maintenance</a></h2>
                        </div>
                        <div class="acc-inner-content">
                            <p>Maintenance services for your HVAC system, water heater, and generator unit are proven to provide you with monthly energy savings and better results over time. We can make adjustments, warn you of prospective problems, and even make small repairs before they become large issues. Call us today and ask about our maintenance program!</p>
                            <p class="acc-learn-more"><a href="/maintenance-program">Read More About Maintenance</a></p>
                        </div>
                    </div>

                </div> <!-- #main-content-accordion -->

                <div class="request-estimate-button cta-button">
                    <a href="/contact/request-estimate"><span>Request An Estimate</span></a>
                </div>

            </div> <!-- .width-limiter .acc-limiter -->
        </section> <!-- #home-main-content -->

        <div id="home-affiliations">
            <div class="width-limiter">
                <div class="affiliations-wrapper">
                    <img alt="Carrier" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/carrier-world.webp" width="183" height="103">

                    <img alt="Energy Upgrade California" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/EUC.webp" width="222" height="149">

                    <img alt="Energy Upgrade California" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/google-guaranteed.webp" width="200" height="181">

                    <img alt="Energy Upgrade California" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/2024-neighborhood-faves.webp" width="200" height="200">

                    <!--
			<img alt="Energy Upgrade California" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/inc-5000.webp" width="200" height="200">

			<img alt="Energy Upgrade California" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/2024-presidents-award.webp" width="200" height="150">
			-->

                    <img alt="Energy Upgrade California" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/yelp.webp" width="200" height="90">

                    <img alt="Energy Upgrade California" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/home-depot.webp" width="174" height="200">

                    <img alt="Energy Upgrade California" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/nate.webp" width="200" height="199">
                </div>
            </div>
        </div>

        <section class="secondary-tools-outer" id="maintenance-secondary">
            <div class="width-limiter">
                <div class="secondary-tools">
                    <div class="ma-image">
                        <picture>
                            <source type="image/webp" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/maintenance-img.webp">
                            <source type="image/jpeg" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/maintenance-img.jpg">
                            <img alt="Comfy Heating &amp; Air Conditioning Inc.'s Maintenance Plan" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/other/maintenance-img.jpg" width="457" height="297">
                        </picture>
                    </div>
                    <h4 class="secondary-tools-heading ma-title">Enjoy Peace of Mind with the Comfy Maintenance Plan</h4>
                    <p class="ma-subtitle">Regular maintenance helps greatly to ensure system reliability, improve performance efficiency, maintain warranty validity and to ensure compliance with Health and Safety requirements.</p>
                    <ul class="ma-points">
                        <li>System Reliability</li>
                        <li>Improve Efficiency</li>
                        <li>Maintain Warranty</li>
                        <li>Comply with Legislation</li>
                        <li>Health & Safety Compliance</li>
                    </ul>
                    <p class="view-all"><a href="maintenance-program">Protect Your Investment</a></p>
                </div>
            </div>
        </section>

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
    </div>

</main>
<div id="promotion-popup-39" style="display: none;" class="ims-lightbox">
    <div class="promotions-popup" style="display: block;">
        <div class="popup-inner">
            <div class="promotions-popup-header">
                <div class="popup-header-left">
                    <div class="promotion expanded">
                        <?php $logo = get_field('site_logo', 'option');
                        if (!empty($logo)): ?>
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php bloginfo('name'); ?>" class="promotion-logo">
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>" class="promotion-logo">
                        <?php endif; ?>
                        <h2><a href="/promotions/receive-up-to-6500">Receive Up To $6500</a></h2>
                        <p>Receive Up To $6500 in Energy Upgrade CA Rebates.</p>
                        <p class="disclaimer">Limit one coupon per customer. Offers cannot be combined with any other discounts, promotions, or coupons. Coupon must be presented at time of purchase and is valid for a single use only. No cash value. Other restrictions may apply.</p>
                        <p class="expiration"></p>
                    </div>
                    <h4>Call to Redeem</h4>
                    <div class="phone-button cta-button"> <a href="tel:877-772-6639">877-772-6639</a> </div>
                </div>
                <div class="popup-header-right"> <span class="close-popup">X</span> </div>
            </div>
            <p class="view-all"><a href="/about/promotions">View All Promotions</a></p>
        </div>
    </div>
</div>


<?php get_footer(); ?>