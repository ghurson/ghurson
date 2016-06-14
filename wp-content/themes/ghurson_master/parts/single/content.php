<div class="interior-body" data-equalizer>
    <div class="medium-4 columns interior-sidebar" data-equalizer-watch>
        <?php include(locate_template("parts/interior/sidebar.php")) ?>
    </div>
    <div class="medium-8 columns" data-equalizer-watch>
        <div class="row">
            <div class="medium-10 columns medium-push-1 interior-content">
                <?php $post = get_post(get_queried_object_ID()) ?>
                <h3 class="title"><?= $post->post_title ?></h3>
                <?= apply_filters("the_content", $post->post_content) ?>
            </div>
            <?php get_template_part("parts/components/interior-footer") ?>
        </div>

    </div>
</div>
