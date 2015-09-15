<?php
/**
 * Created by PhpStorm.
 * User: jelle
 * Date: 26/05/2015
 * Time: 13:33
 */

$name = $_POST["contact-name"];

$mail_adress = "website@ampersandtheband.be";

$from_add = $_POST["contact-email"];

$comment = $_POST["contact-msg"];

$to_add = "daan.cornelis@hotmail.com, jelle1vdb@hotmail.com";



$subject = "Contact through website";

$message = "Name: ".clean_string($name)."\n";
$message .= "Email: ".clean_string($from_add)."\n";
$message .= "Comment:\n ".clean_string($comment)."\n";

$headers = "From: $mail_adress \r\n";
$headers .= "Reply-To: $from_add \r\n";
$headers .= "Return-Path: $from_add\r\n";
$headers .= "X-Mailer: PHP \r\n";


function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
}

if(mail($to_add, $subject, $message, $headers))
{
    ?>
    <script>
        history.go(-1);
    </script>
<?php
}else{
    ?>
    <script>
        history.go(-1);
    </script>
<?php
}
?>

