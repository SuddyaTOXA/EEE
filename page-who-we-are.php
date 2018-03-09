<?php
/**
 * Template Name: Ho We Are
 */
get_header(); ?>

    <section class="section section-our-work">
		<div class="container">
            <div class="section-title-box">
                <h2 class="section-title lowercase"><?php the_title(); ?></h2>
            </div>
            <div class="who-we-list-box">
                <ul class="who-we-list">
                    <li>
                        <div class="who-we-box partner">
                            <div class="person-top-box">
                                <div class="peron-img-wrap">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/person_img_1.jpg"  alt="Branden Connolly">
                                </div>
                                <div class="person-info">
                                    <h3 class="person-name">Branden Connolly</h3>
                                    <span class="person-position">Partner</span>
                                </div>
                            </div>
                            <div class="person-desc">
                                <div class="content">
                                    <p>This and experience that can’t be matched. Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore</p>
                                </div>
                            </div>

                            <span class="person-more-info btn small inverse">More</span>
                            <div class="person-desc more">
                                <div class="content">
                                    <h6>Highlights</h6>
                                    <ul>
                                        <li>nostrud exerci tation ullamcorper</li>
                                        <li>laoreet dolore magna</li>
                                        <li>Consectetuer adipiscing elit</li>
                                        <li>Ut wisi nibh euismod tincidunt ut laoreet</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="who-we-box partner">
                            <div class="person-top-box">
                                <div class="peron-img-wrap">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/person_img_1.jpg" alt="Branden Connolly">
                                </div>
                                <div class="person-info">
                                    <h3 class="person-name">David Steffano</h3>
                                    <span class="person-position">Partner</span>
                                </div>
                            </div>
                            <div class="person-desc">
                                <div class="content">
                                    <p>This and experience that can’t be matched. Lorem ipsum dolor sit amet,
                                        consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                                        ut laoreet dolore consectetuer adipiscing elit, sed diam nonummy </p>
                                </div>
                            </div>


                            <span class="person-more-info btn small inverse">More</span>
                            <div class="person-desc more">
                                <div class="content">
                                    <h6>Highlights</h6>
                                    <ul>
                                        <li>nostrud exerci tation ullamcorper</li>
                                        <li>laoreet dolore magna</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="who-we-box">
                            <div class="person-top-box">
                                <div class="peron-img-wrap">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/person_img_1.jpg" alt="Branden Connolly">
                                </div>
                                <div class="person-info">
                                    <h3 class="person-name">Johnny Joslin</h3>
                                    <span class="person-position">Event Team</span>
                                </div>
                            </div>
                            <div class="person-desc">
                                <div class="content">
                                    <p>This and experience that can’t be matched. Lorem ipsum dolor sit amet, consectetuer
                                        adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore</p>
                                </div>
                            </div>

                            <span class="person-more-info btn small inverse">More</span>
                            <div class="person-desc more">
                                <div class="content">
                                    <h6>Highlights</h6>
                                    <ul>
                                        <li>nostrud exerci tation ullamcorper</li>
                                        <li>laoreet dolore magna</li>
                                        <li>Consectetuer adipiscing elit</li>
                                        <li>Ut wisi nibh euismod tincidunt ut laoreet</li>
                                        <li>Tincidunt ut laoreet</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="who-we-box">
                            <div class="person-top-box">
                                <div class="peron-img-wrap">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/person_img_1.jpg" alt="Branden Connolly">
                                </div>
                                <div class="person-info">
                                    <h3 class="person-name">Ann Egelhoff</h3>
                                    <span class="person-position">Sponsorship Director</span>
                                </div>
                            </div>
                            <div class="person-desc">
                                <div class="content">
                                    <p>This and experience that can’t be matched. Lorem ipsum dolor sit amet,
                                        consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                        laoreet dolore dolor sit amet, consectetuer adipiscing elit, sed dia</p>
                                </div>
                            </div>

                            <span class="person-more-info btn small inverse">More</span>
                            <div class="person-desc more">
                                <div class="content">
                                    <h6>Highlights</h6>
                                    <ul>
                                        <li>nostrud exerci tation ullamcorper</li>
                                        <li>laoreet dolore magna</li>
                                        <li>Consectetuer adipiscing elit</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
<?php
//			if ( have_posts() ) : while ( have_posts() ) : the_post();
//				the_content();
//			endwhile; else: endif;
			?>
        </div>
	</section

<?php get_footer(); ?>