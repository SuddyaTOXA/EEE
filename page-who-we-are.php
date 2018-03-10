<?php
/**
 * Template Name: Who We Are
 */

get_header();

$persons = get_field('person');

?>

    <section class="section section-our-work">
		<div class="container">
            <div class="section-title-box">
                <h2 class="section-title lowercase"><?php the_title(); ?></h2>
            </div>
            <div class="who-we-list-box">
                <?php if ($persons &&count($persons) > 0) { ?>
                    <ul class="who-we-list">
                        <?php foreach ($persons as $person)  {
                            $high_position = ($person['high_position'] == 1) ? 'partner' : '';
                            $image = $person['image'];
                            $name = $person['name'];
                            $position = $person['position'];
                            $content = $person['content'];
                            $more_content = $person['more_content'];
                            ?>
                            <li>
                                <div class="who-we-box <?=$high_position?>">
                                    <div class="person-top-box">
                                        <div class="peron-img-wrap">
                                            <img src="<?=esc_url($image)?>"  alt="<?=esc_attr($name)?>">
                                        </div>
                                        <div class="person-info">
                                            <h3 class="person-name"><?=$name?></h3>
                                            <span class="person-position"><?=$position?></span>
                                        </div>
                                    </div>
                                    <div class="person-desc">
                                        <div class="content">
                                            <?=$content?>
                                        </div>
                                    </div>
                                    <?php if ($more_content) { ?>
                                    <div class="person-desc more">
                                        <div class="content">
	                                        <?=$more_content?>
                                        </div>
                                    </div>
                                    <span class="person-more-info btn small inverse">More</span>
                                    <?php } ?>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
<?php
//			if ( have_posts() ) : while ( have_posts() ) : the_post();
//				the_content();
//			endwhile; else: endif;
			?>
        </div>
	</section

<?php get_footer(); ?>