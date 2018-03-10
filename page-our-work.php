<?php
/**
 * Template Name: Our Work
 */
get_header(); ?>

    <section class="section section-who-we-are">
		<div class="container">
            <div class="section-title-box">
                <h2 class="section-title lowercase"><?php the_title(); ?></h2>
            </div>
            <div class="our-work-list-box">
            <?php
                global $wp_query;

                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $post_per_page = get_option('posts_per_page');
                $args = array(
                    'post_type'        => 'case_study',
                    'post_status'      => 'publish',
                    'orderby'       => 'date',
                    'order'         => 'DESC',
                    'posts_per_page'   => -1
                );

                $new_query = new WP_Query( $args );
                 if ( $new_query->have_posts() ) :
            ?>
                <ul class="our-work-list">
                <?php
                    while ( $new_query->have_posts() ) : $new_query->the_post();
                        get_template_part('inc/loop', 'case_study');
                    endwhile;
                ?>
                </ul>
                <?php
                     else:
                         echo '<p class="not-found">Sorry, no events found...</p>';
                     endif;
                     
                    wp_reset_query();
                ?>
            </div>
        </div>
	</section

<?php get_footer(); ?>