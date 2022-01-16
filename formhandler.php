
<!------------PHP code to receive the message from sender to the owner of website------->

<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'karitikigangthade@gmail.com';
$email_subject = 'New form submission';
$email_body = "User name: $name.\n".
                "User email: $.visitor_email.\n".
                "Message: $message.\n";
$to = "kartikigangthade@gmail.com"
$headers = "From: $email_from \r\n";
$headers .="Reply-To:visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>
