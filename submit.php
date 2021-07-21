<?php

error_reporting( ~E_DEPRECATED & ~E_NOTICE );
$servername = "localhost";
$username = "root";
$password = "";
		
try {
    $conn = new PDO("mysql:host=$servername;dbname=hwat", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	
	$c = $_POST['exportData'];
	
	if((isset($c['name'])) || (isset($c['phone'])) || (isset($c['message'])) ){
		
		$name = trim($c['name']);
		$name = strip_tags($name);
		$name = htmlspecialchars($name);
		
		$phno = trim($c['phone']);
		$phno = strip_tags($phno);
		$phno = htmlspecialchars($phno);
		
		$msg = trim($c['message']);
		$msg = strip_tags($msg);
		$msg = htmlspecialchars($msg);
		
		
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
}
	}else{
		echo "<div class='alert alert-danger failure'>Try again later !!!</b></div>";
	}
	
	$conn->close;
?>