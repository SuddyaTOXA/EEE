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

    $(window).keyup(function (e) {
        var code = (e.keyCode ? e.keyCode : e.which);
        //open burger menu
        if (code == 9 && $('.mobile-menu-toggle:focus').length) {
            $('.mobile-menu-toggle').addClass('active');
            $('.mobile-menu-wrap').addClass('showing');
            $(document.body).addClass('overflow right-offset');
        }
        //close burger menu
        if ((code == 13 && $('.mobile-menu-box .mobile-menu-close:focus').length) || (code == 27 && $('.mobile-menu-box a:focus').length)) {
            $('.mobile-menu-toggle').removeClass('active');
            $('.mobile-menu-wrap').removeClass('showing');
            $(document.body).removeClass('overflow right-offset');
        }
        //for open filters
        if (code == 9 && $('.category-btn-box a:focus').length) {
            $('.container-box').addClass('show');
        }
        //for close filters
        if ((code == 13 && $('.filter-box .mobile-menu-close:focus').length) || (code == 27 && $('.filter-box a:focus').length)) {
            $('.container-box').removeClass('show');
        }
    });

    //close burger menu
    if ($('.mobile-menu-box a').length) {
        $('.mobile-menu-box a:last').blur(function() {
            $('.mobile-menu-toggle').removeClass('active');
            $('.mobile-menu-wrap').removeClass('showing');
            $(document.body).removeClass('overflow right-offset');
        });
    }
    //for close filters
    if ($('.filter-box a').length) {
        $('.filter-box a:last').blur(function() {
            $('.container-box').removeClass('show');
        });
    }

    //for hero title
    if ($('.hero-title-box').length) {
        var box = $('.hero-title-box'),
            boxWidth = box.find('.hero-title-inner-box').outerWidth();

        box.css('height',boxWidth )
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