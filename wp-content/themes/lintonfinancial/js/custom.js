$(function(){
  var height = $(window).height();
  // clean up this duplication.
  $(".masthead-bg").css({height: height});
  $(window).on('resize', function(){
    height = $(this).height();
    $(".masthead-bg").css({height: height});
  });
});
