<?php
function sendmail($message,$toemail,$querytype,$filename)
{
$htmlbody = "Hi Siddhant , you have new advice requests pending ,".$message." please log in and respond \n Regards,\n Fundebaazi Team";
$to = $toemail; //Recipient Email Address
$subject = "Notification-".$querytype."Fundebaazi.in"; //Email Subject
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
$message .= "--PHP-mixed-$random_hash\r\n"."Content-Type: application/zip;name=\"logo.png\"\r\n"."Content-Transfer-Encoding:base64\r
\n"."Content-Disposition: attachment\r\n\r\n";

$message .= $attachment;
$message .= "/r/n--PHP-mixed-$random_hash--";


//send the email
$mail = mail( $to, $subject , $message, $headers );

echo $mail ? "Mail sent" : "Mail failed";
}
?>
<?php
sendmail("hello","bobby@[172.20.193.108]",1,"IITBombay.png");
?>
