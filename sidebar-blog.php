<?php

/**
 * The sidebar for blog posts and pages
 *
 * @package comfyhvac
 */

?>

<div id="sidebar-content" class="content-right">
    <div class="content-spacer">
        <div id="sidebar" role="complementary">

            <h2 role="navigation">
                <a href="<?php echo get_post_type_archive_link('post'); ?>">
                    <?php bloginfo('name'); ?> Blog
                </a>
            </h2>

            <div id="search-3" class="widget widget_search">
                <div class="width-limiter">
                    <h2>Search</h2>
                    <div class="secondary-tools">
                        <form id="searchform" action="<?php echo esc_url(home_url('/')); ?>" method="get" role="search">
                            <fieldset>
                                <label for="s" style="display: none;">Search Blog:</label>
                                <input type="text" id="s" class="populate" value="<?php echo get_search_query(); ?>" name="s">
                                <button type="submit" id="searchsubmit" class="action-button">Search</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

            <div id="archives-3" class="widget widget_archive">
                <div class="width-limiter">
                    <h2 class="widgettitle">Archives</h2>
                    <label class="screen-reader-text" for="archives-dropdown-3">Archives</label>
                    <select id="archives-dropdown-3" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
                        <option value=""><?php echo esc_attr(__('Select Month')); ?></option>
                        <?php wp_get_archives(array(
                            'type' => 'monthly',
                            'format' => 'option',
                            'show_post_count' => false
                        )); ?>
                    </select>
                </div>
            </div>

            <div id="categories-3" class="widget widget_categories">
                <div class="width-limiter">
                    <h2 class="widgettitle">Categories</h2>
                    <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
                        <?php
                        $cat_args = array(
                            'show_option_none' => __('Select Category'),
                            'show_count'       => 0,
                            'orderby'          => 'name',
                            'echo'             => 0,
                            'name'             => 'cat',
                            'id'               => 'cat',
                            'class'            => 'postform',
                        );
                        $select = wp_dropdown_categories($cat_args);
                        
                        // Injecting Javascript for auto-submit
                        $javascript = "
                        <script type='text/javascript'>
                            (function() {
                                var dropdown = document.getElementById('cat');
                                dropdown.onchange = function() {
                                    if (dropdown.options[dropdown.selectedIndex].value > 0) {
                                        location.href = '" . home_url() . "/?cat=' + dropdown.options[dropdown.selectedIndex].value;
                                    }
                                }
                            })();
                        </script>";
                        echo $select . $javascript;
                        ?>
                    </form>
                </div>
            </div>

            <div id="tag_cloud-2" class="widget widget_tag_cloud">
                <div class="width-limiter">
                    <h2 class="widgettitle">Tags</h2>
                    <div class="tagcloud">
                        <?php wp_tag_cloud(array(
                            'smallest' => 8,
                            'largest'  => 22,
                            'unit'     => 'pt',
                            'number'   => 45,
                            'format'   => 'flat',
                            'orderby'  => 'name'
                        )); ?>
                    </div>
                </div>
            </div>

        </div></div>
</div>

