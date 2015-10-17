<?php
	/*
	require '../../yiyaclass/ConnDB.class.php';
	session_start();
	
	$fnickname=$_GET['fnickname'];
	$fvcode=$_GET['fvcode'];
	
	if ($fvcode != $_SESSION['fvcode']){
		echo "errorphp";
		$_SESSION['fvcode'] = rand(1000,9999);
		exit;
	}
	
	$connobj=new ConnDB("localhost","yiya_users");
	$conn=$connobj->GetConnId();
	//create new password
	$newps = "";
	for($i=1;$i<=6;$i++){
		if(rand(1,2) == 1)
			$newps .=chr(rand(65,90));
		else
			$newps .=rand(0,9);
	}
	$temp = $newps;
	$newps =md5($newps);
	$q = "update users set password = '$newps' where nickname = '$fnickname' ";
	
	if(!mysqli_query($conn,$q)){
		echo "fail";
		exit;
	}
	*/
	
	phpinfo();
    require_once('../../yiyaclass/class.phpmailer.php');
    //include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

    $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

    $mail->IsSMTP(); // telling the class to use SMTP

    try {
      $mail->Host       = "mail.yourdomain.com"; // SMTP server
      $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
      $mail->SMTPAuth   = true;                  // enable SMTP authentication
      $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
      $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
      $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
      $mail->Username   = "ictfisher@gmail.com";  // GMAIL username
      $mail->Password   = "fisherl988";            // GMAIL password
      $mail->AddReplyTo('ictfisher@gmail.com', 'First Last');
      $mail->AddAddress('ictfisher@gmail.com', 'John Doe');
      $mail->SetFrom('ictfisher@gmail.com', 'First Last');
      $mail->AddReplyTo('ictfisher@gmail.com', 'First Last');
      $mail->Subject = 'PHPMailer Test Subject via mail(), advanced';
      $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
      $mail->MsgHTML(file_get_contents('contents.html'));
	  $mail->Body = "test";
      //$mail->AddAttachment('images/phpmailer.gif');      // attachment
      //$mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
      $mail->Send();
      echo "Message Sent OK</p>\n";
    } catch (phpmailerException $e) {
      echo $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
      echo $e->getMessage(); //Boring error messages from anything else!
    }

?>