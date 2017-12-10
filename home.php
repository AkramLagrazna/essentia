<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Essentia.</title>
      <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet prefetch' href='https://googledrive.com/host/0B1RR6fhjI2QROGt0MTFoVkhMdUk/fonts.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
      <link rel="stylesheet" href="css2/style.css">
<style type="text/css">
  iframe {
    /* pump my bici */
    width: 89vw;
    height: 31.25vw;
   }
	#impostazioni {
		display: none;
	}
	#cerca {
		display: none;
	}
	#ciaone {
		width: 89vw;
		height: 49.5vw;
	}
</style>
</head>
<body>
<script type="text/javascript">

function domande(){
  document.getElementById("domande").style.display = 'block';
  document.getElementById("impostazioni").style.display = 'none';
  document.getElementById("cerca").style.display = 'none';
}
function impostazioni(){
  document.getElementById("domande").style.display = 'none';
  document.getElementById("impostazioni").style.display = 'block';
  document.getElementById("cerca").style.display = 'none';
}

</script>
  <span class="bckg"></span>
<header>
  <h1>HomePage</h1>
  <nav>
    <ul>
      <li>
        <a href="javascript:domande();" data-title="Domande"> Domande</a>
      </li>
      <li>
        <a href="javascript:impostazioni();" data-title="Profilo">Profilo</a>
      </li>
      <li>
        <a href="#" data-title="Essentia.">Compagni</a>
      </li>

<?php
if (isset($_COOKIE["session"])) { 
	//aha that's my sh*t
	$username = $_COOKIE["session"];
}else{
	header('Location: index.php');
}
$connection = mysql_connect("localhost","root","")
	or die ("Errore! Riprova piú tardi! :) ".mysql_error());
mysql_select_db("essentia",$connection)
	or die ("Errore! Riprova piú tardi! :) ".mysql_error());
$get_email = "SELECT email, scuola FROM utente WHERE username LIKE '{$username}'";
$email = mysql_query($get_email) or die("Errore! Riprova piú tardi! :)".mysql_error());
$fila = mysql_fetch_row($email);
$get_punteggio = "SELECT punteggiototale, email FROM utente WHERE username LIKE '{$username}'";
$punteggio = mysql_query($get_punteggio) or die("Errore! Riprova piú tardi! :)");		
$cista = mysql_fetch_row($punteggio);
//giovane giovane fuoriclasse, ricordo in tasca non c'era niente.
$get_scuola = "SELECT scuola FROM utente WHERE username LIKE '{$username}'";
$scuola = mysql_query($get_scuola) or die("Errore! Riprova piú tardi! :)".mysql_error());
$fola = mysql_fetch_row($scuola);
$get_classe = "SELECT classe FROM utente WHERE username LIKE '{$username}'";
$classe = mysql_query($get_classe) or die("Errore! Riprova piú tardi! :)".mysql_error());
$fala = mysql_fetch_row($classe);
$get_compagni = "SELECT nome FROM utente WHERE scuola LIKE '{$fola[0]}' AND classe LIKE '{$fala[0]}'";
$compagni = mysql_query($get_compagni) or die("Errore! Riprova piú tardi!
:)".mysql_error());
$num = 0;
while ($riga=mysql_fetch_row($compagni)){
	echo('<li>');
	$agg = "<a href='#' data-title='{$riga[0]}'> {$riga[0]}</a>";
	echo $agg;
	echo('</li>');
}
echo("</ul>  </nav></header><main><div class='title'><h2>Essentia.</h2>");
echo("<a href='#'>Ciao {$username}!</a>");
echo("</div>");
echo("<div id='impostazioni'>");
echo("<center><p><h3>Profilo </h3></p><br><br><br><strong>Username : {$username} <br> <br><br><br>");
echo("Mail : {$fila[0]}");
echo("<br><br><br><br>");
if ($cista[0] == '') {
	$cista[0] = 0;
}
echo("Punteggio : {$cista[0]}");
echo("</strong></center></div><div id='domande'><iframe id='ciaone' src='slideshow.php'></iframe>");
mysql_close($connection);
?>

</div>
 </main>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script  src="js/index.js"></script>
</body>
</html>
