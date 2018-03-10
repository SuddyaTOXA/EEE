<?php
get_header();

$show_hero = get_field('show_hero');
$hero_title = get_field('hero_title');
$hero_image = get_field('hero_image');
$hero_navigation = get_field('hero_navigation');
?>

        <?php if ($show_hero == 1) { ?>
            <section class="section section-hero">
                <div class="container">
                    <?php if ($hero_title) { ?>
                        <div class="hero-title-box">
                            <div class="hero-title-inner-box">
                                <h1 class="hero-title"><?=$hero_title?></h1>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php if ($hero_image) { echo '<img class="bg-img" src="'.$hero_image.'" alt="'.esc_attr($hero_title ).'">'; } ?>
            </section>
            <?php
                if ($hero_navigation) {
                    echo '<section class="section-hero-nav">
                            <div class="container">
                                <ul class="hero-nav">';
                                foreach ($hero_navigation as $nav) {
                                    echo '<li><a href="'.esc_url($nav['link']).'" title="'.esc_attr($nav['title']).'">'.$nav['title'].'</a></li>';
                                }
                        echo ' </ul>
                            </div>
                        </section>';
                }
            ?>
        <?php } ?>
        <section class="section section-hero-content">
            <div class="container">
                <div class="content">

		            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			            <?php the_content(); ?>

		            <?php endwhile; else: endif; ?>

                </div>
            </div>
        </section>

<?php get_footer(); ?>