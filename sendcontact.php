<?php
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\SMTP;
      use PHPMailer\PHPMailer\Exception;
      require "PHPMailer/PHPMailerAutoload.php";
      $mail = new PHPMailer();
      $mail->SMTPDebug = 3; 
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->Port = 587;
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = 'tls';
      $mail->Username = 'trialverma02@gmail.com';
	$mail->Password = 'Trail-NSS-02';

      $name1= $_POST['full_name'];
      $email1= $_POST['email'];
      $msg1 = $_POST['message'];

      $mail->setFrom('trialverma02@gmail.com',$name1);
      $mail->addAddress('nssbhilai@gmail.com');
      $mail->addReplyTo($email1);
      $mail->isHTML(true);
      $mail->Subject='NSS Website Form submission';
      $mail->Body = $msg1;

      if(!$mail->send())
      {
            header("Location: index.php?Failed");
      }
      else
      {
            header("Location: index.php?mailsend");
      }
