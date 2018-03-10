<?php
/**
 * Template Name: Blog
 */
get_header(); ?>

    <section class="section section-blog">
        <div class="container">
            <div class="section-title-box">
                <h2 class="section-title lowercase"><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="container blog">
            <div class="container-box">
	            <?php get_template_part('inc/filter', 'category'); ?>
                <div class="container-inner">
                <?php global $wp_query;

                    $args = array(
                        'post_type'     => 'post',
                        'post_status'   => 'publish',
                        'orderby'       => 'date',
                        'order'         => 'DESC',
                        'posts_per_page'   => -1
                    );
                    $new_query = new WP_Query( $args );

                    if ( $new_query->have_posts() ) : ;
                ?>

                    <ul class="blog-list">
	                    <?php
	                    while ( $new_query->have_posts() ) : $new_query->the_post();
		                    get_template_part('inc/loop', 'post');
	                    endwhile;
	                    ?>
                    </ul>
                <?php
                    else: echo "<p class='no-results'>".__('Sorry, no posts found...', 'ico')."</p>";
                    endif;
                    wp_reset_query();
                ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>