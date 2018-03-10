jQuery(document).ready(function($) {
    function prevent(){
        $('.prevent, a[href="/broken"]').on('click', function(event){
            event.preventDefault();
        });
    }
    prevent();

    //for burger menu
    $('.mobile-menu-toggle, .mobile-menu-box .mobile-menu-close, .mobile-menu-overlay, .mobile-menu a').on('click', function (e) {
        $('.mobile-menu-toggle').toggleClass('active');
        $('.mobile-menu-wrap').toggleClass('showing');
        $(document.body).toggleClass('overflow right-offset');
    });
    // $('.mobile-menu-toggle').focus(function() {
    //     $(this).addClass('focus');
    // });
    // the blocking of links default behavior

    //for burger menu
    if ($('.wpcf7-form').length) {
        $(window).on('load', function () {
            var btn = $('.wpcf7-form').find('.wpcf7-submit'),
                box = btn.parent(),
                newBtn = '<button type="submit" class="'+btn.attr('class')+'">'+btn.val()+'</button>';

            btn.hide(0);
            box.append(newBtn);
        })
    }

    //for hero title
    if ($('.hero-title-box').length) {
        var box = $('.hero-title-box'),
            boxWidth = box.outerWidth();

        box.find('.hero-title-inner-box ').css('height',boxWidth )
    }

    //for case study slider
    if ($('#case-study-slider')) {
        var swiper = new Swiper('#case-study-slider', {
            slidesPerView: 1,
            effect: 'fade',
            loop: true,
            keyboard: {
                enabled: true
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });
    }

    //for category filter
    if ($('.filter-box').length) {
        $('.btn-category, .filter-box-overlay, .filter-box a, .filter-box .mobile-menu-close').on('click', function () {
            var btn = $(this),
                box = btn.parents('.container-box');

                box.toggleClass('show');
                $(document.body).toggleClass('overflow');
        })
    }

    //for who we are more info
    if($('.person-more-info').length) {
        $('.person-more-info').on('click', function () {
            var moreBox = $(this).parents('.who-we-box').find('.person-desc.more');

            moreBox.slideToggle(350);
            $(this).text($(this).text() == 'More' ? 'Less' : 'More');
        })
    }

	// for smooth scroll
    smoothScroll.init({
        selector: '[data-scroll], .smooth-scroll', // Selector for links (must be a class, ID, data attribute, or element tag)
        speed: 500, // Integer. How fast to complete the scroll in milliseconds
        easing: 'easeInQuad', // Easing pattern to use
        offset: 50 // Integer. How far to offset the scrolling anchor location in pixels
    });


});