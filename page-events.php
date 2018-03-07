<?php
/**
 * Template Name: Events
 */
get_header(); ?>

    <section class="section section-events">
		<div class="container">
            <div class="section-title-box">
                <h2 class="section-title lowercase"><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="container events">
            <div class="content">
                <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                endwhile; else: endif;
                ?>
            </div>
                <ul class="our-work-list popular">
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
                                <img class="our-work-img" src="<?php echo get_bloginfo('template_url'); ?>/img/our_work_1.jpg" alt="">
                                <div class="our-work-short-title">
                                    <span>ruckus obstacle races</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            <div class="btn-box">
                <a href="/broken" class="btn">more event case studies</a>
            </div>
        </div>
	</section

<?php get_footer(); ?>