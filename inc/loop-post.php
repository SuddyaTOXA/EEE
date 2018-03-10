<?php
    $image = get_field('post_image');
    $short_title = get_field('post_short_title');
    $alt = strip_tags($short_title);
?>
<li>
    <a href="<?php the_permalink(); ?>" title="<?=esc_attr($alt)?>">
        <div class="blog-box">
	        <?php if ($image) { ?>
                <img class="blog-img" src="<?=$image?>" alt="<?=esc_attr($alt)?>">
            <?php }
                if($short_title) { ?>
                <div class="blog-short-title">
                    <span><?=$short_title?></span>
                </div>
            <?php } ?>
        </div>
        <div class="blog-desc">
           <?php the_excerpt(); ?>
        </div>
    </a>
</li>