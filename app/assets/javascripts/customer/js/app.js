$(document).ready(function(){

	$('input[name=phone]').mask("+7(999)999-99-99");
	$('input').placeholder();

	$('form').submit(function(event){
		event.preventDefault();
		var ths = $(this);
		ths.find('.form_input').removeClass('header_form_input_error');

		var $nameInput = ths.find('.header_form_input_name');
		var $phoneInput = ths.find('.header_form_input_phone');
		var $emailInput = ths.find('.header_form_input_email');

		$.ajax({
			type: "POST",
			url: ths.attr('action'),
			beforeSend: function(){
				$(".header_form_input, .popup_form_input").removeClass("header_form_input_error");
			},
			data: ths.serialize(),
			dataType: 'json',
			success: function(msg){
				if(msg.success){
                    var $successBlock = $('.content_main_form_success');
                    ths.slideUp(200, function(){
                        ths.trigger('reset');
                        ths.remove();
                        $successBlock.find('p').text('Спасибо! Ваша заявка успешна отправлена, мы свяжемся с вами в ближайшее время.');
                        $successBlock.fadeIn();
                    });

				}

				if(msg.name){
					$nameInput.addClass("header_form_input_error");
				}

				if(msg.phone){
					$phoneInput.addClass("header_form_input_error");
				}

				if(msg.email){
					$emailInput.addClass("header_form_input_error");
				}

			},
			error: function(){
				alert('Ошибка сервера');
			}
		});
	});
});