<?php
/**
 * SINGLE BLOG POSTS
 * 
 * This is the template for single, full-page blog posts.
 */
\NV\Theme::get_header();
\NV\Theme::output_file_marker( __FILE__ );
\NV\Theme::loop('parts/single/content', 'parts/article-empty');
\NV\Theme::get_footer();