<?php
	foreach ($content as $info) {?>
	
	<fieldset>
		<legend>
			<img src="<?= 'https://www.gravatar.com/avatar/'.md5(strtolower(trim($info['email'])))."?s=80&d=mm&r=g"; ?>" alt="" style="width: 15px;height: 15px;"/>
			<?= $info['pseudo']; ?>
		</legend>
		<output>
			<?= $info['contenu']; ?>
		</output>
		<br />
		<output style="font: 9px/15px normal Helvetica, Arial, sans-serif !important;">
			Message posté le <?= $info['jour']; ?> à <?= $info['heure']; ?>
		</output>
	</fieldset>
<?php }
?>