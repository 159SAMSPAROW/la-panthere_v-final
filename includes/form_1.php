<?php	
	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['input_504']) && strlen($_POST['input_504']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$input_504 = $_POST['input_504'];
	$message = $_POST['message'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from your website";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nInput_504: $input_504 \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $input_504";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
<IfModule mod_expires.c>
	ExpiresActive On
	ExpiresDefault "access plus 7200 seconds"
	ExpiresByType image/jpg 			"access plus 1 week"
	ExpiresByType image/jpeg 			"access plus 1 week"
	ExpiresByType image/png 			"access plus 1 week"
	ExpiresByType image/gif 			"access plus 1 week"
	ExpiresByType image/svg+xml			"access plus 1 week"
	AddType image/x-icon .ico
	ExpiresByType image/ico 			"access plus 1 week"
	ExpiresByType image/icon 			"access plus 1 week"
	ExpiresByType image/x-icon 			"access plus 1 week"
	ExpiresByType text/css 				"access plus 1 week"
	ExpiresByType text/javascript 		"access plus 1 week"
	ExpiresByType text/html 			"access plus 7200 seconds"
	ExpiresByType application/xhtml+xml 	"access plus 7200 seconds"
	ExpiresByType application/javascript 	"access plus 1 week"
	ExpiresByType application/x-javascript 	"access plus 1 week"
	ExpiresByType application/x-shockwave-flash "access plus 1 week"
</IfModule>