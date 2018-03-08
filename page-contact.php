<?php
/**
 * Template Name: Contact
 */

$cf = get_field('contact_form_shortcode');
$phone = get_field('phone');
$address = get_field('address');
$emails = get_field('emails');
$show_social = get_field('show_social');

get_header();
?>

    <section class="section section-contact">
		<div class="container">
            <div class="section-title-box">
                <h2 class="section-title lowercase"><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="container contact">
            <div class="left-box">
	            <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                    endwhile; else: endif;
	            ?>
            </div>
            <div class="right-box">
                <?php
                    if ($phone) {
	                    echo '<p class="contact-phones">' . $phone . '</p>';
                    }
                    if ($emails) {
                            echo '<div class="contact-email-box">';
                        foreach ($emails as $email) {
                            echo '<a href="mailto:'.$email['email'].'" title="'.$email['email'].'">'.$email['email'].'</a>';
                        }
    	                    echo '</div>';
                    }
                    if ($address) {
                        echo '<p class="contact-address">' . $address . '</p>';
                    }
                    if ($show_social == 1) {
	                    get_template_part('inc/social', 'links');
                    }
                  ?>
            </div>
        </div>
	</section

<?php get_footer(); ?>