<?php get_header(); ?>

    <section class="section section-post single">
        <div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="content">
					<?php the_content(); ?>
                </div>
			<?php endwhile; else: endif; ?>
        </div>
    </section>

<?php get_footer(); ?>