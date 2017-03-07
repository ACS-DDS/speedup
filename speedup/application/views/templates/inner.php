<?php
	foreach ($content as $info) {?>
	
	<fieldset>
		<legend>
			<?= $info['pseudo']; ?>
		</legend>
		<output>
			<?= $info['contenu']; ?>
		</output>
	</fieldset>
<?php }
?>