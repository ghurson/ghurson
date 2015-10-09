<section class="component image-grid">
	<?php
	$toggle = $field['gallery_toggle']; ?>
	<div class="row">
		<?php
		$s = rand (0 , 1000000);
		$title = $field['block_title']; if($title): ?>
			<div class="columns text-center">
				<h3 class="blue-text"><?php echo $title ?></h3>
			</div>
		<?php endif ?>
		<div class="columns">
			<ul class="grid-part large-block-grid-<?php print $field['images_per_row'] ?> medium-block-grid-<?php print $field['medium_per_row'] ?> small-block-grid-<?php print $field['small_per_row'] ?>" data-equalizer>
				<?php
				//print_r($field['section']);
				$section = $field['single_image']; ?>
				<?php $c = 0; foreach($section as $section):
					$image_title = $section['image_title'];
					$desc = $section['image_description'];

					$section = $section['image'];
					$url = $section['sizes'];
					?>
					<li class="text-center">
						<div data-equalizer-watch>
							<?php if($toggle): ?>
                                    <div>
                                        <img src="<?php echo $url['side-img'] ?>">
                                    </a>
                                </div>
                            <?php else: ?>
                                <a href="#" data-reveal-id="img-grid-block-modal-<?php print $c ?>">
                                    <img src="<?php echo $url['side-img'] ?>">
                                </a>
                            <?php endif; ?>
                            <div id="img-grid-block-modal-<?php print $c ?>" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                                <h3 class="blue-text"><?php print $image_title ?></h3>
                                <img src="<?php echo $url['large'] ?>">
                                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                                <p><?php echo $desc ?></p>
                            </div>
                        </div>

                        <h5 class="blue-text"><?php print $image_title ?></h5>

                        <p><?php echo $desc ?></p>
                    </li>


                    <?php
                endforeach;
                echo
                '</ul>
</div>
</div>';

                ?>

</section>