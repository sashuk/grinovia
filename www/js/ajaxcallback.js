$(document).ready(function(){
	$('.form_submit').click(function(){
		if ($(this).attr('typebut') == 'callback') {
			// Callback
			var name 	= $('[name="callback_name"]').val();
			var phone	= $('[name="callback_phone"]').val();
			var email	= $('[name="callback_email"]').val();
			var type	= 'CALLBACK';
			
			var subreq	= 'type=' + encodeURIComponent(type) + '&name=' + encodeURIComponent(name) + '&phone=' + encodeURIComponent(phone) + '&email=' + encodeURIComponent(email);
		} else if ($(this).attr('typebut') == 'write_to_us') {
			// Write to us
			var email	= $('[name="form_callback_email"]').val();
			var message	= $('[name="form_write_to_us_message"]').val();
			var type	= 'WRITE_TO_US';
			
			var subreq	= 'type=' + encodeURIComponent(type) + '&email=' + encodeURIComponent(email) + '&message=' + encodeURIComponent(message);
		}
	
		var request = '/ajax/callback?' + subreq;
		$.get(request, function( data ) {
			if (type = 'WRITE_TO_US') {
				alert("Спасибо, мы Вам ответим как можно скорее!");
				$('.form_close').trigger('click');
			} else if (type = 'ORDER') {
				alert("Спасибо, мы Вам ответим как можно скорее!");
				$('.form_close').trigger('click');
			} else  {
				alert("Спасибо, наш менеджер перезвонит Вам как можно скорее!");
				$('.form_close').trigger('click');
			}
			
			$('[name="write_to_us_name"]').val('');
			$('.form_order_text').val('');
		});
	});
});