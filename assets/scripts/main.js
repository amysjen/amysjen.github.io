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



  const $cursor = $(".cursor");

  $(document).on("mousemove", function (e) {
    $cursor.css({
      top: `${e.pageY - 10}px`,
      left: `${e.pageX - 10}px`,
    });
  });

  $(document).on("click", function () {

    $cursor.addClass("cursor--expand");

    setTimeout(function () {
      $cursor.removeClass("cursor--expand");
    }, 500);
  });


});

