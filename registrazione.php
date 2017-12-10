<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Essentia.</title>
</head>

<body>
<?php
$connection = mysql_connect("localhost","root","")
	or die ("Errore! Riprova piú tardi! :) ");
$table = "essentia";
mysql_select_db($table,$connection)
	or die ("Errore! Riprova piú tardi! :) ");
//sick luke , sick luke
$ip = $_SERVER['REMOTE_ADDR'];
$password = $_POST['password'];
$password = mysql_real_escape_string($password);
$username = $_POST['username'];
$username = mysql_real_escape_string($username);
$nome = $_POST['nome'];
$nome = mysql_real_escape_string($nome);
$email = $_POST['email'];
$email = mysql_real_escape_string($email);
$cognome = $_POST['cognome'];
$cognome = mysql_real_escape_string($cognome);
$genere = $_POST['genere'];
$genere = mysql_real_escape_string($genere);
$nascita = $_POST['nascita'];
$nascita = mysql_real_escape_string($nascita);
$scuola = $_POST['scuola'];
$scuola = mysql_real_escape_string($scuola);
$classe = $_POST['classe'];	
$classe = mysql_real_escape_string($classe);
$crypted_password = md5($password);
$query = "INSERT INTO utente(username, password_2, nome , cognome, ip , nascita, classe, scuola, genere, email,punteggiototale) VALUES ('{$username}','{$crypted_password}' , '{$nome}', '{$cognome}', '{$ip}', '{$nascita}', '{$classe}', '{$scuola}', '{$genere}', '{$email}',0)";
$ris = mysql_query($query) or die("Errore! Riprova piú tardi! :)".mysql_error());
// CIAO, MI CHIAMO LUIS!
mysql_close($connection);
header('Location: home.php');	

?>
</body>
</html>
