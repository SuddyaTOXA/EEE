<?php
    $image = get_field('case_image');
    $short_title = get_field('short_title');
    $alt = strip_tags($short_title);
?>

<li>
    <a href="<?php the_permalink(); ?>" title="<?=esc_attr($alt)?>">
        <div class="our-work-box">
	        <?php if ($image) { ?>
            <img class="our-work-img" src="<?=$image?>" alt="<?=esc_attr($alt)?>">
	        <?php }
                if($short_title) { ?>
                <div class="our-work-short-title-wrap">
                    <div class="our-work-short-title">
                        <span><?=$short_title?></span>
                    </div>
                </div>
	        <?php } ?>
        </div>
    </a>
</li>
