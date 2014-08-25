<?php
function user_reg($toemail,$passwd)
{
$htmlbody = "Hi, you have been successfully registered as an advisor at fundebaazi.in . Your account details are as follows .        User Name:".$toemail."       Password:".$passwd."To reset your password follow the given link: www.fundebaazi.in/forgot.php";
$to = $toemail; //Recipient Email Address
$subject = "Successfully registered at Fundebaazi.in"; //Email Subject
$headers = "From: admin@fundebaazi.in\r\nReply-To: admin@fundebaazi.in";
$random_hash = md5(date('r', time()));
$headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\"";
// Set your file path here



//define the body of the message.
$message = "--PHP-mixed-$random_hash\r\n"."Content-Type: multipart/alternative; boundary=\"PHP-alt-$random_hash\"\r\n\r\n";
$message .= "--PHP-alt-$random_hash\r\n"."Content-Type: text/plain; charset=\"iso-8859-1\"\r\n"."Content-Transfer-Encoding: 7bit\r\n\r\n";


//Insert the html message.
$message .= $htmlbody;
$message .="\r\n\r\n--PHP-alt-$random_hash--\r\n\r\n";


//echo "conversation.php?id=".$last;
//send the email
$mail = mail( $to, $subject , $message, $headers );

return $mail ? 1 : 0;
}
?>
