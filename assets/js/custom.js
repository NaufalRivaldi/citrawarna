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