<?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    function mailSend($from, $to, $subject, $body){
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer();

      try {
      //Server settings
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER; // debug
      $mail->isSMTP();
      $mail->Host = 'smtp.mailtrap.io'; //Your Host
      $mail->SMTPAuth = true;
      $mail->Port = 2525;
      $mail->Username = 'username'; // Your SMTP username
      $mail->Password = 'password'; // Your SMTP Password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
      $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
      
      //Recipients
      $mail->setFrom($from, 'Mailer');
      //$mail->addAddress('Joe@gmail.com', 'Joe User');     //Add a recipient
      $mail->addAddress($to);               //Name is optional
      //$mail->addReplyTo('info@example.com', 'Information');
      //$mail->addCC('cc@example.com');
      //$mail->addBCC('bcc@example.com');
  
      //Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = $subject;
      $mail->Body = $body;
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
      $mail->send();
      echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    }
    

    ?> 