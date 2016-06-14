<?php
/**
 * DEFAULT TEMPLATE
 *
 * This is the global default template. If WordPress can't find a more appropriate, specific template file,
 * it will use this one.
 */
\NV\Theme::get_header();
\NV\Theme::output_file_marker(__FILE__);
\NV\Theme::loop('parts/single/content', 'parts/article-empty');
\NV\Theme::get_footer();