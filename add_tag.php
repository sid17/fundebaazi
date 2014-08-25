<?php
require("include/connect.php");
?>
<?php
if (isset($_POST['data'])&& isset($_POST['column']))
{
	echo ($_POST['data']);

	$result=mysql_query($_POST['data'],$connection);
	if (!$result)
	{
		die("database query failed:".mysql_error());
	}
	else
	{	
		$result1=mysql_query("ALTER TABLE `data_base` ADD (`".$_POST['column']."` int(1) DEFAULT 0)",$connection);
		if (!$result1)
		{
			die("database query failed:".mysql_error());
		}
		else
		{
			echo ("successfully updated");
		}	
		
	}
}
else 
{
	echo ("not set");
}
//$result=mysql_query("ALTER TABLE `data_base` ADD (".siddhant." int(1) DEFAULT 0)",$connection);
?>


