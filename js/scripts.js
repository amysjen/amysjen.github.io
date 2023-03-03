$(document).ready(function() {
  $('a').click(function(){
    var target = $(this).data('target');
    $('.popup').each(function(){
      if($(this).attr('id') == target) {
        $(this).addClass('show');
      }
    });
  });
});


