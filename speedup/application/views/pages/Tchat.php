<!DOCTYPE html>
<html>
<head>
	<title>Tchat</title>
</head>
<body>
<ul class="chat">

</ul>
<input type="text" id="message" placeholder="your message"/>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var discussion = 'general';

		var register = function() {
			var nom = prompt("Votre nom ?");
			if (nom) {
				$.get(
					'ajax.php',
					{nom: nom},
					function (reponse) {
						get(true);
					}
				);
			} else {
				register();
			}
		}

		var get = function(tout) {
			var donnees = {get: ''};
			if (!tout) donnees.new = '';
			$.get(
				'ajax.php',
				donnees,
				function (reponse) {
					if (reponse == 2) register();
					else $("ul.chat").append(reponse);
				}
			);
		}

		var say = function(message) {
			$.get(
				'ajax.php',
				{message: message},
				function (reponse) {
					if (reponse == 2) register();
					else $("ul.chat").append(reponse);
				}
			);
		}

		$("#message").on('keyup', function(e) {
			if (e.which == 13) {
				say($(this).val());
			}
		})

		get(true);

		var refresh = function() {
			get(false);
		}
		setInterval(refresh, 1500);

	});
</script>
</body>
</html>