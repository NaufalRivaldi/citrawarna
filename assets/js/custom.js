$(document).ready(function(){
	var toggle = 1;
	$(document).on('click', '.btn-cok', function(e){
		if (toggle === 1) {
			$('.menu-mobile').addClass('toggle');
			$(".container-mobile").css("display", "block");
			toggle = 0;
		}else{
			$('.menu-mobile').removeClass('toggle');
			$(".container-mobile").css("display", "none");
			toggle = 1;
		}
	});
});

$( '.js-input' ).keyup(function() {
  if( $(this).val() ) {
     $(this).addClass('not-empty');
  } else {
     $(this).removeClass('not-empty');
  }
});

/*
$( ".img-product" ).hover(
  function() {
    $('.text-product').css('display', 'block');
  }, function() {
    $('.text-product').css('display', 'none');
  }
);

*/


