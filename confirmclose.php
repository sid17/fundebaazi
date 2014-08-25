<?php
require("include/connect.php");
?>
<?php
require("include/mail_review.php");
?>
<?php
require("include/closing_mail.php");
?>
<?php
$id=$_POST['id'];
$name=$_POST['username'];
$sql ="Select fromemail,foremail,app_cl,app_ad,forid from conversations where id=".$id;
$retval = mysql_query( $sql, $connection );
if(! $retval )
{
echo 0;
}
else 
{
while ($row=mysql_fetch_array($retval))
{
  if ($row['fromemail']==$name)
  {
    $toupdate='app_cl';
    $final=$row['app_ad'];
    $forid=$row['forid'];
    $fromemail=$row['fromemail'];
    $closingmail=$row['foremail'];
  }
 else if  ($row['foremail']==$name) 
  {
    $toupdate='app_ad';
    $final=$row['app_cl'];
    $forid=$row['forid'];
    $fromemail=$row['fromemail'];
   $closingmail=$row['fromemail'];
  }
else
  {
    $toupdate='null';
  }
   
}
}

if ($toupdate=='app_cl' || $toupdate=='app_ad')
{
//echo $toupdate;
  //echo 1;
  if ($final==1)
  {
  $sql ="Update conversations set ".$toupdate."=1,enddate='".date('Y-m-d')."' where id=".$id;
  }
  else
  {
    $sql ="Update conversations set ".$toupdate."=1 where id=".$id;
  }
  //echo $sql;
  $retval = mysql_query( $sql, $connection );
  if (!$retval)
  {
    echo 0;
  }
  else
  {
    echo 1;
    closing_mail($closingmail);
    if ($final==1)
    {

    $sql1='UPDATE data_base SET curr_requests =curr_requests - 1 where id='.$forid;
    //echo $sql1;
    $retval1 = mysql_query( $sql1, $connection );
    mail_review($fromemail,$forid);

    }
  }
}
else
{
  echo 0;
}
mysql_close($connection);
?>






