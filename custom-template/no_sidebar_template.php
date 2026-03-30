<?php

/**
 * Template Name: No Sidebar Template
 * @package comfyhvac
 */

get_header();
?>

<main id="main-container " class="exclude-sidebar">

    <div id="content" class="exclude-sidebar-content ">
        <section id="content-wrap">

            <div class="width-limiter">
                <div class="content-left">
                							<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
                </div>

                <div class="content-right">

                </div>

            </div>
        </section>

    </div><!-- #content -->
</main>

<?php get_footer(); ?>