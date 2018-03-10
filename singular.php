<?php get_header(); ?>

    <section class="section section-post single">
        <div class="container">
            <div class="section-title-box">
                <h2 class="section-title"><?php the_title(); ?></h2>
            </div>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; else: endif; ?>
        </div>
    </section>


<?php get_footer(); ?>