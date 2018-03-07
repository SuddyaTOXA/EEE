<?php
    $footer_logo = get_field('logo', 'option');
    $contacts 	= get_field('contacts', 'option');
    $emails = $contacts['emails'];
?>
    </div>
        <footer class="footer">
            <div class="container">
                <a href="<?php echo home_url(); ?>" class="footer-logo">
                    <?php
                    if ( $logo['footer_logo'] ) {
                        $footer_logo_url = $logo['footer_logo'];
                    } else {
                        $footer_logo_url = get_bloginfo('template_url') . '/img/footer_logo@2x.png';
                    }
                    ?>
                    <img src="<?php echo $footer_logo_url; ?>" alt="<?php bloginfo('name'); ?>">
                </a>

                <?php get_template_part('inc/social', 'links'); ?>

                <?php
                    if ($emails) {
//                        echo '<div class="footer-email-box">';
	                    foreach ($emails as $email) {
                            echo '<a href="mailto:'.$email['email'].'" class="footer-email-box" title="'.$email['email'].'">'.$email['email'].'</a>';
	                    }
//	                    echo '</div>';
                    }
                ?>

                <?php wp_nav_menu(array(
                    'theme_location'  => 'footer-menu',
                    'menu'            => 'Footer Menu',
                    'container'       => false,
                    'container_class' => false,
                    'container_id'    => false,
                    'menu_class'      => 'footer-menu',
                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                    'depth'           => 1
                )); ?>
            </div>
        </footer>
    </div><!--/wrap-->

    <?php wp_footer(); ?>
</body>
</html>