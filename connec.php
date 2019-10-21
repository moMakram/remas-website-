<?php
$link = mysql_connect("localhost","root","")
	or die ("noconnection");
mysql_select_db("remas",$link);
$query = mysql_query("SET NAMES 'utf8'");
?>