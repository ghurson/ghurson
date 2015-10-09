<h1>test</h1>
<section class="component">
<?php

// check if the flexible content field has rows of data
if( have_rows('content') ):
    // loop through the rows of data
    while ( have_rows('content') ) : the_row();
		// count number of top level accordion elements
        if( get_row_layout() == 'accordion' ): $c = 0;
	        if(get_sub_field('title')): ?>

            <div class="row">
                <div class="columns text-center">
	               <h2 class="blue-text"><?php the_sub_field('title'); ?></h2>
                </div>
            </div>
<?php endif;?>

	        <div class="row">
		        <div class="columns">
                    <ul class="accordion" data-accordion="c">
                        <?php while (have_rows('primary_item') ) : the_row();?>
                            <li class="accordion-navigation">
<!--	                            Give each top level accordion item an id and href based on it's index-->
                                <a href="#panel<?php echo $c ?>">
	                                <div class="left-acc">
	                                <h4><?php the_sub_field('primary_title');?>
	                                </h4>
	                                </div>
	                                <div class="right-acc">
		                               <span class="right">
<!--			                                insert right side accordion img-->
		                                </span>
	                                </div>


                                </a>
                                <div id="panel<?php echo $c ?>" class="content">
                                    <?php if(the_sub_field('primary_text')): ?>
                                    <p><?php the_sub_field('primary_text');?></p>
                                    <?php endif;?>
<!--	                                Check for nested elements. Assign N as index-->
                                    <?php if (have_rows('nested_item') ): $n = 0; ?>
                                        <div class="columns">
                                            <ul class="accordion nested" data-accordion="n">
                                                <?php while (have_rows('nested_item') ) : the_row();?>
                                                    <li class="accordion-navigation">
                                                        <a href="#paneln<?php echo $n ?>"><h4><?php the_sub_field('nested_title');?><img src="<?php print NV_IMG ?>/greenarrow.svg"></h4></a>
                                                        <div id="paneln<?php echo $n ?>" class="content">
                                                            <?php the_sub_field('nested_text');?>
                                                        </div>
                                                    </li>
                                                    <?php $n++; endwhile;?>
                                            </ul>
                                            <div class="spacer-medium"></div>
                                        </div>

                                    <?php endif;?>
                                </div>

                            </li>
                            <?php $c++; endwhile; ?>
                    </ul>
                </div>
            </div>
        <?php endif;

    endwhile;

endif;

?>
</section>
