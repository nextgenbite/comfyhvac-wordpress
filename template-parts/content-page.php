<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package comfyhvac
 */

?>

<div id="top-content" class="">
	<div class="content-spacer">
		<?php
		$title = get_field('page_title');
		$breadcrumbs = get_field('breadcrumbs');
		$business_phone_number = get_field('business_phone_number');

		$short_description = get_field('short_description');
		?>
		<?php $breadcrumbs ? site_breadcrumbs() : null; ?>
		<?php if ($title) : ?>
			<h1 id="content-title" class="h2"><?php echo esc_html($title); ?></h1>
		<?php else : ?>
			<h1 id="content-title" class="h2"><?php the_title(); ?></h1>
		<?php endif; ?>
		<?php if ($business_phone_number) : ?>
			<span id="content-phone-callout" class="h3">Give us a call today: <a href="tel:<?php echo esc_attr($business_phone_number); ?>"><?php echo esc_html($business_phone_number); ?></a></span>
		<?php else : ?>
			<span id="content-phone-callout" class="h3">Give us a call today: <a href="tel:877-772-6639">877-772-6639</a></span>
		<?php endif; ?>

		<?php if ($short_description) : ?>
			<?php echo $short_description ?>
		<?php endif; ?>

	</div>
</div>

<div id="main-content" class="">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'comfyhvac' ),
				'after'  => '</div>',
			)
		);
		?>
</div>