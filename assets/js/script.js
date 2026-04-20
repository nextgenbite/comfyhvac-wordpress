$(document).ready(function () {
    // --- Sticky Header ---
    var nav = $('#container-primary-navigation');
    var navTop = nav.offset().top;

    $(window).on('scroll', function () {
        if ($(window).scrollTop() >= navTop) {
            $('body').addClass('ims-is-scrolled');
        } else {
            $('body').removeClass('ims-is-scrolled');
        }
    });

$(document).on('mouseenter', '.nav-level-1', function () {
    $(this).addClass('active');

    // Check if this is the last visible sibling
    if ($(this).is(':last-child')) {
        $(this).addClass('right-position');
    }
});

$(document).on('mouseleave', '.nav-level-1', function () {
    $(this).removeClass('active right-position');
});
    // --- 1. Desktop Tab Click ---
    $('.tab-link').on('click', function () {
        var target = $(this).attr('data-target');

        // Update Buttons
        $('.tab-link').removeClass('active-d');
        $(this).addClass('active-d');

        // Update Content (Standard Fade)
        $('.acc-content').hide().removeClass('active-d');
        $(target).fadeIn().addClass('active-d');
    });

    // --- 2. Mobile Accordion Click ---
    $('.acc-title-outer').on('click', function () {
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

    $('#toggle-navigation').on('click', function () {
        $(this).toggleClass('active');
        $('body').toggleClass('active-navigation');
    });

    $(document).on('click', '.expand-nav', function () {
        $(this).toggleClass('active');
        $(this).siblings('ul').fadeIn().toggleClass('active');
    });

    //promotion modal
    $(document).on('click', '.modal-trigger', function (e) {
        e.preventDefault();
        var appendId = $(this).data('append-id'); // e.g. promotion-popup-39



        // Show the correct one
        $('#' + appendId).fadeIn(200);

       
    });

    // Close modal
    $(document).on('click', '.close-popup', function () {
        $(this).closest('.ims-lightbox').hide();
    });

$('#btn-print-coupon').on('click', function () { 
    var couponContent = $('#main-content').html();

    var printWindow = window.open('', '', 'height=600,width=800');

    printWindow.document.write('<html><head><title>Print Coupon</title>');

    // ✅ Copy all styles and links
    $('link[rel="stylesheet"], style').each(function () {
        printWindow.document.write($(this).prop('outerHTML'));
    });

    printWindow.document.write('</head><body>');
    printWindow.document.write(couponContent);
    printWindow.document.write('</body></html>');

    printWindow.document.close();

    printWindow.onload = function() {
        printWindow.print();
    };
});
});