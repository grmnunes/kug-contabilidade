// $(function() {
//     $('a[href*="#"]:not([href="#"])').click(function() {
  
//       var target = $(this.hash);
  
//       if (target.length) {
//         $('html, body').animate({ scrollTop: target.offset().top }, 1000);
//         return false;
//       }
  
//     });
//   });

$('.nav-wrapper a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;
			
	$('html, body').animate({ 
		scrollTop: targetOffset - 100
	}, 500);
});