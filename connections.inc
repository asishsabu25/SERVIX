<?php
$_servername="localhost";
$_username="root";
$_password="root";
$_database="insurance";
mysql_connect($_servername,$_username,$_password)or die(mysql_error());
mysql_select_db($_database)or die(mysql_error());
?>