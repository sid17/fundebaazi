<?php
require("include/connect.php");
?>
<?php
    
$string="select * from data_base limit 10";
$sql123 ="SELECT COLUMN_NAME FROM information_schema.columns WHERE table_name = 'data_base' AND COLUMN_TYPE = 'int(1)'";
$retval123 = mysql_query( $sql123,$connection);
$stack = array();

           while($row123  = mysql_fetch_array($retval123))
            {
              
              $z=$row123["COLUMN_NAME"];
              array_push($stack, $z);
              
            }




print_r($stack);

$result=mysql_query($string,$connection);
  if (!$result)
    die("database query failed:".mysql_error());
  
$json = array();
  while($row = mysql_fetch_array($result))     
  {

           $tags="";
           
foreach ($stack as &$value) 
{
    if ($row[$value]==1)
      {
        $tags=$tags." ".$value.",";
      }
}

//echo $tags."<br>";

        $json[]= array(
            'user' => $row['name'],
          'summary' => $row['summary'],
      'image' => $row['image'],
      'id' => $row['id'],
      'max'=>$row['max_requests'],
      'curr'=>$row['curr_requests'],
      'tags'=>$tags,


          );
  }
  
  $jsonstring = json_encode($json);
  echo $jsonstring;
  mysql_close($connection);
  

    
?>