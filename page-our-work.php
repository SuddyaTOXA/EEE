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
                <ul class="our-work-list">
                    <li>
                        <a href="/broken">
                            <div class="our-work-box">
                                <img class="our-work-img" src="<?php echo get_bloginfo('template_url'); ?>/img/our_work_1.jpg" alt="">
                                <div class="our-work-short-title">
                                    <span>ruckus obstacle races</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/broken">
                            <div class="our-work-box">
                                <img class="our-work-img" src="<?php echo get_bloginfo('template_url'); ?>/img/our_work_3.jpg" alt="">
                                <div class="our-work-short-title">
                                    <span>plaza art fair</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/broken">
                            <div class="our-work-box">
                                <img class="our-work-img" src="<?php echo get_bloginfo('template_url'); ?>/img/our_work_2.jpg" alt="">
                                <div class="our-work-short-title">
                                    <span>waterfire</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/broken">
                            <div class="our-work-box">
                                <img class="our-work-img" src="<?php echo get_bloginfo('template_url'); ?>/img/our_work_3.jpg" alt="">
                                <div class="our-work-short-title">
                                    <span>plaza art fair</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/broken">
                            <div class="our-work-box">
                                <img class="our-work-img" src="<?php echo get_bloginfo('template_url'); ?>/img/our_work_2.jpg" alt="">
                                <div class="our-work-short-title">
                                    <span>waterfire</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile; else: endif;
			?>
        </div>
	</section

<?php get_footer(); ?>