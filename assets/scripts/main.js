$(document).ready(function() {
    $(window).on('scroll', function() {
        $('.project').each(function() {
            if ($(this).isInViewport()) {
                $(this).addClass('show');
            }
        });
    });

    // Helper function to check if an element is in the viewport
    $.fn.isInViewport = function() {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();
        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();
        return elementBottom > viewportTop && elementTop < viewportBottom;
    };
});
