$(document).ready(function(){
	$('#main_ajax_but').click(function(){
		console.log($("input[name='name']"));
		$.ajax({
			method: 'post',
			url: 'mail.php',
			data: {
				name: $("input[name='name']").val(),
				phone: $("input[name='phone']").val(),
				city: $("input[name='city']").val()
			}
		});
	});
});