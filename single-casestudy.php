<?php

$results = get_field('results');
//$ = get_field('');
//$ = get_field('');
//$ = get_field('');

get_header();
?>

    <?php get_template_part('inc/slider'); ?>

    <section class="section section-case-study">
        <div class="container">
            <div class="section-title-box">
                <h2 class="section-title"><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="container study">
            <div class="left-box">
	            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="content">
			            <?php the_content(); ?>
                    </div>
	            <?php endwhile; else: endif; ?>
            </div>
            <div class="right-box">
                <?php if ($results) { ?>
                    <div class="quick-result-box">
                        <h3 class="quick-title">Quick Hit Results</h3>
                        <?php
                            foreach ($results as $result) {
                                if ($result['value'] || $result['description']) {
                                    echo '<div class="quick-box">';
                                        if ($result['value']) {
                                            echo '<span class="value">'.$result['value'].'</span>';
                                        }
                                        if ($result['description']) {
                                            echo '<p class="desc">'.$result['description'].'</p>';
                                        }
	                                echo '</div>';
                                }
                            }
                        ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>


<?php get_footer(); ?>