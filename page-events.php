<?php
/**
 * Template Name: Events
 */
get_header();

$events = get_field('popular_events');
$button_text = get_field('button_text');
$button_link = get_field('button_link');

?>

    <section class="section section-events">
		<div class="container">
            <div class="section-title-box">
                <h2 class="section-title lowercase"><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="container events">
            <div class="content">
                <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                endwhile; else: endif;
                ?>
            </div>
            <?php if ($events) { ?>
                <ul class="our-work-list popular">
	                <?php foreach ($events as $event) {
		                $short_title = $event['short_title'];
		                $alt = esc_attr(strip_tags($short_title));
		                $link = $event['link'];
		                $image = $event['image'];
                    ?>
                        <li>
                            <a href="<?=esc_url($link)?>" title="<?=$alt?>">
                                <div class="our-work-box">
                                    <?php if ($image) { ?>
                                        <img class="our-work-img" src="<?=$image?>" alt="<?=$alt?>">
                                    <?php }
                                        if ($short_title) { ?>
                                        <div class="our-work-short-title">
                                            <span><?=$short_title?></span>
                                        </div>
                                    <?php } ?>
                                </div>
                            </a>
                        </li>
	                <?php } ?>
                </ul>
	        <?php }
	            if ($button_text && $button_link) {
	        ?>
            <div class="btn-box">
                <a href="<?=$button_link?>" title="<?=esc_attr($button_text)?>" class="btn"><?=$button_text?></a>
            </div>
            <?php } ?>
        </div>
	</section

<?php get_footer(); ?>