$(function () {
	$('.register').on('click', function () {
		if($('.input-login').hasClass('show')) {
			//Send it
			$('.i-login').removeClass('show');
			$('.i-register').addClass('show');
			$('.input-login').removeClass('show');
			$('.input-register').addClass('show');
		} else {
			$('.input-register').addClass('show');
			$('.i-register').addClass('show');
			$('.i-login').removeClass('show');
		}
	});
	$('.login').on('click', function () {
		if($('.input-register').hasClass('show')) {
			//Send it
			$('.input-register').removeClass('show');
			$('.input-login').addClass('show');
			$('.i-login').addClass('show');
			$('.i-register').removeClass('show');
		} else {
			$('.input-login').addClass('show');
			$('.i-register').removeClass('show');
			$('.i-login').addClass('show');
		}
	});
});