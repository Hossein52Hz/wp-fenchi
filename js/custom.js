// usein bootstrap tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});


// Move Back top of the site button
$(document).ready(function(){ 
  $(window).scroll(function(){ 
      if ($(this).scrollTop() > 100) { 
          $('#backTop').fadeIn(); 
      } else { 
          $('#backTop').fadeOut(); 
      } 
  }); 
  $('#backTop').click(function(){ 
      $("html, body").animate({ scrollTop: 0 }, 600); 
      return false; 
  }); 
});

//Change toggle icon
$(function() {
    $('#ChangeToggle').click(function() {
      $('#navbar-hamburger').toggleClass('hidden');
      $('#navbar-close').toggleClass('hidden');  
    });
  });