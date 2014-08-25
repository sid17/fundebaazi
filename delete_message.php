<?php
session_start();
?>
<?php
	require("include/connect.php");
?>
<?php
$id=$_POST['id'];
$val=$_POST['val'];
?>
<?php
if ($val==1)
{


			$sql2 ="DELETE FROM contact_us where id='$id'";
			$result2=mysql_query($sql2,$connection);
			if ($result2)
			{
				echo '1';
			}
			else
			{
				echo '0';
			}

}

mysql_close($connection);
?>


