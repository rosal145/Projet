<?php
$con = mysql_connect("localhost","root","");
$db = mysql_select_db("projeto", $con);

if(!$con) {
    die("Não foi possível conectar ao banco de dados; " . mysql_error());
}

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_cliente=utf8');
mysql_query('SET character_set_results=utf8');
?>