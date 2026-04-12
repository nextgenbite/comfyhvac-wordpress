<?php

/**
 * The template for displaying single Promotions posts
 *
 * @package comfyhvac
 */

get_header();
?>
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/style.min.css" type="text/css" media="all" />

<main id="wp-blog" class="home blog">
    <div id="content-wrap">
        <div id="content" class="width-limiter">

            <div id="main-content" class="content-left" role="main">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="content-spacer single-post">

                            <h1><?php the_title(); ?></h1>

                            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                                <div class="entry">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="wp-block-image">
                                            <figure class="alignright size-medium">
                                                <?php the_post_thumbnail('medium'); ?>
                                            </figure>
                                        </div>
                                    <?php endif; ?>

                                    <?php the_content(); ?>

                                    <?php if (has_excerpt()) : ?>
                                        <div class="promotion-excerpt">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>

                <?php endwhile;
                endif; ?>

            </div>

            <?php get_sidebar('blog'); ?>

            <div class="clear"></div>

        </div>
    </div>
</main>

<?php
get_footer();
