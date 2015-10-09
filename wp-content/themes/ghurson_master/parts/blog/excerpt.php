<?php
/**
 * ARTICLE PART (NO COMMENTS)
 *
 * This part can be used IN THE LOOP to output a single article (sans comments).
 */
?>
<article id="article-<?php the_ID() ?>" class="<?php echo implode(get_post_class(),' ') ?>">
    <h4><?php the_title() ?></h4>
    <p>
        Categories: <?php \TSD\Blog::display_categories() ?><br/>
        Tags: <?php \TSD\Blog::display_tags(get_the_ID()) ?>
    </p>
    <?php the_post_thumbnail() ?>
    <div>
    </div>
</article>