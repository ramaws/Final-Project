<?php
	/*echo "<pre>";
		print_r($_POST);
	echo "</pre>";*/
	$email = "bvsfoundation1@gmail.com";
	$name = $_POST["name"];
	$body = "<div style=\"max-width:600px;padding:10px\">
						<div style=\"width: 580px; margin: auto; padding: 15px;\">
							<p style=\"font-size: 16px; font-family: calibri;\">Hi,</p>	
							<p style=\"font-size: 16px; font-family: calibri;\">This is".$_POST["name"]." my number is ".$_POST["phone"]." email ".$_POST["email"]." my message ".$_POST["message"].".</p>
							<p style=\"font-size: 16px; font-family: calibri;\">Thank you very much for your time. looking forward to hear from you.</p>
						</div>
					</div>";
						
		
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
                
					
		$subject="$name leaves a message";
		$to= "$email";
		$body="$body";
		$headers="$headers";
		mail($to,$subject,$body,$headers);
		
		header("location: contact.html");
	
?>