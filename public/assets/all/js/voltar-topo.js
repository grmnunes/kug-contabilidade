$('#subir').click(function(){
  $('html, body').animate({scrollTop:0}, 'slow');
  return false;
});

$(window).scroll(function() {
  var scroll = $(window).scrollTop();

  if (scroll > 450) {
      $('#subir').removeClass('hide');
      $('#subir').addClass('show');
  } else {
      $('#subir').removeClass('show');
      $('#subir').addClass('hide');
  }
});