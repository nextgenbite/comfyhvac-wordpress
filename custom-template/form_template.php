<?php

/**
 * Template Name: Form Template
 * @package comfyhvac
 */

get_header();
?>
<style media="screen">
    pre {
        height: 0
    }

    ul.onecol,
    ul.twocol,
    ul.threecol {
        padding: 0 0 0 1.5em
    }

    #top-content form fieldset ul li,
    #main-content form fieldset ul li {
        font-size: 1em
    }

    #top-content label,
    #top-content p.label-heading,
    #main-content label,
    #main-content p.label-heading {
        font-size: 1.5em;
        line-height: 1.5em;
        margin: 0
    }

    #top-content label em,
    #top-content p.label-heading em,
    #main-content label em,
    #main-content p.label-heading em {
        color: #ce0000
    }

    #top-content span.wrapper label,
    #main-content span.wrapper label {
        display: inline-block;
        font-size: 1.2em;
        width: 50%
    }

    #top-content .onecol-inputs span.wrapper label,
    #main-content .onecol-inputs span.wrapper label {
        width: 100%
    }

    #top-content .twocol-inputs span.wrapper label,
    #main-content .twocol-inputs span.wrapper label {
        width: 50%
    }

    #top-content .threecol-inputs span.wrapper label,
    #main-content .threecol-inputs span.wrapper label {
        width: 33.33%
    }

    #top-content .fourcol-inputs span.wrapper label,
    #main-content .fourcol-inputs span.wrapper label {
        width: 25%
    }

    #top-content span.wrapper label input,
    #top-content span.wrapper label span,
    #main-content span.wrapper label input,
    #main-content span.wrapper label span {
        display: inline-block;
        float: left
    }

    #top-content span.wrapper label input,
    #main-content span.wrapper label input {
        margin: 2px 5px
    }

    #top-content span.note,
    #main-content span.note {
        display: block;
        font-size: 1.2em
    }

    #top-content form fieldset,
    #main-content form fieldset {
        border: none;
        overflow: hidden;
        padding: 0 10px
    }

    #top-content form fieldset ul,
    #main-content form fieldset ul {
        list-style: none outside none;
        margin: 0;
        overflow: visible;
        padding: 0
    }

    #main-content form fieldset:first-child ul,
    #top-content form fieldset:first-child ul {
        list-style: none outside none;
        margin-top: 0;
        overflow: hidden
    }

    #top-content form fieldset ul li,
    #main-content form fieldset ul li {
        list-style: none outside none;
        margin: 5px 0
    }

    #top-content form fieldset input[type="text"],
    #top-content form fieldset textarea,
    #top-content form fieldset select,
    #main-content form fieldset input[type="text"],
    #main-content form fieldset textarea,
    #main-content form fieldset select {
        display: block;
        font-size: 1.3em;
        width: 80%
    }

    #top-content form fieldset select,
    #main-content form fieldset select {
        width: 85%
    }

    #top-content input[type="submit"],
    #top-content button,
    #main-content input[type="submit"],
    #main-content button {
        border-radius: 8px 8px 8px 8px;
        display: block;
        font-size: 1.8em;
        font-weight: 700;
        height: 40px;
        margin: 0 auto;
        min-width: 200px;
        padding: 0 20px
    }

    #top-content #recaptcha_area input[type="text"],
    #top-content #recaptcha_area textarea,
    #top-content #recaptcha_area select,
    #main-content #recaptcha_area input[type="text"],
    #main-content #recaptcha_area textarea,
    #main-content #recaptcha_area select {
        display: inline;
        border: 1px solid #606060;
        border-radius: 3px 3px 3px 3px;
        padding: 0
    }

    @media all and (max-width: 800px) {

        #top-content form fieldset,
        #main-content form fieldset {
            padding: 0
        }

        fieldset.twocol ul li,
        ul.twocol li {
            width: 100%
        }

        #top-content form fieldset input[type="text"],
        #top-content form fieldset textarea,
        #top-content form fieldset select,
        #top-content span.wrapper label,
        #main-content form fieldset input[type="text"],
        #main-content form fieldset textarea,
        #main-content form fieldset select,
        #main-content span.wrapper label {
            width: 100%
        }
    }
</style>

<main id="main-container " class="exclude-sidebar">

    <div id="content" class="exclude-sidebar-content ">

        <section id="content-wrap">
            <?php
            $title = get_field('page_title');
            $breadcrumbs = get_field('breadcrumbs');
            $business_phone_number = get_field('phone_number', 'option');

            $short_description = get_field('short_description');
            ?>
            <div class="width-limiter">
                <div class="content-left">
                    <div id="top-content" class="">
                        <div class="content-spacer">
                            <?php $breadcrumbs ? site_breadcrumbs() : null; ?>
                            <?php if ($title) : ?>
                                <h1 id="content-title" class="h2"><?php echo esc_html($title); ?></h1>
                            <?php else : ?>
                                <h1 id="content-title" class="h2"><?php the_title(); ?></h1>
                            <?php endif; ?>
                            <!--No Phone-->
                            <?php
                            while (have_posts()) :
                                the_post();

                                if ($short_description) :
                                    echo $short_description;
                                else :
                                    the_content();
                                endif;
                                // If comments are open or we have at least one comment, load up the comment template.
                                if (comments_open() || get_comments_number()) :
                                    comments_template();
                                endif;

                            endwhile; // End of the loop.
                            ?>



                        </div>
                    </div>

                    <div id="main-content" class="">
                        <div class="content-spacer">


                        </div>
                    </div>

                </div>

                <div class="content-right">

                </div>

            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>