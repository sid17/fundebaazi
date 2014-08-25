<?php
require("include/connect.php");
?>
<?php
ob_start();
?>
<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql ="INSERT INTO users(username, firstname, lastname,email,password) values ('$username','$firstname','$lastname','$email','$password')";
$retval = mysql_query( $sql, $connection );
if(! $retval )
{
  //header("Location:index.php?register=0");
	//echo('Could not connect: ' . mysql_error());

$mystring =mysql_errno();
//echo $mystring;
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

