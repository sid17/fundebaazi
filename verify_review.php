<?php
session_start();
?>
<?php
	require("include/connect.php");
?>
<?php
$id=$_POST['id'];
$val=$_POST['val'];
$auto=$_POST['auto'];
?>
<?php
if ($val==1)
{


			$sql2 ="DELETE FROM unverified_review where auto=$auto";
			$result2=mysql_query($sql2,$connection);
			if ($result2)
			{
				echo '1';
				//echo $sql2;
			}
			else
			{
				echo '0';
			}

}
else
{
$sql ="select * from unverified_review where auto=$auto";
$result=mysql_query($sql,$connection);
if (!$result)
	echo '0';
	else
	{
			while ($row=mysql_fetch_array($result))
		{
		    $name=$row['name'];
		    $review=$row['review'];
			$id=$row['id'];
		    $sql1 ="INSERT INTO verified_review(name,review,id) values ('$name','$review','$id')";
			$result1=mysql_query($sql1,$connection);
			$sql2 ="DELETE FROM unverified_review where auto=$auto";
			$result2=mysql_query($sql2,$connection);
			if ($result1 && $result2)
			{
				echo '1';
			}
			else
			{
				echo '0';
			}
			
		}

	}
}
mysql_close($connection);
?>


