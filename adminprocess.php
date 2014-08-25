<?php
session_start();
?>
<?php
$username=$_POST['email'];
$password=$_POST['password'];
?>
<?php
if ($username=='admin@fundebaazi' &&  $password=='DOPAtharru17')
{
 $_SESSION['admin_id']=$username;
 header("Location:adminlogin.php?q=1");
}
else
{
	header("Location:adminlogin.php?q=0");
}
//5.close the coonection

?>


