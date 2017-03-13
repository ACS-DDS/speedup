<!DOCTYPE html>
<html>
<head>
	<title>Mon tchat</title>
	<base href='http://faridl.dijon.codeur.online/Lighton/Lighton/CodeIgniter-3.1.3/'>
</head>
<body>

<?php 
$date=date_create();
date_timestamp_set($date,microtime(true));
?>

<p> Mon tchat</p>

<form method="get">
	<label for="pseudo">pseudo</label> : <input type="text" name="pseudo"><br><br>
  	<label for="message">message</label> : <input type="text" name="message">
	<input type="text" name="date" value="<?php echo date_format($date,"Y-m-d H:i:s"); ?>"><br><br>
	<label for="discussion">discussion</label> : <input type="text" name="discussion" placeholder="general"><br><br>
	<input type="submit" name="envoyer">
</form>
<br />

</body>
</html>