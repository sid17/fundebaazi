<?php
require("include/connect.php");
?>
<?php
ob_start();
?>
<?php

$id=$_POST['id'];
$name=$_POST['username'];

$cut=0;
$sql ="Select fromemail,foremail,app_cl,app_ad from conversations where id=".$id;

$retval = mysql_query( $sql, $connection );
if(! $retval )
{


echo 0;

 }
else 
{


while ($row=mysql_fetch_array($retval))
{

	if ($row['app_cl']==1 && $row['app_ad']==1)
	{

	echo 0;

	}

  else if ($row['fromemail']==$name)
	{
		echo $row['foremail'];
	}
 else if  ($row['foremail']==$name) 
	{
		echo $row['fromemail'];
	}
else
	{
		echo 0;
	}
   
}

	
}
mysql_close($connection);
?>

