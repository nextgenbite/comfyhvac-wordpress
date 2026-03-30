<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package comfyhvac
 */

get_header();
?>

	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/style.min.css" type="text/css" media="all" />

<main id="wp-blog" class="home blog">
	<div id="top-content-wrap">
		<div class="width-limiter">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
		</div>
	</div>

	<div id="content-wrap">
		<div id="content" class="width-limiter">
			<div id="main-content" class="content-left" role="main">
				<div class="content-spacer">
					<?php

					if (have_posts()) :
						while (have_posts()) : the_post() ?>

							<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
								<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
								<small><?php echo get_the_date(); ?></small>

								<div class="entry">
									<?php the_excerpt(); ?>

									<div class="social-buttons-blog">
										<p class="social-twitter-link">
											<a href="http://twitter.com/home?status=<?php echo urlencode(get_the_title()); ?>:%20<?php the_permalink(); ?>" target="_blank">Twitter Link</a>
										</p>
									</div>

									<p class="view-all">
										<a href="<?php the_permalink(); ?>" rel="bookmark">Continue Reading</a>
									</p>
								</div>
							</div>

						<?php endwhile; ?>

						<div class="navigation">
							<div class="prev-post">
								<?php next_posts_link('Older Entries'); ?>
							</div>
							<div class="next-post">
								<?php previous_posts_link('Newer Entries'); ?>
							</div>

						<?php wp_reset_postdata();
					else :
						echo '<p>No posts found.</p>';
					endif; ?>
						</div>
				</div>
			</div>
			<?php get_sidebar('blog'); ?>

			<div class="clear"></div>
		</div>
	</div>
</main><!-- #main -->


<?php
get_sidebar('blog');
get_footer();
