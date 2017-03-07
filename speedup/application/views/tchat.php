<script type="text/javascript" src="http://nabilb.dijon.codeur.online/Tchat/assets/js/script.js"></script>
<body>
<div id="container">
	<h1>Welcome to Miaou</h1>

	<div id="body">
		<form method="post" action="http://nabilb.dijon.codeur.online/Tchat/Chan">
			<select name="channel" id="selection">
				<option value="General" selected>General</option>
					<?php
						foreach ($salons as $salon) {
							echo '<option value="'.$salon['nom_discussion'].'">' .$salon['nom_discussion']. '</option>';
						}
					?>
			</select>
			<input type="submit" value="Nouveau salon">
		</form>
		<form method="post" id="tchat" action="http://nabilb.dijon.codeur.online/Tchat/Tchat/add">
			<fieldset id="output"></fieldset>
			<fieldset>
				<legend><?= $this->session->user; ?></legend>
				<textarea placeholder="Message" name="msg" rows="4" cols="200" style="resize: none;"></textarea>
			</fieldset>
			<input type="submit" value="Envoyer">
		</form>
	</div>
</div>

</body>