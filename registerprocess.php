<?php
require("include/connect.php");
?>
<?php
ob_start();
?>
<?php

$email=$_POST['email'];
$altemail=$_POST['altemail'];
$password=$_POST['password'];

$sql ="INSERT INTO users(email, altemail, password) values ('$email','$altemail','$password')";
$retval = mysql_query( $sql, $connection );
if(! $retval )
{
  
$mystring =mysql_errno();

if ($mystring == 1062) 
{
    header("Location:register.php?invalid=1");
    //echo ("true");
} 
else 
{
	header("Location:index.php?register=0");
}
}
else
{
header("Location:index.php?register=1");
}
mysql_close($connection);
?>
<?php
ob_flush();
?>

