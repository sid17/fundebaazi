<?php
session_start();
?>
<?php
	require("include/connect.php");
?>
<?php
$username=$_POST['username'];
$password=$_POST['password'];

?>
<?php
$result=mysql_query("SELECT * FROM users ",$connection);
if (!$result)
die("database query failed:".mysql_error());
$flag=0;
while ($row=mysql_fetch_array($result))
{
    
    if ($row['email']==$username && $row['password']==$password)
    $flag=1;
}
if ($flag==1)
{

 $_SESSION['user_id']=$username;
 echo 1;

}
else
{
 echo 0;
 
}
//5.close the coonection
mysql_close($connection);
?>


