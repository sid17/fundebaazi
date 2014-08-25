<?php
function mail_review($toemail,$forid)
{
$htmlbody = "
<html>
<head>
<title>
    Review your advisor at Fundebaazi.in
</title>
</head>
<body>
<p>Follow the given link to review your advisor: <a href='www.fundebaazi.in/user_bio.php?id=".$forid."#user_review'>Review Advisor</a></p>
<br>
<br>
 <p>Thanks , Fundebaazi team</p>
</body>
</html>



";
$to = $toemail; //Recipient Email Address
$subject = "Review your advisor at Fundebaazi.in"; //Email Subject
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
