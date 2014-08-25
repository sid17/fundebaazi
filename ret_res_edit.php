<?php
require("include/connect.php");
?>
<?php
    if (isset($_POST['string']))
    {
	

	$result=mysql_query($_POST['string'],$connection);
	if (!$result)
		die("database query failed:".mysql_error());
	
$json = array();
	while($row = mysql_fetch_array($result))     
 	{
    		$json[]= array(
       			'user' => $row['name'],
     			'email' => $row['email'],
				'id' => $row['id'],
				'image' => $row['image'],
			);
	}
	
	$jsonstring = json_encode($json);
 	echo $jsonstring;

	
	//while ($row=mysql_fetch_array($result))
	//{
	    
	 //   echo ($row['id']);
	   
	//}
	
	mysql_close($connection);
	
        
    }
    else
    {
        echo "cannot recieve data";
    }
?>