$(document).ready(function(){
	// SCROLL TOP
	$('.btn-up').on('click',function(e){
		e.preventDefault();
		$('html, body').stop().animate({
			'scrollTop' : '0',
		},800);
	})
})
