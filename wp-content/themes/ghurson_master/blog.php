<?php
/**
 *Template Name: Blog
 *
 * This is the global default template. If WordPress can't find a more appropriate, specific template file,
 * it will use this one.
 */
\NV\Theme::get_header();
\NV\Theme::output_file_marker(__FILE__);

?>
    <div class="row">
        <div class="columns medium-8 large-9">
            <?php
            $blog = new \TSD\Blog();

            foreach ($blog->query->posts as $post_obj):
                global $post;
                $post = $post_obj;
                setup_postdata($post);
                include(locate_template("parts/blog/excerpt.php"));

            endforeach;

            if (function_exists("wp_pagenavi"))
                wp_pagenavi(array('query' => $blog->query));

            ?>

            <div class="one-px-line"></div>
            <div class="spacer-medium"></div>
            <div class="pagination-centered">
                <ul class="pagination">
                    <li class="arrow unavailable"><a href="">&laquo;</a></li>
                    <li class="current"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li class="unavailable"><a href="">&hellip;</a></li>
                    <li><a href="">12</a></li>
                    <li><a href="">13</a></li>
                    <li class="arrow"><a href="">&raquo;</a></li>
                </ul>
            </div>

        </div>

        <div class="columns medium-4 large-3">
            <?php get_template_part("parts/sidebar/sidebar") ?>
        </div>


    </div>

<?php
\NV\Theme::get_footer();