
<?php
$name = $_POST['name'];
$email_address = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$service = $_POST['service'];
$message = $_POST['message'];
$subject = "Contact Form";

// Create the email and send the message
$to = 'email@yahoo.co.uk'; // Add your email address inbetween the 'youremail@email.com' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nDate: $date\n\nTime: $time\n\nService: $service\n\n Message:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
echo "." . " -" ."
<a href='http://www.tedcivilka.com/' style='text-decoration:none; font-size:50px; display: block; text-align: center; letter-spacing: 2px; color: black;'>Thank you for your email, I will get back to you as soon as possible<span style='color: red;'> CLICK HERE</span> to return to home page</a> " ;			
?>