<?php
	$socials = get_field('social_links', 'option');

	if ($socials) {
		echo '<div class="social-links-box">
				<ul class="social-links">';
				foreach($socials as $social) {
					$link = $social['link'];
					if ($social['icon'] == 'facebook') {
						$icon = '<i class="fab fa-facebook-f"></i>';
					} elseif ($social['icon'] == 'twitter') {
						$icon = '<i class="fab fa-twitter"></i>';
					} elseif ($social['icon'] == 'linkedin') {
						$icon = '<i class="fab fa-linkedin-in"></i>';
					} else {
						$icon = '';
					}
					if (!empty($link) && !empty($icon)) {
						echo '<li><a href="' . esc_url( $link ) . '" title="' . parse_url( $link, PHP_URL_HOST ) . '" target="_blank" rel="nofollow">' . $icon . '</a></li>';
					}
				}
		echo '	</ul>
			</div>';
	}
