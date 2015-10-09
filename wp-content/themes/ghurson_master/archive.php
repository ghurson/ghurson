<?php
/**
 * DEFAULT ARCHIVE TEMPLATE
 *
 * This is the default template for archive pages (pages that show multiple posts).
 */
\NV\Theme::get_header();
\NV\Theme::output_file_marker(__FILE__);
?>
    <div id="container" class="archive row">
        <div id="content" class="small-12 large-8 columns">
            <?php \NV\Theme::loop( 'parts/blog/excerpt' , 'parts/article-empty' ) ?>
        </div>
        <div id="sidebar" class="small-12 large-4 columns">
            <?php get_template_part("parts/sidebar/sidebar") ?>
        </div>
    </div>
<?php
\NV\Theme::get_footer();