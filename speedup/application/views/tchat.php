<script type="text/javascript" src="http://nabilb.dijon.codeur.online/Tchat/assets/js/script.js"></script>
<body>
<div id="container">
	<h1>Welcome to Miaou <?= $this->session->user;?></h1>

	<div id="body">
		<form method="post" action="http://nabilb.dijon.codeur.online/Tchat/Chan">
			<select name="chan" id="selection">
				<option value="General" selected>General</option>
					<?php
						foreach ($salons as $salon) {
							echo '<option value="'.$salon['nom_discussion'].'">' .$salon['nom_discussion']. '</option>';
						}
					?>
			</select>
			<input type="submit" value="Nouveau salon">
		</form>
		<form method="post" id="tchat">
			<output id="show"></output>
			<fieldset>
				<legend><?= $this->session->user; ?></legend>
				<textarea placeholder="Message" id="msg" name="msg" rows="4" cols="150" style="resize: none;"></textarea>
			</fieldset>
			<input type="submit" value="Envoyer">
		</form>
		<input type="button" id="logout" value="Déconnexion">
		<fieldset>
			<legend>infos</legend>
			<img src="<?php echo $avatar; ?>" alt="" style="width: 50px;height: 50px;"/>
			<input type="button" id="maj" value="Modifier son profil">
		</fieldset>
		<fieldset>
			<legend>en ligne</legend>
			<output id="logged"></output>
		</fieldset>
	</div>
</div>

</body>