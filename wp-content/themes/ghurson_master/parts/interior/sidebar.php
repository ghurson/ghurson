<h4>
    <a href="<?php print site_url("/") ?>">
        The Website
    </a>
</h4>
<?php wp_nav_menu() ?>


<?php
$blog_query = new WP_Query(array(
    'posts_per_page' => -1
));
?>

<h4>
    <a href="<?= site_url("/blog") ?>">
        The Blog
    </a>
</h4>

<div class="menu">
    <ul>
        <?php foreach ($blog_query->posts as $post): ?>
        <?php $active = get_queried_object_id() == $post->ID ? 'current_page_item' : '' ?>
            <li class="<?= $active ?>">
                <a href="<?= get_permalink($post->ID) ?>">
                    <?= $post->post_title ?>
                </a>
            </li>

        <?php endforeach; ?>
    </ul>
</div>
