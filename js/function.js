$(document).ready(function () {
	
	// Login und Register öffnen unterschiedliche inputs
	
	$('.register-button').on('click', function () {
		if($('.input-login').hasClass('show')) {
			//Send it
			$('.i-login').removeClass('show');
			$('.i-register').addClass('show');
			$('.input-login').removeClass('show');
			$('.input-register').addClass('show');
			console.log('it works');
			$('.login-button').attr({
				'type' : 'button'
			});
			$('.register-button').attr({
				'type' : 'submit'
			});
		} else {
			$('.input-register').addClass('show');
			$('.i-register').addClass('show');
			$('.i-login').removeClass('show');
		}
	});
	$('.login-button').on('click', function () {
		if($('.input-register').hasClass('show')) {
			//Send it
			$('.input-register').removeClass('show');
			$('.input-login').addClass('show');
			$('.i-login').addClass('show');
			$('.i-register').removeClass('show');
			$('.register-button').attr({
				'type' : 'button'
			});
			$('.login-button').attr({
				'type' : 'submit'
			});
		} else {
			$('.input-login').addClass('show');
			$('.i-register').removeClass('show');
			$('.i-login').addClass('show');
		}
	});
	
	$('body').on('click', function () {
							 $(this).css('background' : 'red');
							console.log('js works');	
							 });
});