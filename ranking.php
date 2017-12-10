<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>World Cup Table Ranking</title>
  <style>
body {
	font-family: 'Lato', Arial, sans-serif;
	color: #989c9b;
}

.container > header {
	margin: 0 auto;
	padding: 1em;
	text-align: center;
}

.container > header h1 {
  font-weight: 600;
	font-size: 3em;
	margin: 0;
}

.wrapper {
	line-height: 1.5em;
	margin: 0 auto;
	padding: 2em 0 3em;
	width: 90%;
	max-width: 2000px;
	overflow: hidden;
}

table {
    border-collapse: collapse;
    width: 100%;
    background: #fff;
}

th {
    background-color: #326295;
    font-weight: bold;
    color: #fff;
    white-space: nowrap;
}

td, th {
    padding: 1em 1.5em;
    text-align: left;
}

tbody th {
	background-color: #2ea879;
}
tbody tr:nth-child(2n-1) {
    background-color: #f5f5f5;
    transition: all .125s ease-in-out;
}
tbody tr:hover {
    background-color: rgba(50,98,149,.3);
}

td.rank {
	text-transform: capitalize;
}	
</style>
</head>
<body>
  	<div class="container">
			<header>
        <h1>Ranking persone piú votate</h1>
			</header>
			<div class="wrapper">
				<table>
					<thead>
						<tr>
							<th>Ranking</th>
							<th>Persona</th>
							<th>Punti</th>
						</tr>
					</thead>
					<tbody>
<?php
$connection = mysql_connect("localhost","root","")
	or die ("Errore! Riprova piú tardi! :) ");
$table = "essentia";
mysql_select_db($table,$connection)
	or die ("Errore! Riprova piú tardi! :) ");
//u mia bela madunina
$sql = "SELECT nome,cognome,punteggiototale FROM utente ORDER BY punteggiototale DESC";
$sal = mysql_query($sql);
$i = 1;
while ($riga=mysql_fetch_row($sal)){
	echo("<tr><td class='rank'>{$i}<td class='team'>{$riga[0]} {$riga[1]}</td><td class='points'>{$riga[2]}</td></tr>");
	$i = $i + 1;
}
?>
					</tbody>
				</table>
			</div>
		</div>
  
  
</body>
</html>


