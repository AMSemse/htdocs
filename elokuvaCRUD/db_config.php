<?php
/**
 * Bookstore
 */
//declare the database variables

$db_host = 'localhost';
$db_name = 'nuokkulanelokuvat';
$db_username = 'root';
$db_password = '';

//create the Data Source Name
$dsn = "mysql:host=$db_host;dbname=$db_name";


enum kunto{
    case T1;
    case T2;
    case H3;
    case H4;
    case K5;
}

try {
  $db_connection = new PDO($dsn, $db_username, $db_password);
} catch(Exception $e) {
  echo "There was a failure - " . $e->getMessage();
}
?>