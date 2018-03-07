<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="wrapper">
        <a class="btn-jump-to-content smooth-scroll" href="#main-content"><?php _e('Skip Navigation', 'evenergy'); ?></a>
        <header class="header">
            <div class="container">
                <a href="<?php echo home_url(); ?>" class="logo">
                    <?php
                        $logo = get_field('logo', 'option');
                        if ( $logo['header_logo'] ) {
                            $logo_url = $logo['header_logo'];
                        } elseif ( has_custom_logo() ) {
                            $custom_logo = wp_get_attachment_image_src( get_theme_mod('custom_logo'), 'full' );
                            $logo_url = $custom_logo[0];
                        } else {
                            $logo_url = get_bloginfo('template_url') . '/img/logo@2x.png';
                        }
                    ?>
                    <img src="<?php echo $logo_url; ?>" alt="<?php bloginfo('name'); ?>">

                </a>
                
                <a href="/broken" class="mobile-menu-toggle" title="Menu" tabindex="1">
                    <span></span>
                </a>
                <div class="mobile-menu-wrap">
                    <div class="mobile-menu-box">
                        <a href="/broken" class="mobile-menu-close">
                            <span></span>
                        </a>
                        <div class="mobile-menu-inner-box">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location'  => 'main-menu',
                                    'menu'            => 'Main Navigation',
                                    'container'       => false,
                                    'menu_class'      => 'mobile-menu',
                                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                                    'depth'           => 1
                                ));

                                $contacts 	= get_field('contacts', 'option');
                                $emails = $contacts['emails'];

                                if ($emails) {
//                                    echo '<div class="menu-email-box">';
                                    foreach ($emails as $email) {
                                        echo '<a href="mailto:'.$email['email'].'" class="menu-email-box" title="'.$email['email'].'">'.$email['email'].'</a>';
                                    }
//                                    echo '</div>';
                                }
                            ?>



                            <?php get_template_part('inc/social', 'links'); ?>
                        </div>
                    </div>
                    <div class="mobile-menu-overlay"></div>
                </div>
            </div>
        </header>
        <div id="main-content">