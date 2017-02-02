<?php


/*
echo '<pre>';
var_dump($_POST['webmaster']);
echo '</pre>';
*/
$result = FALSE;
$debug  = FALSE;
$sender_name  = $_POST['required-name'];
$sender_org  = $_POST['org'];
$sender_email = $_POST['required-email'];
$sender_message = $_POST['required-message'];
$to           = $_POST['webmaster'];

//var_dump($_SERVER);
$subject = " Message from RE Explorer web site ";

$message  = "You got a message from " . $sender_name . " (" . $sender_email . ").\r\n";
$message .= "Organization: " . $sender_org . "\r\n";
$message .= "Email: " . $sender_email . "\r\n";
$message .= "Message: " . $sender_message . "\r\n";

$headers =  'From: ' . $sender_email . "\r\n";

// For debuggin, set the debug var to true.
if ($debug) {
  print_r('<pre>');
  var_dump($_POST);
  print_r('<br>' . $message);
  print_r('</pre>');
  die();
}


// Try and send the email. 
$result = (mail($to, $subject, $message, $headers));

// Handle the result.
if ($result) {
	

	echo("<sc" . "ript language = 'javascript'>window.location= '" . $_POST['success'] . "'</script>");
}
else {
  print("There was a technical problem sending your email. Please <a href=javascript:history.back()>try again</a>.");
}


/*
var_dump($result);
die();


try{
if (!$result) {
        throw new Exception('Could not email');
    }
} catch (Exception $e) {
 die ('could not send email: ' . $e->getMessage());
}
*/



?>