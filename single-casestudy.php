<?php

$post_image = get_field('post_image');
$post_short_title = get_field('post_short_title');

get_header();
?>

    <section class="section section-post">
        <div class="container">
            <div class="container-box">
                <div class="filter-box">
                    <h3 class="filter-title">Blog Home</h3>
                    <h3 class="filter-title">Categories</h3>
<!--                    <a href="/broken" class="hide all">All Category</a>-->
                    <a href="/broken">New Work</a>
                    <a href="/broken">Industry Trends</a>
                    <a href="/broken">Category Three</a>
                    <a href="/broken">Category Four</a>
                    <a href="/broken">Category Etc</a>
                </div>
                <div class="container-inner">
                    <div class="post-wrap">
                        <?php
                            if ($post_image || $post_short_title) {
                        ?>
                            <div class="post-banner">
                                <?php
                                    if ($post_image) {
                                        echo '<div class="post-banner-img-wrap">
                                                <img class="bg-img" src="'.esc_url($post_image).'" alt="'.esc_attr($post_short_title).'">
                                            </div>';
                                    }
                                ?>

                                <div class="post-banner-info">
                                    <?php
                                        if ($post_short_title) {
                                            echo '<div class="our-work-short-title"><span>'.$post_short_title.'</span></div>';
                                        }
                                    ?>

                                    <?php get_template_part('inc/share', 'links'); ?>
                                </div>
                            </div>
	                    <?php } ?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	                            <?php the_title('<h1 class="post-title">', '</h1>'); ?>
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                            <?php endwhile; else: endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>