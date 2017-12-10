<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Essentia</title>
</head>
<body>
<?php
$connection = mysql_connect("localhost","root","")
	or die ("Errore! Riprova piú tardi! :) ".mysql_error());
mysql_select_db("essentia",$connection)
	or die ("Errore! Riprova piú tardi! :) ".mysql_error());
// giovane giovane fuoriclasse.
$ip = $_SERVER['REMOTE_ADDR'];
$password = $_POST['password'];
$password = mysql_real_escape_string($password);
$username = $_POST['username'];
$username = mysql_real_escape_string($username);
$get_crypted_password = "SELECT password_2 FROM utente WHERE username LIKE '{$username}'";
$crypted_password = mysql_query($get_crypted_password) or die("Errore! Riprova piú tardi! :)".mysql_error());
$cry = strval($crypted_password);
$pass = md5($password);
//vogliono etichettarmi, anche se poi non riescono a capirmi.
$prendo_ip = "SELECT ip FROM utente WHERE username LIKE {$username}";
$aipi = mysql_query($prendo_ip);
$ip = $_SERVER['REMOTE_ADDR'];
if ($ip != $aipi) { 
	//accesso con ip diverso dall'ultima volta
	$nuovo_ip = "UPDATE utente SET ip = {$ip} WHERE username LIKE {$username}";
	$facendo_questa_cosa_hahahaha = mysql_query($nuovo_ip);
}
$query = "SELECT COUNT(*) as riuscito FROM utente WHERE username LIKE '{$username}' AND password_2 LIKE '{$pass}'";
$login = mysql_query($query) or die("Errore! Riprova piú tardi!".mysql_error());
$data = mysql_fetch_assoc($login);
// castle on the hill
	if ($data['riuscito'] > 0) {
	//login riuscito
	mysql_close($connection);
	$cookie_name  = "session";
	$cookie_value = $username;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
	header('Location: home.php');	
}else{
	//login sbagliato
	echo("Riprova, dati sbagliati! :)");
}
	

?>
</body>
</html>