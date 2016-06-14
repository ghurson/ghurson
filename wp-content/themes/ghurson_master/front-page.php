<?php
\NV\Theme::get_header();
\NV\Theme::output_file_marker(__FILE__);
?>
    <div class="home-hero">
        <div class="home-title medium-6 columns">
            <h2><?= bloginfo('name') ?></h2>

            <p><?= bloginfo('description') ?></p>

            <p>Recent posts on the right, site menu on the bottom.<br/>For questions, <a
                    href="mailto:ghurson@gmail.com">email me</a>.</p>
        </div>

        <?php get_template_part("parts/components/front-cards") ?>

    </div>

    <div class="front-menu">
        <div class="row">
            <?php wp_nav_menu() ?>
        </div>
    </div>


<?php
\NV\Theme::get_footer();