<?php
/**
 * Template Name: Blog Page
 * @package comfyhvac
 */

get_header();
?>
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/style.min.css" type="text/css" media="all" />

<main id="wp-blog" class="home blog">
    <div id="top-content-wrap">
        <div class="width-limiter">
            <h1>Comfy Heating &amp; Air Conditioning Inc. Blog</h1>
        </div>
    </div>

    <div id="content-wrap">
        <div id="content" class="width-limiter">
            <div id="main-content" class="content-left" role="main">
                <div class="content-spacer">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 6, // Increased from 1 for better UX
                        'paged'          => $paged
                    );
                    $blog_query = new WP_Query($args);

                    if ($blog_query->have_posts()) : 
                        while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                            
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
                                <?php next_posts_link('Older Entries', $blog_query->max_num_pages); ?>
                            </div>
                            <div class="next-post">
                                <?php previous_posts_link('Newer Entries'); ?>
                            </div>
                        </div>

                        <?php wp_reset_postdata(); 
                    else : 
                        echo '<p>No posts found.</p>';
                    endif; ?>
                </div>
            </div>

            <?php get_sidebar('blog'); ?>

            <div class="clear"></div>
        </div></div></main>

<?php get_footer(); ?>