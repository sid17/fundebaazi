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
function forgotmail($toemail,$randomstr)
{
$htmlbody = "Password reset string is ".$randomstr."<br> please log in at the following link to continue and respond www.fundebaazi.in/resetpassword.php";
$to = $toemail; //Recipient Email Address
$subject = "Reset Password : fundebaazi.in"; //Email Subject
$headers = "From: admin@fundebaazi.in\r\nReply-To: admin@fundebaazi.in";
$random_hash = md5(date('r', time()));
$headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\"";

$message = "--PHP-mixed-$random_hash\r\n"."Content-Type: multipart/alternative; boundary=\"PHP-alt-$random_hash\"\r\n\r\n";
$message .= "--PHP-alt-$random_hash\r\n"."Content-Type: text/plain; charset=\"iso-8859-1\"\r\n"."Content-Transfer-Encoding: 7bit\r\n\r\n";


//Insert the html message.
$message .= $htmlbody;
$message .="\r\n\r\n--PHP-alt-$random_hash--\r\n\r\n";

$mail = mail( $to, $subject , $message, $headers );

return $mail ? 1 : 0;
}
?>


<?php
require("include/connect.php");
?>
<?php

$email=$_POST['email'];
$randomstr_1=generateRandomString();
$sql ="UPDATE users set confirmationstr='".$randomstr_1."' where email='".$email."'";
echo $sql;
$retval = mysql_query( $sql, $connection );
if($retval )
{
if (forgotmail($email,$randomstr_1))
{
	header("Location:forgot.php?success=1");

}
else
{

header("Location:forgot.php?success=0");

}
}  

mysql_close($connection);
?>

