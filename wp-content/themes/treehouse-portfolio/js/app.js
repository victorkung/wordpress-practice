// Wrapper necessary to let WordPress know you are working with jQuery
jQuery(document).ready(function($) {

  $(document).foundation();
  
  $( ".nav-toggle" ).click(function() {
    $(this).toggleClass("open");
    $("nav").fadeToggle(100);

    return false;
  });
});

