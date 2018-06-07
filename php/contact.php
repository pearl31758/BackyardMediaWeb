<?php
//  Backyard Media 
// Filename: contact.php

// Author:Chatsuda Rattarasan 
// Date: May 29 2018  

echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n"; 
// $fp = fsockopen('localhost', 587, $errno, $errstr, 10);
// if (!$fp) {
//     echo "$errstr ($errno)\n";
// } else {
//     $out = "QUIT\r\n";
//     fwrite($fp, $out);
//     while (!feof($fp)) {
//         echo fgets($fp, 128);
//     }
//     fclose($fp);
// }
/*
THIS FILE USES PHPMAILER INSTEAD OF THE PHP MAIL() FUNCTION
*/
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';



/*
 *  CONFIGURE EVERYTHING HERE
 */


// an email address that will be in the From field of the email.
// $fromEmail = $_POST['email'];
// $fromName = $_POST['name'];
// $message = $_POST['notes'];
$fromEmail = 'from@mailtrap.io';
$fromName = 'Hello';
$message = 'I want to work with u';

// $notes = $_POST['message'];

// an email address that will receive the email with the output of the form
$sendToEmail = 'c260416447-a997b9@inbox.mailtrap.io';
$sendToName = 'BackyardMedia';

// smtp credentials and server


$smtpHost = 'smtp.mailtrap.io';
$smtpUsername = "984aeb99a24159";
$smtpPassword = "4076ee85617fac";



// subject of the email
$subject = 'New message from contact form';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('name' => $fromName, 'email' => $fromEmail, 'message' => $message); 

// message that will be displayed when everything is OK :)
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

// If something goes wrong, we will display this message.
$errorMessage = 'There was an error while submitting the form. Please try again later';

/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);

try
{

    // if(count($_POST) == 0) throw new \Exception('Form is empty');
    
    $emailTextHtml = "<h1>You have a new message from your contact form</h1><hr>";
    $emailTextHtml .= "<table>";

    // foreach ($_POST as $key => $value) {
    //     // If the field exists in the $fields array, include it in the email
    //     if (isset($fields[$key])) {
    //         $emailTextHtml .= "<tr><th>$fields[$key]</th><td>$value</td></tr>";
    //     }
    // }
    $emailTextHtml .= "</table><hr>";
    $emailTextHtml .= "<p>Have a nice day,<br>Best,<br>Backyerd Media</p>";
    
    $mail = new PHPMailer;
    
    $mail->isSMTP();
    // $mail->SMTPOptions = array(
    //     'tls' => array(
    //         'verify_peer' => false,
    //         'verify_peer_name' => false,
    //         'allow_self_signed' => true
    //     )
    // );

    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 3;
    $mail->Debugoutput = 'html';

    //Set the hostname of the mail server
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    $mail->Host = gethostbyname($smtpHost);


     //Username to use for SMTP authentication - use full email address for gmail
     $mail->Username = $smtpHost;
    
     //Password to use for SMTP authentication
     $mail->Password = $smtpPassword;

    
     //Set the encryption system to use - ssl (deprecated) or tls
     $mail->SMTPSecure = 'tls';
    
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 2525;
    // $mail->Port = 587;
    
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = false;
    $mail->AuthType = 'LOGIN';
    
   
    $mail->SMTPAutoTLS = false;
    
     //Recipients
     $mail->setFrom($fromEmail, $fromName);
     $mail->addAddress($sendToEmail, $sendToName); // you can add more addresses by simply adding another line with $mail->addAddress();
     $mail->addReplyTo($from);
     
      //Content
     $mail->isHTML(true);
 
     $mail->Subject = $subject;
     $mail->Body    = $emailTextHtml;
     $mail->msgHTML($emailTextHtml); // this will also create a plain-text version of the HTML email, very handy
     
    
    if(!$mail->send()) {
        throw new \Exception('Message could not be sent. Mailer Error: ' . $mail->ErrorInfo);
    }
    
    $responseArray = array('type' => 'success', 'message' => $okMessage);
    //$mail->smtpClose();
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
}


// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    
    header('Content-Type: application/json');
    
    echo $encoded;
}
// else just display the message
else {
    echo $responseArray['message'];
}