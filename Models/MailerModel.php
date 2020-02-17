<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

namespace App\Models;
use App\PhpMailer\PHPMailer;
use App\PhpMailer\SMTP;
use App\PhpMailer\Exception;
// Load Composer's autoloader
require 'vendor/autoload.php';


class MailerModel {


  private $mail;


  public function __construct()
  {
    $this->mail = new PHPMailer(true);
  }


  public function sendmail($email, $activatedCode) {
    try {
      //Server settings
      $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
      $this->mail->isSMTP();                                            // Send using SMTP
      $this->mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
      $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $this->mail->Username   = 'onlineauction2019php@gmail.com';                     // SMTP username
      $this->mail->Password   = 'ivonakraljica123!krusevac';                               // SMTP password
      $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
      $this->mail->Port       = 587;                                    // TCP port to connect to
  
      //Recipients
      $this->mail->setFrom('onlineauction2019php@gmail.com', 'Web Auction');
      $this->mail->addAddress($email);     // Add a recipient
      // Attachments
      // Optional name
  
      // Content
      $this->mail->isHTML(true);                                  // Set email format to HTML
      $this->mail->Subject = 'Web Auction Registration';
      $this->mail->Body    = 'Thank you for registration, click here to activate your account. 
            <a href="#">Activate your account!</a>
      ';
      $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
      $this->mail->send();
  } catch (Exception $e) {
     
  }
  }
}


// Instantiation and passing `true` enables exceptions


