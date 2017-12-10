<?php
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
// spendo 'sti soldi, tanto poi li rifaró
$link = mysql_connect('localhost', 'root', '');
mysql_select_db('essentia',$link);
 
$username = preg_replace('/[^a-z0-9_]+/i','',array_shift($request));
echo $username;
$sq = "SELECT punteggiototale FROM utente WHERE username LIKE '{$username}'";
$punt = mysql_query($sq) or die(mysql_error());
$pun = mysql_fetch_row($punt);
$punteggionuovo = $pun[0] + 1;
$sql = "UPDATE utente SET punteggiototale = {$punteggionuovo} WHERE username LIKE '{$username}'";
$setta = mysql_query($sql) or die(mysql_error());
mysql_close($link);
?>