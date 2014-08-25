<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

?>


<?php
   // Configuration - Your Options
      $allowed_filetypes = array('.jpg','.gif','.bmp','.png','.pdf','.doc','.docx'); // These will be the types of file that will pass the validation.
      $max_filesize = 524288; // Maximum filesize in BYTES (currently 0.5MB).
      $upload_path = 'images/'; // The place the files will be uploaded to (currently a 'files' directory).
 
   $filename = $_FILES['userfile']['name']; // Get the name of the file (including file extension).
   $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); // Get the extension from the filename.

   // Check if the filetype is allowed, if not DIE and inform the user.
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
 
?>


<?php
require("include/connect.php");
?>
<?php
require("include/user_reg.php");
?>
<?php
$str1='';
$str2='';
 foreach ($_POST as $key => $value)
{
  if ($key!='tags')
  {
    if ($key=='bio' || $key=='summary')
    {
      $value=mysql_real_escape_string($value);
    }
    if ($key=='email')
    {
      $email=$value;
    }

if ($key!='max_requests')
{
  $key=str_replace( "_", " ",$key);
}
  $key="`".$key."`";


echo $key;
  $str1=$str1.$key.",";
  $str2=$str2."'".$value."',";
  }

}
$str1 = rtrim($str1, ',');
$str2= rtrim($str2, ',');
$str1=$str1.",image";
$str2=$str2.",'".$filename."'";
//echo $str2;
//echo $str1;
$sql ="INSERT INTO data_base(".$str1.") values (".$str2.")";



$result=mysql_query("SELECT * FROM data_base ",$connection);
if (!$result)
die("database query failed:".mysql_error());
$flag=0;
while ($row=mysql_fetch_array($result))
{
    
    if ($row['name']==$name)
    $flag=1;
}
if ($flag==0)
{
 //$sql ="INSERT INTO data_base(name, bio,summary,image) values ('$name','$bio','$summary','$filename')";
$retval = mysql_query( $sql, $connection );
    if(! $retval )
    {
      die('Could not enter data: ' . mysql_error());
    }
    else 
    {
    echo "data entered successfully";
    $passwd=generateRandomString();
    echo "<br>Mail sent to :".$email."<br>";
    


$altemail="";
$password=$passwd;

$sql ="INSERT INTO users(email, altemail, password) values ('$email','$altemail','$password')";
$retval = mysql_query( $sql, $connection );
if(! $retval )
{
  
$mystring =mysql_errno();

if ($mystring == 1062) 
{
    echo "user already exists";
} 
else 
{
  echo "could not register the user";
}
}
else
{
echo "user is registered successfully";

$response=user_reg($email,$passwd);
              if($response==1)
              {
                echo "mail sent successfully";

              }
              else
              {
                echo "mail sending failed";

              }

}





              
    }
}
else
{
 echo "username already exists";
}


mysql_close($connection);
?>

<a href="admin.php"><h1>Move back to the main page</h1></a>


