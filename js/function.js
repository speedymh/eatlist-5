$(function () {
	
	// Login und Register öffnen unterschiedliche inputs
	$('.register-button').on('click', function () {
		$('.i-login').removeClass('show');
		if($('.input-login').hasClass('show')) {
			$('.input-login').removeClass('show');
			$('.input-register').addClass('show');
		} else {
			$('.input-register').addClass('show');
		}
	});
	
	$('.login-button').on('click', function () {
		$('.i-register').removeClass('show');
		if($('.input-register').hasClass('show')) {
			$('.input-register').removeClass('show');
			$('.input-login').addClass('show');
		} else {
			$('.input-login').addClass('show');
		}
	});
	
	$("input[type='text'][name='login-field']").keyup(function() {
		
		if(!$(this).val() == '') {
			$('.register-button').attr({
				'type' : 'button'
			});
			$('.login-button').attr({
				'type' : 'submit'
			});
			$('.i-login').addClass('show');
		}
	});
	
	$("input[type='text'][name='register-field']").keyup(function() {
		if(!$(this).val() == '') {
			$('.login-button').attr({
				'type' : 'button'
			});
			$('.register-button').attr({
				'type' : 'submit'
			});
			$('.i-register').addClass('show');
		}
	});
});