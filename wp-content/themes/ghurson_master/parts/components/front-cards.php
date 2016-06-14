<?php

$cards = new WP_Query(array(
    'posts_per_page' => 4
));


?>

<div class="content medium-6 columns">
    <ul class="medium-block-grid-2" data-equalizer>
        <?php foreach ($cards->posts as $card): ?>
            <li class="card" data-equalizer-watch>
                <div class="content">
                    <h3><?php print $card->post_title ?></h3>
                    <?php print wpautop($card->post_excerpt) ?>
                    <p class="text-center">
                        <a href="<?php print get_permalink($card->ID) ?>" class="button">Read More</a>
                    </p>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>