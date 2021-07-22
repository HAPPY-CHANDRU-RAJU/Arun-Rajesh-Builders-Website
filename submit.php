<?php


include_once 'resource/send-email-gmail.php';

error_reporting( ~E_DEPRECATED & ~E_NOTICE );
$servername = "localhost";
$username = "root";
$password = "";
		
try {
    $conn = new PDO("mysql:host=$servername;dbname=hwat", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
	
	$c = $_POST['exportData'];
	
	if((isset($c['name'])) && (isset($c['phone'])) && (isset($c['message'])) ){
		
		$name = trim($c['name']);
		$name = strip_tags($name);
		$name = htmlspecialchars($name);
		
		$phno = trim($c['phone']);
		$phno = strip_tags($phno);
		$phno = htmlspecialchars($phno);
		
		$msg = trim($c['message']);
		$msg = strip_tags($msg);
		$msg = htmlspecialchars($msg);
		
		date_default_timezone_set('Asia/Kolkata');
        $t=time();
		
		#### Database Code
		/**
		$sql2 = "SELECT * FROM `feedback-hwat` WHERE hwat_phno = '$phno' AND hwat_message = '$msg' AND hwat_name = '$name'";
		$res2 = $conn->prepare($sql2);
		$res2->execute();
		
		if($res2->rowCount() >= 1){
			$error = TRUE;
		}		
		
		if($error){
			echo "<div class='alert alert-info failure'>Your response already taken  !!!</b></div>";
		}else{		
		$sql1 = "INSERT INTO `feedback-hwat` (`hwat_name`, `hwat_message`, `hwat_phno`, `hwat_email`, `hwat_doc`, `hwat_company`) VALUES ('$name', '$msg', '$phno', '-', current_timestamp(), 'ARB');";
		$res1 = $conn->prepare($sql1);
		$res1->execute();
		
		if($res1){
			unset($name);
			unset($phno);
			unset($msg);
			echo "<div class='alert alert-success success'>Thank You, We'll contact you as much as possible.. !!!</b></div>";
		}else{
			echo "<div class='alert alert-danger failure'>Try again later !!!</b></div>";
		}
		**/
		
		####Mail Code
		
		 $Cur_time = date("d-M-Y D,h:i:s A",$t);
			$mail_body = '
	<html>
		<body style="font-family: Arial, Helvetica, sans-serif;line-height:1.8em;">
		<hr>
			<h2 align="center">AR builder`s</h2>
		<hr>
		<p style="margin: 15px;">Hey Team,<br><b>'.$name.'</b> has asked a query on '.$Cur_time.'</p><br>
		
		<table align="center">
		    <tr style="background-color: yellow;font-size: large;font-weight: 600;"><td style="padding: 15px 175px;" colspan="2">Customer Details</td></tr>
		    <tr><td style="padding: 17px 34px;font-weight: 600" >Name</td><td>'.$name.'</td></tr>
		    <tr><td style="padding: 17px 34px;font-weight: 600" >Phone Number</td><td>'.$phno.'</td></tr>
		    <tr><td style="padding: 17px 34px;font-weight: 600" >Mesage</td><td>'.$msg.'</td></tr>
		</table>
		<p style="margin: 15px;">Regards,<br><b>Website Bot</b><br>AR Builder&apos;s</p>
		
		<hr>
		<p align="center"><strong>&copy;&nbsp;&nbsp;2021 Happie Webs and Tech&apos;s </strong></p>
		<p> ------ Computer Generating mail ------ </p>
		</body>
</html>';

							$mail->addAddress("rajuashwin1410@gmail.com"); #  $email is necessary BUT $username is optional..
							$mail->Subject = "AR Website Bot - Messages";
							$mail->Body = $mail_body;

							if ($mail->Send()) {
                                echo "<div class='alert alert-success'>We received your message {$name}, we'll get back to you as soon as possible. Thank for reaching out us !!!</div>";
                                echo '<script type="text/javascript"> cleartext();  </script>';
                    
							}else{
								echo "<div class='alert alert-danger failure'>Try again ! Something Wents wrong</div>";
							}	
		
	}else{
		echo "<div class='alert alert-danger failure'>Try again later !!!</div>";
	}
	
	$conn->close;
?>
