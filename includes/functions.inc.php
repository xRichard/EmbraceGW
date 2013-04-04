<?php
//File containing the commonly used functions.

//MySQL connect function
function connect_mysql()
    {
        require_once('dbconfig.inc.php');
        $link = mysql_connect($mysql_host.':'.$mysql_port, $mysql_user,$mysql_password);
        mysql_select_db($mysql_db, $link) or die('Could not select database.');
        return $link;
    }
?>