<?php

/**
 * The header for our theme
 *
 * Displays the <head> section and everything up until <div id="content">
 *
 * @package comfyhvac
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="js touchevents webp">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('|', true, 'right');
          bloginfo('name'); ?></title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MBQK8Z9');
  </script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="index" class="has-top-content has-main-content index ultimate-parent-1">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NF3TDRW"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MBQK8Z9"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- start chat plugin -->
  <script async src="https://online-booking.housecallpro.com/script.js?token=b5209c6dabc141c1998e8a55bb624c81&orgName=Comfy-Heating--Air-Conditioning-Inc"> </script>
  <script id="housecall-pro-chat-bubble" src="https://chat.housecallpro.com/proChat.js" type="text/javascript" data-color="#be290e" data-organization="f464ba25-9d4b-4c56-aba8-a989a401e0e3" defer></script>
  <!-- end chat plugin -->

  <div id="promotion-popup-59" style="display: none;" class="ims-lightbox">
    <div class="promotions-popup" style="display: block;">
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
			<p class="view-all"><a href="/about/promotions?">View All Promotions</a></p>
		</div>
    </div>
</div>
  <div id="container-all">
    <link itemprop="image" href="/assets/images/share-image.jpg">
    <header id="header">
      <div id="container-fixed-masthead" class="ims-push-content">
        <div id="fixed-masthead" class="width-limiter">
          <div id="fixed-masthead-left" class="align-left">
            <div class="logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                $logo = get_field('site_logo', 'option');
                if (!empty($logo)): ?>
                  <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php bloginfo('name'); ?>" />
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Comfy Heating &amp; Air Conditioning Inc." />
                <?php endif; ?>
              </a>
            </div>
          </div>

          <div id="fixed-masthead-center">
            <div id="fixed-masthead-left-center" class="align-center">
              <!--<p class="tagline"><a href="/index">Financing Options</a></p>-->
            </div>

            <div id="fixed-masthead-right-center" class="align-center">
              <div class="send-message-button cta-button">
                <a href="/contact/send-message"><span>Contact Us</span></a>
              </div>
            </div>
          </div>

          <div id="fixed-masthead-right" class="align-right">
            <div class="request-estimate-button cta-button">
              <a href="/contact/request-estimate"><span>Request An Estimate</span></a>
            </div>
          </div>
        </div>
      </div> <!-- #container-fixed-masthead -->

      <div id="container-masthead" class="ims-push-content">
        <div id="masthead">
          <div class="masthead-top">
            <div class="width-limiter">
              <p>Serving the East Bay and Tri Valley Areas Since 2001</p>
            </div>
          </div>
          <div class="width-limiter">
            <div class="masthead-inner">
              <div class="masthead-left">
                <div id="logo" class="logo">
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php
                    $logo = get_field('site_logo', 'option');
                    if (!empty($logo)): ?>
                      <img src="<?php echo esc_url($logo['url']); ?>" itemprop="logo" alt="<?php bloginfo('name'); ?>" />
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" itemprop="logo" alt="Comfy Heating &amp; Air Conditioning Inc." />
                    <?php endif; ?>
                  </a>
                </div>
              </div>
              <div class="masthead-center">
                <!--<p class="tagline"><a href="/about">Save More With Our Financing Options</a></p>-->
              </div>
              <div class="masthead-right phone-container">
                <div class="mobile-fixed-footer">
                  <div class="mobile-col mobile-nav"></div>
                  <div class="mobile-col mobile-reviews">
                    <a href="/about/reviews">
                      <svg xmlns="http://www.w3.org/2000/svg" width="50.5" height="47.821" viewBox="0 0 50.5 47.821">
                        <g id="icon-fixed-footer-reviews" transform="translate(0 -13.582)">
                          <path id="Path_3954" data-name="Path 3954" d="M.469,33.884a3.094,3.094,0,0,0,2.856,2.749l.368.025a1.732,1.732,0,0,1,1.615,1.727v3.444a1.4,1.4,0,0,0,2.247,1.114,25.663,25.663,0,0,0,5.291-5.162,1.727,1.727,0,0,1,1.431-.737q6.339.032,12.678-.412a3.089,3.089,0,0,0,2.624-1.864,3.039,3.039,0,0,0,.231-.878,78.589,78.589,0,0,0,0-17.153A3.089,3.089,0,0,0,26.957,14,168.471,168.471,0,0,0,8.072,13.73q-2.373.1-4.747.266A3.09,3.09,0,0,0,.47,16.738a78.573,78.573,0,0,0,0,17.146Z" fill="#dedfe0" />
                          <path id="Path_3955" data-name="Path 3955" d="M218,201.109a3.281,3.281,0,0,1-3.029,2.916l-.391.027a1.837,1.837,0,0,0-1.713,1.832v3.652a1.484,1.484,0,0,1-2.384,1.182,27.219,27.219,0,0,1-5.612-5.475,1.831,1.831,0,0,0-1.518-.782q-6.723.034-13.447-.437a3.276,3.276,0,0,1-2.783-1.977,3.227,3.227,0,0,1-.246-.931,83.351,83.351,0,0,1,0-18.193,3.276,3.276,0,0,1,3.027-2.908,178.671,178.671,0,0,1,20.03-.282q2.517.1,5.034.282A3.277,3.277,0,0,1,218,182.923,83.333,83.333,0,0,1,218,201.109Z" transform="translate(-167.998 -149.622)" fill="#174798" />
                          <g id="Group_847" data-name="Group 847" transform="translate(27.506 38.034)">
                            <path id="Path_3956" data-name="Path 3956" d="M281.73,263.867c0-1.307-.64-2.371-1.428-2.371s-1.428,1.064-1.428,2.371.64,2.371,1.428,2.371S281.73,265.174,281.73,263.867Z" transform="translate(-278.875 -261.496)" fill="#fff" />
                            <path id="Path_3957" data-name="Path 3957" d="M391.986,261.5c-.787,0-1.428,1.064-1.428,2.371s.64,2.371,1.428,2.371,1.428-1.064,1.428-2.371S392.773,261.5,391.986,261.5Z" transform="translate(-379.542 -261.496)" fill="#fff" />
                            <path id="Path_3958" data-name="Path 3958" d="M304.582,325.525a.762.762,0,0,0-1,.406,4.3,4.3,0,0,1-7.918,0,.762.762,0,0,0-1.4.592,5.82,5.82,0,0,0,10.727,0A.762.762,0,0,0,304.582,325.525Z" transform="translate(-292.689 -319.155)" fill="#fff" />
                          </g>
                          <g id="Group_848" data-name="Group 848" transform="translate(4.24 18.443)">
                            <path id="Path_3959" data-name="Path 3959" d="M60.976,64.4H43.747a.762.762,0,1,1,0-1.524H60.976a.762.762,0,0,1,0,1.524Z" transform="translate(-42.985 -62.872)" fill="#f9f6f9" />
                            <path id="Path_3960" data-name="Path 3960" d="M60.976,109.64H43.747a.762.762,0,1,1,0-1.524H60.976a.762.762,0,1,1,0,1.524Z" transform="translate(-42.985 -103.653)" fill="#f9f6f9" />
                            <path id="Path_3961" data-name="Path 3961" d="M49.895,154.883H43.747a.762.762,0,1,1,0-1.524h6.147a.762.762,0,0,1,0,1.524Z" transform="translate(-42.985 -144.434)" fill="#f9f6f9" />
                          </g>
                        </g>
                      </svg>

                      <p>Reviews</p>
                    </a>
                  </div>
                  <div class="mobile-col mobile-phone">
                    <p class="phone-number" itemprop="telephone">
                      <a href="tel:<?php echo get_field('phone_number' , 'option') ? preg_replace('/\D+/', '', get_field('phone_number' , 'option')) : '8777726639'; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23.732" height="30" viewBox="0 0 23.732 30">
                          <g id="calling" transform="translate(0 0.001)">
                            <g id="Group_2646" data-name="Group 2646" transform="translate(10.901 3.61)">
                              <path id="Path_5542" data-name="Path 5542" d="M61.5,71.343a9.41,9.41,0,0,0-1.042-5.326,6.149,6.149,0,0,0-.756-1.173,9.409,9.409,0,0,0-4.419-3.149,1.334,1.334,0,0,0-1.722.811,1.354,1.354,0,0,0,.787,1.65c.354.165.711.335,1.061.515A6.327,6.327,0,0,1,58.839,70c.019.392.027.788.03,1.179a1.354,1.354,0,0,0,1.178,1.4A1.334,1.334,0,0,0,61.5,71.343Z" transform="translate(-48.707 -61.614)" fill="#fff" />
                              <path id="Path_5543" data-name="Path 5543" d="M142.069,133.734a7.19,7.19,0,0,0-3.378-3.306,1.315,1.315,0,1,0-1.212,2.335,4.686,4.686,0,0,1,2.6,4.036,1.315,1.315,0,1,0,2.627-.139A8.594,8.594,0,0,0,142.069,133.734Z" transform="translate(-134.756 -126.256)" fill="#fff" />
                              <ellipse id="Ellipse_296" data-name="Ellipse 296" cx="1.4" cy="1.4" rx="1.4" ry="1.4" transform="translate(0 8.793)" fill="#fff" />
                            </g>
                            <path id="Path_5544" data-name="Path 5544" d="M56.7,64.367c.354.165.711.335,1.06.515a6.325,6.325,0,0,1,3.434,5.329c.019.393.027.788.031,1.179a1.354,1.354,0,0,0,1.178,1.4,1.322,1.322,0,0,0,1.353-.828,1.275,1.275,0,0,1-.3,0,1.354,1.354,0,0,1-1.178-1.4c0-.39-.011-.786-.03-1.178a6.328,6.328,0,0,0-3.434-5.329c-.35-.179-.707-.35-1.061-.515a1.355,1.355,0,0,1-.787-1.65c.006-.018.013-.036.019-.054a1.313,1.313,0,0,0-1.073.878A1.354,1.354,0,0,0,56.7,64.367Z" transform="translate(-40.162 -58.216)" fill="#c5c7c7" />
                            <path id="Path_5545" data-name="Path 5545" d="M139.042,132.943a4.686,4.686,0,0,1,2.6,4.036,1.315,1.315,0,0,0,2.538.414,1.227,1.227,0,0,1-.164.011,1.316,1.316,0,0,1-1.32-1.249,4.685,4.685,0,0,0-2.6-4.036,1.316,1.316,0,0,1-.621-1.649,1.315,1.315,0,0,0-.432,2.473Z" transform="translate(-125.419 -122.826)" fill="#c5c7c7" />
                            <path id="Path_5546" data-name="Path 5546" d="M226.863,214.137a1.4,1.4,0,0,0,2.466-.2A1.4,1.4,0,0,1,227.812,212a1.4,1.4,0,0,0-.949,2.134Z" transform="translate(-215.742 -199.582)" fill="#c5c7c7" />
                            <path id="Path_5547" data-name="Path 5547" d="M54.088,4.436a7.535,7.535,0,0,1,2.3-3.039C57.486.54,59.062-.427,60.5.2a2.377,2.377,0,0,1,.969.8,3.164,3.164,0,0,1,.416.792c.023.062.96,3.029,1.307,4.475a1.95,1.95,0,0,1-.562,2.163,3.59,3.59,0,0,1-.711.459c-.665.337-1.357.621-2.05.9l-.29.117-.815.309.3.855A29.922,29.922,0,0,0,66.6,22.791l.6.589.714-.678a16.024,16.024,0,0,1,1.68-1.657,2.14,2.14,0,0,1,3.033-.073,34.611,34.611,0,0,1,3.7,3.138c1.256,1.262,1.168,2.47-.063,3.761a6.939,6.939,0,0,1-3.9,2.035,9.072,9.072,0,0,1-5.87-1.3,25.835,25.835,0,0,1-4.034-2.89l-1.7-1.64a28.672,28.672,0,0,1-6.478-11.647c-.749-2.495-1.217-5.527-.186-7.989Z" transform="translate(-53.492 -0.001)" fill="#fff" />
                            <path id="Path_5548" data-name="Path 5548" d="M293.865,10.295c-.967-2.8-1.828-5.738-2.56-8.672.06-.05.121-.1.182-.146.991-.766,2.323-1.6,3.63-1.345a2.6,2.6,0,0,1,1.934,1.928c.44,1.421.9,2.841,1.243,4.286a2.043,2.043,0,0,1-1.273,2.622c-.758.385-1.551.7-2.34,1.018Z" transform="translate(-288.595 -0.082)" fill="#c5c7c7" />
                            <path id="Path_5549" data-name="Path 5549" d="M53.493,350.746c.993,1.014,2.038,2,3.123,2.984a38.062,38.062,0,0,0,3.733,3.038,6.64,6.64,0,0,0,2.2-1.532c1.232-1.29,1.319-2.5.064-3.761a34.594,34.594,0,0,0-3.7-3.137,2.14,2.14,0,0,0-3.033.073,16.113,16.113,0,0,0-1.68,1.657Z" transform="translate(-39.787 -327.368)" fill="#c5c7c7" />
                            <path id="Path_5550" data-name="Path 5550" d="M54.917,58.345c2.069,6.89,5.9,12.5,12.214,16.177a9.069,9.069,0,0,0,5.87,1.3,6.937,6.937,0,0,0,3.9-2.035,3.289,3.289,0,0,0,.927-1.573l-.086.092a6.937,6.937,0,0,1-3.9,2.035,9.069,9.069,0,0,1-5.87-1.3c-6.313-3.676-10.144-9.286-12.214-16.177-.749-2.495-1.217-5.527-.187-7.988l.041-.095a7.681,7.681,0,0,0-.883,1.577c-1.031,2.462-.562,5.493.187,7.988Z" transform="translate(-54.135 -45.922)" fill="#dedfe0" />
                            <path id="Path_5551" data-name="Path 5551" d="M54.13,450.954c.4.311.807.615,1.243.922h0a6.635,6.635,0,0,0,2.2-1.532,3.3,3.3,0,0,0,.926-1.564h0a.042.042,0,0,1,0-.008l-.086.091a6.941,6.941,0,0,1-3.9,2.036Q54.326,450.932,54.13,450.954Z" transform="translate(-34.811 -422.475)" fill="#dedfe0" />
                          </g>
                        </svg>
                        <?php echo get_field('phone_number' , 'option') ? get_field('phone_number' , 'option') : '877-772-6639'; ?>
                      </a>
                    </p>
                  </div>
                  <div class="mobile-col">
                    <a href="/contact/send-message">
                      <svg xmlns="http://www.w3.org/2000/svg" width="47.702" height="31.801" viewBox="0 0 47.702 31.801">
                        <g id="icon-fixed-footer-contact" transform="translate(0 -85.333)">
                          <path id="Path_5955" data-name="Path 5955" d="M57.77,259.666a4.969,4.969,0,0,1-3.816,1.789H16.19a4.969,4.969,0,0,1-3.816-1.789L30.6,244.481l1.888,1.292a4.55,4.55,0,0,0,5.168,0l1.888-1.292Z" transform="translate(-11.221 -144.32)" fill="#c5c7c7" />
                          <path id="Path_5956" data-name="Path 5956" d="M55.341,87.5l-18.5,12.661-1.888,1.292a4.549,4.549,0,0,1-5.168,0l-1.888-1.292L9.388,87.48a4.991,4.991,0,0,1,4.094-2.147H51.246A4.9,4.9,0,0,1,55.341,87.5Z" transform="translate(-8.513)" fill="#fff" />
                          <g id="Group_2674" data-name="Group 2674" transform="translate(0 87.48)">
                            <path id="Path_5957" data-name="Path 5957" d="M19.379,121.056,1.153,136.241A4.947,4.947,0,0,1,0,133.061V111.2a4.9,4.9,0,0,1,.875-2.822Z" transform="translate(0 -108.375)" fill="#dedfe0" />
                            <path id="Path_5958" data-name="Path 5958" d="M323.38,111.39v21.863a4.947,4.947,0,0,1-1.153,3.18L304,121.249l18.5-12.661A4.881,4.881,0,0,1,323.38,111.39Z" transform="translate(-275.678 -108.568)" fill="#dedfe0" />
                          </g>
                        </g>
                      </svg>

                      <p>Contact</p>
                    </a>
                  </div>
                  <!--<div class="mobile-col">
					<a href="/about">
						<img alt="About Comfy Heating &amp; Air Conditioning Inc." src="/assets/images/icons/icon-fixed-footer-about.png" width="40" height="47">
						<p>About</p>
					</a>
				</div>-->
                  <div class="mobile-col mobile-sched">
                    <div data-token="b5209c6dabc141c1998e8a55bb624c81" data-orgname="Comfy-Heating--Air-Conditioning-Inc" class="hcp-button" onClick="HCPWidget.openModal()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width:1.5em" fill="currentColor">
                        <path d="M160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32zM0 192H448V464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192zM64 304C64 312.8 71.16 320 80 320H112C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304zM192 304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304zM336 256C327.2 256 320 263.2 320 272V304C320 312.8 327.2 320 336 320H368C376.8 320 384 312.8 384 304V272C384 263.2 376.8 256 368 256H336zM64 432C64 440.8 71.16 448 80 448H112C120.8 448 128 440.8 128 432V400C128 391.2 120.8 384 112 384H80C71.16 384 64 391.2 64 400V432zM208 384C199.2 384 192 391.2 192 400V432C192 440.8 199.2 448 208 448H240C248.8 448 256 440.8 256 432V400C256 391.2 248.8 384 240 384H208zM320 432C320 440.8 327.2 448 336 448H368C376.8 448 384 440.8 384 432V400C384 391.2 376.8 384 368 384H336C327.2 384 320 391.2 320 400V432z"></path>
                      </svg><span class="mobileOnly">Schedule</span><span class="desktopOnly">Book Online</span></div>
                    <script async src="https://online-booking.housecallpro.com/script.js?token=b5209c6dabc141c1998e8a55bb624c81&orgName=Comfy-Heating--Air-Conditioning-Inc"> </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- #container-masthead -->
    </header>
    <div class="toggle-controller-state" id="toggle-navigation">
      <a href="javascript:void(0);">
        Menu
      </a>
    </div>
    <div id="container-primary-navigation">
      <nav id="primary-navigation" class="width-limiter hoverintent minidropdown">

        <div class="nav-logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php
            $logo = get_field('site_logo', 'option');
            if (!empty($logo)): ?>
              <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php bloginfo('name'); ?>" />
            <?php else: ?>
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>" />
            <?php endif; ?>
          </a>
        </div>

        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary_navigation',
          'container' => false,
          'menu_class' => '',
          'walker' => new Comfy_Nav_Walker(),
          'fallback_cb' => false
        ));
        ?>

        <div class="phone-button cta-button">
          <a href="tel:<?php echo preg_replace('/[^0-9]/', '', get_field('phone_number', 'option')); ?>"><?php echo get_field('phone_number', 'option'); ?></a>
        </div>

        <div class="request-estimate-button cta-button">
          <a href="<?php echo esc_url(home_url('/contact/request-estimate')); ?>">
            <span>Request An Estimate</span>
          </a>
        </div>

      </nav>

    </div> <!-- #container-primary-navigation -->


    <div class="ims-push-content">