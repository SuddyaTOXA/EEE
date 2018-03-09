<?php

$images = get_field('slider');

if ($images && count($images) > 1) {
?>
	<section class="section-slider">
	    <div class="swiper-container" id="case-study-slider">
		    <div class="swiper-wrapper">
			    <?php foreach ($images as $image) { ?>
				    <div class="swiper-slide">
					    <img class="bg-img" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
				    </div>
			    <?php } ?>
		    </div>
            <div class="evenergy-swiper-nav-wrap">
                <div class="evenergy-swiper-nav">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
	    </div>
	</section>
<?php } elseif ($images && count($images) == 1) { ?>
    <section class="section-slider">
        <div class="img-box">
	        <?php foreach ($images as $image) { ?>
                <img class="bg-img" src="<?=$image['url']?>" alt="<?=$image['alt']?>">
	        <?php } ?>
        </div>
    </section>
<?php } ?>
