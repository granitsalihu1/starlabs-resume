<?php
if (isset($_POST['sendMail'])) {
$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "granitsalihu9@gmail.com";
$subject = $_POST['subject'];
$txt ="Name = ". $name ."\r\n  subject = " . $subject . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: $email" . "\r\n" .
"CC:";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
echo '<script>alert("Email sent successfuy !")</script>';
    echo '<script>window.location.href="index.html";</script>';
}

?>