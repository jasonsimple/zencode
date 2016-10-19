<?php
$link=mysql_connect('172.17.0.2','jason','123123');
if($link) echo "<h1> Congratulations! connected</h1>";
mysql_close();
?>

