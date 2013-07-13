<?php
/* 
 variabile globale
    Pentru conexiunea cu baza de date 
 
 */
$DATABASE_NAME="bd";
$SERVER_NAME="localhost";
$USERNAME="root";
$PASSWORD="";
$TITLE="My tickets";


$conexiune=mysql_connect("$SERVER_NAME","$USERNAME","$PASSWORD");
if(!$conexiune){
    die('Conexiunea nu a putut fi realizata!'.  mysql_error());
}
$DATABASE= mysql_select_db($DATABASE_NAME,$conexiune);
?>
