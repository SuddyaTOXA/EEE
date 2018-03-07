<?php
	$socials = get_field('links', 'option');

	if ($socials) {
		echo '<ul class="social-links">';
		foreach($socials as $social) {
			echo '<li><a href="'.esc_url($social['link']).'" title="'.parse_url($social['link'], PHP_URL_HOST).'" target="_blank" rel="nofollow">'.$social['icon'].'</a></li>';
		}
		echo '</ul>';
	}
