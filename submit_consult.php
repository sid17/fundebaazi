<?php
    // Configuration - Your Options
      $allowed_filetypes = array('.jpg','.gif','.bmp','.png','.pdf','.doc','.docx'); // These will be the types of file that will pass the validation.
      $max_filesize = 524288; // Maximum filesize in BYTES (currently 0.5MB).
      $upload_path = 'files/'; // The place the files will be uploaded to (currently a 'files' directory).
      $filename = $_FILES['userfile']['name']; // Get the name of the file (including file extension).
      $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); // Get the extension from the filename.
      $flag_check=0;
    // Check if the filetype is allowed, if not DIE and inform the user.
      if (!($ext==" " || $ext==''))
      {
         $flag_check=1;
     
        if(!in_array($ext,$allowed_filetypes))
        {
          echo $ext;
          header('Location: user_bio.php?id='.$_POST['id'].'&query=0');
          die('The file you attempted to upload is not allowed.');
        }
        
   
     // Now check the filesize, if it is too large then DIE and inform the user.
        if(filesize($_FILES['userfile']['tmp_name']) > $max_filesize)
        {
          header('Location: user_bio.php?id='.$_POST['id'].'&query=0');
          die('The file you attempted to upload is too large.');
        }
   
     // Check if we can upload to the specified path, if not DIE and inform the user.
        if(!is_writable($upload_path))
        {

          header('Location: user_bio.php?id='.$_POST['id'].'&query=0');
          die('You cannot upload to the specified directory, please CHMOD it to 777.');
        }
        
   
     // Upload the file to your specified path.
        if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload_path . $filename))
           echo 'Your file upload was successful, view the file <a href="' . $upload_path . $filename . '" title="Your File">here</a>'; // It worked.
        else
        {
           header('Location: user_bio.php?id='.$_POST['id'].'&query=0');
           die ('There was an error during the file upload.  Please try again.');
        }  // It failed :(.
      }
 
?>
<?php
require("include/connect.php");
?>
<?php
require("include/sendmail.php");
?>
<?php
require("include/sendmail_w.php");
?>
<?php
session_start();
$foremail='';
$forid=$_POST['id'];
$fromemail=$_SESSION['user_id'];//$_POST['email'];
$fromname=$_POST['firstname'];
$fromphone=$_POST['phone'];
echo $fromphone;
$querytype=$_POST['select'];
$stdate = date('Y-m-d H:i:s');
$message=$_POST['message'];
$result=mysql_query("SELECT email FROM data_base where id=".$forid,$connection);
if (!$result)
{
header('Location: user_bio.php?id='.$forid.'&query=0');
  echo 1;
die("database query11 failed:".mysql_error());
}
while ($row=mysql_fetch_array($result))
{
   $foremail=$row['email']; 
}
echo $foremail;
echo $fromemail;

$sql ="INSERT INTO conversations(foremail,fromemail,fromname,forid,fromphone,querytype,stdate) values ('$foremail','$fromemail','$fromname','$forid','$fromphone','$querytype','$stdate')";
echo $sql;
$retval = mysql_query( $sql, $connection );
if(! $retval )
{
header('Location: user_bio.php?id='.$forid.'&query=0');
  echo 2;
die ('Query 12failed');
}
else 
{
echo "last query id";
$last=mysql_insert_id();
echo $last;
$sql1='UPDATE data_base SET curr_requests =curr_requests + 1 where id='.$forid;
echo $sql1;
$retval1 = mysql_query( $sql1, $connection );
if(! $retval1)
{
   die ('Query 13 failed');
   echo 3;
   header('Location: user_bio.php?id='.$forid.'&query=0');
}
else
{
//echo sendmail("hello","siddhantmanocha1994@gmail.com",1,"IITBombay.png");  // file sendmail.php is included
/* Post email if all other steps proceed just fine */
echo '<br><br><br>';
if ($flag_check==1)
{
  $response=sendmail($message,$foremail,$querytype,$filename,$last);
}
else
{
  $response=sendmail_w($message,$foremail,$querytype,$filename,$last);
}

if ($response==1)
{
  header('Location: user_bio.php?id='.$forid.'&query=1');
  echo 4;
  echo $response;
}
else
{
  echo '<br><br><br>';
  echo 5;
  //echo $response;
  $sql22='DELETE FROM `conversations` WHERE id='.$last;
  $ret=mysql_query( $sql22, $connection );


  $sql15='UPDATE data_base SET curr_requests =curr_requests - 1 where id='.$forid;
$retval15 = mysql_query( $sql15, $connection );
  //echo $ret;
 header('Location: user_bio.php?id='.$forid.'&query=0');
}

}
}
mysql_close($connection);
?>







