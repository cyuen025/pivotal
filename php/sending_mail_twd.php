<?php
	session_start();
	
	$name = trim($_POST["name"]);
	$contact_num = trim($_POST["contact_num"]);
	$email = trim($_POST["email"]);
	$business_name = trim($_POST["business_name"]);
	$business_profile = trim($_POST["business_profile"]);
	$domain_name = trim($_POST["domain_name"]);
	$status_website = trim($_POST["status_website"]);
	$describe_your_need = trim($_POST["describe_your_need"]);
	$website_visitor = trim($_POST["website_visitor"]);
	$describe_website_need = trim($_POST["describe_website_need"]);
	$have_content = $_POST["have_content"];
	$emailTo = $_SESSION["emailTo"];
	
	if(isset($name) && isset($contact_num) && isset($email) && isset($business_name) && isset($business_profile) && isset($describe_your_need) && isset($website_visitor) && isset($describe_website_need) && isset($have_content) && isset($domain_name) && isset($status_website)){

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
		if($describe_your_need == ""){
			$_SESSION["error"] = "Please fill in describe_your_need section";
		}
		if($describe_website_need == ""){
			$_SESSION["error"] = "Please fill in describe_website_need section";
		}
		if($website_visitor == ""){
			$_SESSION["error"] = "Please fill in website_visitor section";
		}
		if($status_website == ""){
			$status_website = "No";
		}
		if($domain_name == ""){
			$domain_name = "No";
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
								<th>Domain name: </th><td>'.$domain_name.'</td>
							</tr>
							<tr>
								<th>Status website: </th><td>'.$status_website.'</td>
							</tr>
							<tr>
								<th>Why do you need website?: </th><td>'.$describe_your_need.'</td>
							</tr>
							<tr>
								<th>Things you would like your website visitor do?: </th><td>'.$website_visitor.'</td>
							</tr>
							<tr>
								<th>Description of website needs?: </th><td>'.$describe_website_need.'</td>
							</tr>
							<tr>
								<th>Do you have content?: </th><td>'.$have_content.'</td>
							</tr>
						  </table>';
		// Plain text backup in case HTML email does not work
		$mail->AltBody = 'Name: '.$name.' 
						 Contact #: '.$contact_num.'
						 Best time to contact: '.$checkboxData.'
						 Email: '.$email.'
						 Business name: '.$business_name.'
						 Business profile: '.$business_profile.'
						 Domain name: '.$domain_name.'
						 Status website: '.$status_website.'
						 Why do you need website?: '.$describe_your_need.'
						 Things you would like your website visitor do?: '.$website_visitor.'
						 Description of website needs?: '.$describe_website_need.'
						 Do you have content?: '.$have_content.'
						'; 
		if(!$mail->send()) {
		  	$_SESSION["error"] = "Message has NOT been sent";
		  	header("Location: ../twd.php#form_msg");
		  	die();
		} else {
	    	$_SESSION["error"] = "Message has been sent";
	    	header("Location: ../twd.php#form_msg");
		  	die();
		}
	}else{
		$_SESSION["error"] = "Please fill in the form";
		header("Location: ../twd.php#form_msg");
		die();
	}
?>