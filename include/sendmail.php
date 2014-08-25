<?php
function sendmail($message,$toemail,$querytype,$filename,$last)
{
$htmlbody = "<html>New Message:<br>".$message."<br> please log in at the following link to continue and respond <a href='www.fundebaazi.in/conversation.php?id=".$last."'>Click here to respond</a> <br>  Satisfied with the conversation! Follow the link to close the conversation <a href='www.fundebaazi.in/closeconversation.php?id=".$last."'>Click here to close</a> <br> Contact our team !! <a href='www.fundebaazi.in/contact.php#contactForm'>Contact us!</a><br>Regards,<br> Fundebaazi Team</html>";
$to = $toemail; //Recipient Email Address
$typemsg="";
if ($querytype==1)
{
$typemsg='Resume Review';
}
else if ($querytype==2)
{
$typemsg='Exam Preparation Guidance';
}
else
{
$typemsg='Career conversation';
}
$subject = "Conversation-".$typemsg."at Fundebaazi.in[id=".$last."]"; //Email Subject
$headers = "From: admin@fundebaazi.in\r\nReply-To: admin@fundebaazi.in";
$random_hash = md5(date('r', time()));
$headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\"";
// Set your file path here
$attachment = chunk_split(base64_encode(file_get_contents('files/'.$filename))); 


//define the body of the message.
$message = "--PHP-mixed-$random_hash\r\n"."Content-Type: multipart/alternative; boundary=\"PHP-alt-$random_hash\"\r\n\r\n";
$message .= "--PHP-alt-$random_hash\r\n"."Content-Type: text/plain; charset=\"iso-8859-1\"\r\n"."Content-Transfer-Encoding: 7bit\r\n\r\n";


//Insert the html message.
$message .= $htmlbody;
$message .="\r\n\r\n--PHP-alt-$random_hash--\r\n\r\n";


//include attachment
$message .= "--PHP-mixed-$random_hash\r\n"."Content-Type: application/zip;name=\"".$filename."\"\r\n"."Content-Transfer-Encoding:base64\r
\n"."Content-Disposition: attachment\r\n\r\n";

$message .= $attachment;
$message .= "/r/n--PHP-mixed-$random_hash--";

//echo "conversation.php?id=".$last;
//send the email
$mail = mail( $to, $subject , $message, $headers );

return $mail ? 1 : 0;
}
?>
