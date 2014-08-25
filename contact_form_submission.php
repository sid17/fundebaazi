<?php
require("include/connect.php");
?>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$ph=$_POST['phone'];
$msg=$_POST['msg'];


$sql ="INSERT INTO contact_us(name, email, phone,message) values ('$name','$email','$ph','$msg')";
$retval = mysql_query( $sql, $connection );
if(! $retval )
{
 echo (0);
}
else
{
echo (1);
}
mysql_close($connection);
?>

