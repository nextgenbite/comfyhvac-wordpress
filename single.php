<?php
/**
 * The template for displaying all single posts
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

                    <div class="navigation">
                        <div class="prev-post"><?php previous_post_link('%link', '%title'); ?></div>
                        <div class="next-post"><?php next_post_link('%link', '%title'); ?></div>
                    </div>

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

                                <div class="social-buttons-blog">
                                    <p class="social-twitter-link">
                                        <a href="http://twitter.com/home?status=<?php echo urlencode(get_the_title()); ?>:%20<?php the_permalink(); ?>" target="_blank">Twitter Link</a>
                                    </p>
                                </div>

                                <div class="postmetadata alt">
                                    <?php if (has_tag()) : ?>
                                        Tags: <?php the_tags('', ', ', ''); ?><br>
                                    <?php endif; ?>
                                    
                                    <small>
                                        <?php echo get_the_date('l, F jS, Y'); ?> at <?php the_time(); ?> 
                                        | Categories: <?php the_category(', '); ?>
                                    </small>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="navigation">
                        <div class="prev-post"><?php previous_post_link('%link', '%title'); ?></div>
                        <div class="next-post"><?php next_post_link('%link', '%title'); ?></div>
                    </div>

                    <?php 
                    // Display comments template if open or if there are comments
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    else : ?>
                        <p class="nocomments">Comments are closed.</p>
                    <?php endif; ?>

                <?php endwhile; endif; ?>

            </div>

            <?php get_sidebar('blog'); ?>

            <div class="clear"></div>

        </div></div></main>

<?php
get_footer();