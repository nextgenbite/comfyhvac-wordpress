<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package comfyhvac
 */

?>

<footer id="container-footer">
    <div class="width-limiter">
        <div class="inside-footer">
            <div class="main-footer">
                <div class="footer-left">
                    <div class="request-estimate-button cta-button">
                        <a href="/contact/request-estimate"><span>Request An Estimate</span></a>
                    </div>
                    <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <?php
                        $address = get_field('business_address', 'option');
                        if (!empty($address)) {
                            echo $address;
                        }
                        ?>
                    </p>
                    <div class="social-networking">
                        <ul>
                            <li class="btn-facebook"><a href="<?php echo get_field('facebook_url', 'option'); ?>" class="external" itemprop="sameAs" title="Comfy Heating &amp; Air Conditioning Inc. on Facebook">Facebook</a></li>
                            <li class="btn-yelp"><a href="<?php echo get_field('yelp_url', 'option'); ?>" class="external" itemprop="sameAs" title="Comfy Heating &amp; Air Conditioning Inc. on Yelp">Yelp</a></li>
                            <li class="btn-google-maps"><a href="<?php echo get_field('google_maps_url', 'option'); ?>" class="external" itemprop="sameAs" title="Comfy Heating &amp; Air Conditioning Inc. on Google Maps">Google Maps</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-center">
                    <div class="logo-footer logo">
                        <a href="https://www.comfyhvac.com/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="Comfy Heating &amp; Air Conditioning Inc." /></a>
                    </div>
                    <p class="phone-title"><strong>East Bay Area:</strong></p>
                    <p class="footer-phone"><a href="tel:510-317-7375">510-317-7375</a></p>
                    <p class="phone-title"><strong>Tri Valley Area:</strong></p>
                    <p class="footer-phone"><a href="tel:925-415-5248">925-415-5248</a></p>
                    <p class="footer-hours">
                        <strong>Business Hours:</strong><br />
                        <meta itemprop="openingHours" content="Mo,Tu,We,Th,Fr 08:00-17:00">
                        <meta itemprop="openingHours" content="Sa 08:00-12:00">
                        Monday - Friday 8am - 5pm<br />
                        Saturday 8am - 12pm
                    </p>
                </div>
                <div class="footer-right">
                    <!--<p class="footer-financing"><a href="/index">Save More With Our Financing Options</a></p>-->
                    <p class="copyright"> &copy; 2016&ndash;2026 <br /><span itemprop="name">Comfy Heating &amp; Air Conditioning Inc.</span><br /> All rights reserved.</p>

                    <div style="display:none !important;" class="ims-grecaptcha-badge"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-footer-bottom">
        <section class="secondary-tools-outer" id="newsletter-signup">
            <div class="width-limiter">
                <div class="secondary-tools">
                    <p>Join Our Mailing List:</p>
                    <form action="/heating/ductless-systems" id="ims-form-module-form-7" enctype="multipart/form-data" class="horizontal" method="post">
                        <fieldset>
                            <ul>
                                <li id="item-li-7-3" class=" required"> <input name="data[FormResponse-7][3]" id="list-response-form-7-item-3" value="" placeholder="Email" aria-label="Email" type="text"></li>
                            </ul>
                        </fieldset>
                        <fieldset>
                            <ul>
                                <li class="structured_particle_required company_name_required required"><label for="structured_particle_required_7">Structured Particle <em>*</em></label> <input name="structured_particle_required" id="structured_particle_required_7" value="" class="no-autopopulate" tabindex="-1" style="display: none;" type="text"></li>
                            </ul> <input name="current_url" id="current_url-7" value="/" type="hidden"> <input name="page_info" id="page_info-7" value="a:3:{s:2:&quot;id&quot;;s:1:&quot;1&quot;;s:4:&quot;name&quot;;s:77:&quot;Comfy Heating &amp;amp; Air Conditioning Inc. | HVAC Contractors in San Ramon, CA&quot;;s:9:&quot;page_type&quot;;s:9:&quot;Home Page&quot;;}" type="hidden">
                            <ul class="submit">
                                <li><button type="submit" class="action-button">Join</button></li>
                            </ul>
                        </fieldset>
                    </form>
                </div><!--secondary-tools-->
            </div>
        </section><!--secondary-tools-outer-->
        <div id="container-footer-navigation">
            <div class="width-limiter">
                <div id="footer-navigation">
                    <ul id="flyup-menu">
                        <li id="sec-nav-160" class=" docid-160 contains-0">
                            <a href="/contact/careers"><span>Careers</span></a>

                        </li>
                        <li id="sec-nav-161" class=" docid-161 contains-0">
                            <a href="/service-areas"><span>Service Areas</span></a>

                        </li>
                        <li id="sec-nav-162" class=" docid-162 contains-0">
                            <a href="/blog/"><span>Blog</span></a>

                        </li>
                        <li id="sec-nav-163" class=" docid-163 contains-0">
                            <a href="/about/affiliations"><span>Affiliations</span></a>

                        </li>
                        <li id="sec-nav-164" class=" docid-164 contains-0">
                            <a href="/about/site-map"><span>Site Map</span></a>

                        </li>
                        <li id="sec-nav-192" class=" docid-192 contains-0">
                            <a href="/about/accessibility-statement"><span>Accessibility Statement</span></a>

                        </li>
                        <li id="sec-nav-165" class="last docid-165 contains-0">
                            <a href="/about/privacy-policy"><span>Privacy Policy</span></a>

                        </li>

                    </ul>
                    <div class="marketingBy" style="display:block;text-align:center;padding:.5em;font-size:1.5em;color:#FFF;">Digital Marketing by <a href="https://www.contractor-advertising.com/" target="_blank" style="font-weight: bold; color: #FFF;text-decoration:none;">Contractor-Advertising</a></div>
                </div> <!-- footer-navigation -->
            </div>
        </div><!-- #container-footer-navigation -->
    </div>
</footer>


</div> <!-- end ims-push-content -->

</div><!-- #container-all -->

<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/script.js"></script>
<?php wp_footer(); ?>

</body>

</html>