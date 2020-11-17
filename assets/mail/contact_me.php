<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   // return false;
   }

   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message'])); 

$name = "Cédric Lemaître";
$email_address = "c.lemaitre@apeira-technologies.fr";
$phone = "0672715584";
$message = "test";

echo("test");
echo($name);
echo($email_address);
echo($phone);
echo($message);
   
// Create the email and send the message
$to = 'contact@apeirelec.fr'; // Add your email address in between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$Subject = "Website Contact Form:  $name";
$email_body = "Nouveau message depuis le formulaire de contact.\n\n"."Voici les détails de ce message:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@apeirlec.fr\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
$CR_Mail = TRUE;
$CR_Mail = @mail($to,$Subject,$email_body,$headers);
if ($CR_Mail === FALSE) {
   echo " ### CR_Mail=$CR_Mail - Erreur envoi mail <br> \n";
} else {
   echo " *** CR_Mail=$CR_Mail - Mail envoyé<br> \n";
}

return true;         
?>