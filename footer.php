<?php
    $footer_logo = get_field('footer_logo', 'option');
    $emails 	= get_field('email', 'option');
?>
    </div>
        <footer class="footer">
            <div class="container">
                <a href="<?php echo home_url(); ?>" class="footer-logo">
                    <?php
                    if ( $footer_logo ) {
                        $footer_logo_url = $footer_logo;
                    } else {
                        $footer_logo_url = get_bloginfo('template_url') . '/img/footer_logo@2x.png';
                    }
                    ?>
                    <img src="<?php echo $footer_logo_url; ?>" alt="<?php bloginfo('name'); ?>">
                </a>

                <?php get_template_part('inc/social', 'links'); ?>

                <?php
                    if ($emails) {
                        echo '<a href="mailto:'.$emails.'" class="footer-email-box" title="'.$emails.'">'.$emails.'</a>';
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