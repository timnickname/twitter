<?php
$SERVER = 'localhost';
$USER = 'root';
$PASS = '';
$DATABASE = 'twitter';

if (!($mylink = mysql_connect( $SERVER, $USER, $PASS, $DATABASE))) {
    echo  "<h3>Sorry, could not connect to database.</h3><br/>
    Please contact admin(at)domain.com for more help\n";
    exit;
}
mysql_select_db($DATABASE);
?>
