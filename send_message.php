<?php
//add the recipient's address here
$myemail = 'info@cancer-ge.ch';
 
//grab named inputs from html then post to #thanks
if (isset($_POST['name'])) {
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);

//echo "<span class=\"alert alert-success\" >Your message has been received. Thanks! Here is what you submitted:</span><br><br>";
//echo "<stong>Name:</strong> ".$name."<br>";   
//echo "<stong>Email:</strong> ".$email."<br>"; 
//echo "<stong>Message:</strong> ".$message."<br>";
 
//generate email and send!
$to = $myemail;
$email_subject = "Mail de cancer-ge.ch de $name";
$email_body = "Vous avez reçu un nouveau message. \n\n".
"Nom: $name \n ".
"Email: $email\n\n".
"$message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
}
?>
