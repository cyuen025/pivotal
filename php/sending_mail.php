<?php
	session_start();
	
	$name = trim($_POST["name"]);
	$contact_num = trim($_POST["contact_num"]);
	$email = trim($_POST["email"]);
	$business_name = trim($_POST["business_name"]);
	$business_profile = trim($_POST["business_profile"]);
	$business_description = trim($_POST["business_description"]);
	$emailTo = $_SESSION["emailTo"];
	$pgProgram = $_SESSION["pg_program"];
	if(isset($name) && isset($contact_num) && isset($email) && isset($business_name) && isset($business_profile) && isset($business_description)){

		if($name == ""){
			$_SESSION["error"] = "Please fill in name section";
		}
		if($contact_num == ""){
			$_SESSION["error"] = "Please fill in contact number section";
		}
		if($email == ""){
			$_SESSION["error"] = "Please fill in email section";
		}
		if($business_name == ""){
			$_SESSION["error"] = "Please fill in business name section";
		}
		if($business_profile == ""){
			$_SESSION["error"] = "Please fill in business profile section";
		}
		if($business_description == ""){
			$_SESSION["error"] = "Please fill in business description section";
		}
		if(count($_POST['best_time_contact']) != 0 ){
			$checkboxData = implode(",", $_POST['best_time_contact']);
		}

		require("phpMailer/class.phpmailer.php");
		$mail = new PHPMailer();
		$mail->isSMTP();                                      					// Set mailer to use SMTP
		$mail->Host = 'htpwebde.accountservergroup.com';   // Specify SMTP server
		$mail->SMTPAuth = true;                               			// Enable SMTP authentication
		$mail->Username = 'email@email.htpwebdesign.ca';  // SMTP username
		$mail->Password = '%9"*!rs+NdeP&>[UA';               		// SMTP password
		$mail->SMTPSecure = 'ssl';                            				// Enable encryption, 'ssl' also accepted --> set to 'ssl'
		$mail->Port = 465;									  					// Port for outgoing mail server --> set to 465 
		$mail->From = 'email@email.htpwebdesign.ca';			// From address
		//$mail->FromName = 'Email Testing Account';			// Name for from address

		//add the 'to' addresses, other addresses...

		$mail->addAddress($emailTo, 'Jaden Lee');	

		$mail->addAddress('ljw6632@gmail.com', 'Jaden Lee');	
	
		//$mail->addReplyTo('email@email.htpwebdesign.ca', 'Email Testing Account'); // Add a reply to address --> optional
		//$mail->addCC('cc@example.com');						// CC address --> optional
		//$mail->addBCC('bcc@example.com');					// BCC address --> optional

		// Set word wrap to 50 characters --> character line length in email
		$mail->WordWrap = 50;                                 	
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Add attachments --> optional

		// Set email format to HTML --> if you want HTML formatted email
		$mail->isHTML(true);                                    
		// Email subject line

		$mail->Subject = 'From '. $name;			
		//the HTML body of the email
		$mail->Body    = '<table>
							<tr>
								<th>Name: </th><td>'.$name.'</td>
							</tr>
							<tr>
								<th>Contact #: </th><td>'.$contact_num.'</td>
							</tr>
							<tr>
								<th>Best time to contact: </th><td>'.$checkboxData.'</td>
							</tr>
							<tr>
								<th>Email: </th><td>'.$email.'</td>
							</tr>
							<tr>
								<th>Business name: </th><td>'.$business_name.'</td>
							</tr>
							<tr>
								<th>Business profile: </th><td>'.$business_profile.'</td>
							</tr>
							<tr>
								<th>Business description: </th><td>'.$business_description.'</td>
							</tr>
						  </table>';
		// Plain text backup in case HTML email does not work
		$mail->AltBody = 'Name: '.$name.' 
						 Contact #: '.$contact_num.'
						 Best time to contact: '.$checkboxData.'
						 Email: '.$email.'
						 Business name: '.$business_name.'
						 Business profile: '.$business_profile.'
						 Business description: '.$business_description.'
						'; 
		if(!$mail->send()) {
		  	$_SESSION["error"] = "Message has NOT been sent";
		  	header("Location:". $pgProgram);
		  	unset($_SESSION["pg_program"]);
		  	die();
		} else {
	    	$_SESSION["error"] = "Message has been sent";
	    	header("Location:". $pgProgram );
	    	unset($_SESSION["pg_program"]);
		  	die();
		}
	}else{
		$_SESSION["error"] = "Please fill in the form";

		header("Location:". $pgProgram);
		unset($_SESSION["pg_program"]);
		die();
	}
?>