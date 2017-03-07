$(document).ready(function update() {
	$.post('http://nabilb.dijon.codeur.online/Tchat/Tchat/history', {chan:$('#selection').val()}, function(data) {
		$('#output').html(data);
	}).then(function() {
       	setTimeout(update, 200);
		});
});

/*$(document).ready(function () {
	$("#tchat").on('submit', function () {
			$.post('http://nabilb.dijon.codeur.online/Tchat/Tchat/add', {test:$('#selection').val()},function (){
				console.log('message posté');
			});
		});
});*/