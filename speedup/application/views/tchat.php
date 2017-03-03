<body>

<div id="container">
	<h1>Welcome to Chat Malin</h1>

	<div id="body">
		<select>
			<option>Général</option>
		</select>
		<form method="post" action="">
			<fieldset>
				<legend><?= $current;?></legend>
				<textarea placeholder="Message" name="msg" rows="4" cols="50" style="resize: none;"></textarea>
			</fieldset>
			<input type="submit" class="valider" value="Envoyer">
		</form>
	</div>
</div>

</body>