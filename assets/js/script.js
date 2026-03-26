$(document).ready(function() {
    
    // --- 1. Desktop Tab Click ---
    $('.tab-link').on('click', function() {
        var target = $(this).attr('data-target');

        // Update Buttons
        $('.tab-link').removeClass('active-d');
        $(this).addClass('active-d');

        // Update Content (Standard Fade)
        $('.acc-content').hide().removeClass('active-d');
        $(target).fadeIn().addClass('active-d');
    });

    // --- 2. Mobile Accordion Click ---
    $('.acc-title-outer').on('click', function() {
        var $parent = $(this).closest('.acc-content');
        var $inner = $(this).next('.acc-inner-content');

        // If clicking an already open one, just close it (optional)
        if ($parent.hasClass('active') && $(window).width() < 768) {
            $inner.slideUp();
            $parent.removeClass('active');
        } else {
            // Close others on mobile
            if ($(window).width() < 768) {
                $('.acc-inner-content').slideUp();
                $('.acc-content').removeClass('active');
                
                $inner.slideDown();
                $parent.addClass('active');
            }
        }
        
        // Synchronize the desktop tab button highlight
        var id = '#' + $parent.attr('id');
        $('.tab-link').removeClass('active-d');
        $('.tab-link[data-target="' + id + '"]').addClass('active');
    });

    $('#toggle-navigation').on('click', function() {
        $(this).toggleClass('active');
        $('body').toggleClass('active-navigation');
    });

    $(document).on('click', '.expand-nav', function() {
        $(this).toggleClass('active');
        $(this).siblings('ul').fadeIn().toggleClass('active');
    });
});