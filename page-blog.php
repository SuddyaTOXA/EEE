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
                <div class="filter-box">
                    <h3 class="filter-title">Categories</h3>
                    <a href="/broken" class="all">All Category</a>
                    <a href="/broken">New Work</a>
                    <a href="/broken">Industry Trends</a>
                    <a href="/broken">Category Three</a>
                    <a href="/broken">Category Four</a>
                    <a href="/broken">Category Etc</a>
                </div>
                <div class="container-inner">
                    <ul class="blog-list">
                        <li>
                            <a href="/broken">
                                <div class="blog-box">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/our_work_1.jpg" alt="" class="blog-img">
                                    <div class="blog-short-title">
                                        <span>new work</span>
                                    </div>
                                </div>
                                <div class="blog-desc">
                                    <p>Opening lead sentence. Tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                        enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/broken">
                                <div class="blog-box">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/our_work_2.jpg" alt="" class="blog-img">
                                    <div class="blog-short-title">
                                        <span>industry trends</span>
                                    </div>
                                </div>
                                <div class="blog-desc">
                                    <p>Opening lead sentence. Tincid unt ut laoreet.</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/broken">
                                <div class="blog-box">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/our_work_3.jpg" alt="" class="blog-img">
                                    <div class="blog-short-title">
                                        <span>industry trends</span>
                                    </div>
                                </div>
                                <div class="blog-desc">
                                    <p>Opening lead sentence.</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/broken">
                                <div class="blog-box">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/our_work_2.jpg" alt="" class="blog-img">
                                    <div class="blog-short-title">
                                        <span>industry trends</span>
                                    </div>
                                </div>
                                <div class="blog-desc">
                                    <p>Opening lead sentence. Tincid unt ut laoreet.</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/broken">
                                <div class="blog-box">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/our_work_3.jpg" alt="" class="blog-img">
                                    <div class="blog-short-title">
                                        <span>industry trends</span>
                                    </div>
                                </div>
                                <div class="blog-desc">
                                    <p>Opening lead sentence. Tincid unt ut laoreet, quis nostrud exerci tation .</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="content-wrap">
		<div class="content">
			<?php global $wp_query;

                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = array(
                    'post_type'     => 'post',
                    'post_status'   => 'publish',
                    'orderby'       => 'date',
                    'order'         => 'DESC',
                    'paged'         => $paged,
                );
                $new_query = new WP_Query( $args );

                if ( $new_query->have_posts() ) : while ( $new_query->have_posts() ) : $new_query->the_post();
            ?>
				<?php get_template_part('loop', 'post'); ?>

			<?php endwhile; ?>

<!--                --><?php //wp_pagenavi( array( 'query' => $new_query ) ); ?>

            <?php else: echo "<p class='no-results'>Sorry, articles not found...</p>"; 
                endif; wp_reset_query(); ?>
			 
		</div><!--/content-->	

<!--		--><?php //get_sidebar(); ?>

	</div><!--/content-wrap-->

<?php get_footer(); ?>