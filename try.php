<?php
$j=1;
$str1='';
$str2='';
 //
foreach ($_POST as $key => $value)
{
	if ($key!='tags')
	{
	$str1=$str1.$key.",";
	$str2=$str2."'".$value."',";
	}

  //echo "{$key} = {$value}\r\n:{$j}";
  //$j=$j+1;
}
$str1 = rtrim($str1, ',');
$str2= rtrim($str2, ',');
echo $str2;
echo $str1;
$sql ="INSERT INTO data_base(".$str1.") values (".$str2.")";

?>