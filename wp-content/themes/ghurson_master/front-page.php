<?php
\NV\Theme::get_header();
\NV\Theme::output_file_marker(__FILE__);
?>
    <div class="row home-title">
        <div class="column text-right">
            <h2>Eat, Ship and Go Home</h2>
        </div>
    </div>

    <div class="home-hero">
        <div class="front-menu">
            <?php wp_nav_menu() ?>
        </div>
    </div>

<?php
\NV\Theme::get_footer();