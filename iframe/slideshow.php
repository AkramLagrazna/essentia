<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Gummy slider</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="nav">
	<h1>Essentia.</h1>
</nav>
<div class="loading">
	Caricamento...
</div>
<style>
.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
</style>
<div class="slider">
	<div class="slider-inner">
		<div class="slide active">
');
<?php
if (isset($_COOKIE["session"])) { 
	//aha that's my sh*t
	$username = $_COOKIE["session"];
}else{
	header('Location: index.php');
}
$connection = mysql_connect("localhost","root","")
	or die ("Errore! Riprova piú tardi! :) ");
$table = "essentia";
mysql_select_db($table,$connection)
	or die ("Errore! Riprova piú tardi! :) ");
//we watched the sunset, over the castle on the hill!
$get_domande = "SELECT domanda FROM domandeshow";
$domand = mysql_query($get_domande) or die("Errore! Riprova piú tardi! :)".mysql_error());
$get_scuola = "SELECT scuola FROM utente WHERE username LIKE '{$username}'";
$scuola = mysql_query($get_scuola) or die("Errore! Riprova piú tardi! :)".mysql_error());
$fola = mysql_fetch_row($scuola);
$get_classe = "SELECT classe FROM utente WHERE username LIKE '{$username}'";
$classe = mysql_query($get_classe) or die("Errore! Riprova piú tardi! :)".mysql_error());
$fala = mysql_fetch_row($classe);
$get_compagni = "SELECT nome FROM utente WHERE scuola LIKE '{$fola[0]}' AND classe LIKE '{$fala[0]}'";
$compagni = mysql_query($get_compagni) or die("Errore! Riprova piú tardi!
:)".mysql_error());
//u
echo'Chi é il piú simpatico della classe?';
$riga = mysql_fetch_row($compagni);
$array = array();
for ($i= 1; $i = $riga; $i++){
	$array[$i] = $riga[0];
}
$nome1 = $array[array_rand($array,1)];
$nome2 = $array[array_rand($array,1)];
$nome3 = $array[array_rand($array,1)];
echo("<button id='{$nome1}' onclick='#' class='btn'>{$nome1}</button>");
echo("<button id='{$nome2}' onclick='#' class='btn'>{$nome2}</button>");
echo("<button id='{$nome3}' onclick='#' class='btn'>{$nome3}</button>");
echo '</div>';
//		<div class="slide">		Piú simpatico della classe?
//2</div>
	//	<div class="slide">DOMANDA 3</div>
	//	<div class="slide">DOMANDA 4</div>
	//	<div class="slide">DOMANDA 5</div>
	//	<div class="slide">DOMANDA 6</div>
	//	<div class="slide">DOMANDA 7</div>
	//	<div class="slide">DOMANDA 8</div>
echo('
</div>
	<nav class="slider-nav">
		<div class="active"></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</nav>
</div>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/index.js"></script>

</body>
</html>');
	mysql_close($connection);
?>