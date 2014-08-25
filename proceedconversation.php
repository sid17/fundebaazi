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
      die('The file you attempted to upload is not allowed.');
 
   // Now check the filesize, if it is too large then DIE and inform the user.
   if(filesize($_FILES['userfile']['tmp_name']) > $max_filesize)
      die('The file you attempted to upload is too large.');
 
   // Check if we can upload to the specified path, if not DIE and inform the user.
   if(!is_writable($upload_path))
      die('You cannot upload to the specified directory, please CHMOD it to 777.');
 
   // Upload the file to your specified path.
   if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload_path . $filename))
         echo 'Your file upload was successful, view the file <a href="' . $upload_path . $filename . '" title="Your File">here</a>'; // It worked.
      else
         die ('There was an error during the file upload.  Please try again.'); // It failed :(.


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
$message=$_POST['message'];
$id=$_POST['mailto_id'];
$name=$_POST['mailto'];
$finemail='';
$sql ="Select fromemail,foremail,querytype from conversations where id=".$id;
$retval = mysql_query( $sql, $connection );
if(! $retval )
{
  die("Could not connect to the database");
}
else 
{


while ($row=mysql_fetch_array($retval))
{
  if ($row['fromemail']==$name)
  {
   $finemail=$row['foremail'];
   $query=$row['querytype'];
  }
 else if  ($row['foremail']==$name) 
  {
    $finemail=$row['fromemail'];
    $query=$row['querytype'];
  }
}
echo $message;
echo $query;
echo $id;
echo $finemail;
echo $filename;

if ($flag_check==1)
{
  echo 1;

  $response=sendmail($message,$finemail,$query,$filename,$id);
}
else
{
  echo 2;
  $response=sendmail_w($message,$finemail,$query,$filename,$id);
}
//$response=sendmail($message,$finemail,$query,$filename,$id);
if ($response==1)
{


//echo $response;
//echo "hello";
  header('Location: conversation.php?id='.$id.'&query=1');
  //header('Location: u  
  //echo "Mail was successfully delivered";
}
else
{
  //echo $response;
//echo "bye";
   header('Location: conversation.php?id='.$id.'&query=0');
//echo "Mail delivery was unsuccessful";
}
}
mysql_close($connection);
?>

