<?php
session_start();
?>
<?php
	require("include/connect.php");
?>
<?php
$review=$_POST['review'];
$name=$_POST['name'];
$id=$_POST['id'];


?>
<?php
$sql ="INSERT INTO unverified_review(name,review,id) values ('$name','$review','$id')";
$result=mysql_query($sql,$connection);
if (!$result)
	echo '0';
else
	echo '1';
mysql_close($connection);
?>


