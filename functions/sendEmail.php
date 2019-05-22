<?php
/* Author: Imzan Khan
 * Feature: Notifications
 * Description: Sets up the email settings for contact form
 * Date Created: May 19th, 2019
 * Last Modified: May 19th, 2019
 * Recent Changes: Access code changed to be more simple
 */
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
date_default_timezone_set('America/Toronto');
require '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

function format($input)
{
    $formatted = trim($input);
    $formatted = stripslashes($input);
    $formatted = htmlspecialchars($input);
    return $formatted;
}
$username = format($name);
$email = format($email);
$content = format($message);
$output = '';
$subject = "Message from " . $username;
$mail = new PHPMailer;
$mail->Host = 'a2plcpnl0588.prod.iad2.secureserver.net';
$mail->isSMTP();
$mail->Port = '587';
$mail->SMTPAuth = true;
$mail->Username = "landing@imzankhan.ca";
$mail->Password = "b?PMVI%id[{U";
$mail->SMTPSecure = 'tls';
$mail->setFrom('landing@imzankhan.ca', $username);
$mail->addAddress("ikhan5@lakeheadu.ca", "Imzan Khan");
$mail->WordWrap = 50;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = "<h2>Email from $email</h2>
<h2>Name: $username</h2>
<p style='font-size:16px;'><br />$content</p>";
$mail->AltBody = '';
$result = $mail->Send();

if ($result["code"] == '400') {
    $output .= html_entity_decode($result['full_error']);
}
if ($output == '') {
    echo 'Success';
} else {
    echo $output;
}
