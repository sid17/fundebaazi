<?php
require("include/connect.php");
?>
<?php
$str1='';
$str2='';
$id='';
 foreach ($_POST as $key => $value)
{
  echo $key;
  if ($key=='id')
  {
  $id=$value;
  }
  else
  {
  if ($key!='tags')
  {

    if ($key=='bio' || $key=='summary'||  $key=='email')
    {
      $value=mysql_real_escape_string($value);
    }

  $str1=$str1.$key."='".$value."',";
  
  }
}


  

  //echo "{$key} = {$value}\r\n:{$j}";
  //$j=$j+1;
}
$str1 = rtrim($str1, ',');

$sql ="update data_base set ".$str1 ."where id=".$id;

echo $sql;


$retval = mysql_query( $sql, $connection );
if(! $retval )
{
 header("Location:admin_edit.php?valid=0");
}
else 
{
header("Location:admin_edit.php?valid=1");
}



mysql_close($connection);
?>




