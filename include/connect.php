<?php
//define("DB_SERVER","50.62.209.114:3306");
//define("DB_USER","smanocha");
//define("DB_PASSWD","counselling@123");
//define("DB_NAME","counsellor");

define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASSWD","qwerty");
define("DB_NAME","counsellor");
$connection=mysql_connect(DB_SERVER,DB_USER,DB_PASSWD);
if (!$connection)
{
    die("Database connection failed:".mysql_error());
}
$db_select=mysql_select_db(DB_NAME,$connection);
if (!$db_select)
{
    die("Database connection failed:".mysql_error());
}
?>
