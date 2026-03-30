<?php
/**
 * Template Name: Blog Page
 *
 * @package comfyhvac
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="width-limiter">
        <header class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </header><!-- .page-header -->

        <?php
        // Custom query for blog posts
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10, // Adjust as needed
            'paged' => $paged
        );
        $blog_query = new WP_Query($args);

        if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) :
                $blog_query->the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php
                        if (is_singular()) :
                            the_title('<h1 class="entry-title">', '</h1>');
                        else :
                            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                        endif;

                        if ('post' === get_post_type()) :
                            ?>
                            <div class="entry-meta">
                                <?php
                                comfyhvac_posted_on();
                                comfyhvac_posted_by();
                                ?>
                            </div><!-- .entry-meta -->
                        <?php endif; ?>
                    </header><!-- .entry-header -->

                    <?php comfyhvac_post_thumbnail(); ?>

                    <div class="entry-content">
                        <?php
                        if (is_singular()) :
                            the_content(
                                sprintf(
                                    wp_kses(
                                        /* translators: %s: Name of current post. Only visible to screen readers */
                                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'comfyhvac'),
                                        array(
                                            'span' => array(
                                                'class' => array(),
                                            ),
                                        )
                                    ),
                                    wp_kses_post(get_the_title())
                                )
                            );

                            wp_link_pages(
                                array(
                                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'comfyhvac'),
                                    'after'  => '</div>',
                                )
                            );
                        else :
                            the_excerpt();
                            ?>
                            <a href="<?php echo esc_url(get_permalink()); ?>" class="read-more"><?php esc_html_e('Read More', 'comfyhvac'); ?></a>
                        <?php endif; ?>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer">
                        <?php comfyhvac_entry_footer(); ?>
                    </footer><!-- .entry-footer -->
                </article><!-- #post-<?php the_ID(); ?> -->
                <?php
            endwhile;

            // Pagination
            echo '<div class="pagination">';
            echo paginate_links(array(
                'total' => $blog_query->max_num_pages,
                'current' => $paged,
                'prev_text' => __('« Previous', 'comfyhvac'),
                'next_text' => __('Next »', 'comfyhvac')
            ));
            echo '</div>';

            wp_reset_postdata();
        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>
    </div><!-- .width-limiter -->
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();