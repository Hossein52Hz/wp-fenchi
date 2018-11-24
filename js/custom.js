// use in bootstrap tooltip

(function($) {
    $('.bs-tooltip').tooltip();
})(jQuery);

// Move Back top of the site button
$(document).ready(function(){ 
  $(window).scroll(function(){ 
      if ($(this).scrollTop() > 100) { 
          $('#back-top').fadeIn(); 
      } else { 
          $('#back-top').fadeOut(); 
      } 
  }); 
  $('#back-top').click(function(){ 
      $("html, body").animate({ scrollTop: 0 }, 600); 
      return false; 
  }); 
});

//Change toggle icon
$(function() {
    $('#changetoggle').click(function() {
      $('#navbar-hamburger').toggleClass('hidden');
      $('#navbar-close').toggleClass('hidden');  
    });
  });

// 3 level drop down menu in bootstrap
$('.dropdown-submenu > a').on("click", function(e) {
    var submenu = $(this);
    $('.dropdown-submenu .dropdown-menu').removeClass('show');
    submenu.next('.dropdown-menu').addClass('show');
    e.stopPropagation();
});

$('.dropdown').on("hidden.bs.dropdown", function() {
    // hide any open menus when parent closes
    $('.dropdown-menu.show').removeClass('show');
});

// lightbox image for image-post-format
$(document).on("click", '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });