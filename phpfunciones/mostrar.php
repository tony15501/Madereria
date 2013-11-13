<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_mostrar = "localhost";
$database_mostrar = "madereria";
$username_mostrar = "root";
$password_mostrar = "root";
$mostrar = mysql_pconnect($hostname_mostrar, $username_mostrar, $password_mostrar) or trigger_error(mysql_error(),E_USER_ERROR); 
?>