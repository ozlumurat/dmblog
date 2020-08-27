<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$formcontent = "From: $name \n Message: $comment";
$recipient = "muratozlu@gmail.com";
$subject = "Kullanıcı Yorumu Hk";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
echo "Teşekkürler";
?>
