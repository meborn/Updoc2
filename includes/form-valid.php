<?php
$nameErr = $emailErr = $phoneErr = $messageErr = "";
$name = $email = $phone = $message = "";
$final_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$message_sent = false;
	if(empty($_POST["name"])) {
		$nameErr = "* We need your name!";
	} else {
		$name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		  $nameErr = "* Only letters and white space allowed"; 
		}
	}

	if(empty($_POST["email"]) && empty($_POST["phone"])) {
		$emailErr = "* We need your email or phone number to contact you!";
	} else {
		if(empty($_POST["email"])) {
			$emailErr = "";
		} else {
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  $emailErr = "* Invalid email format"; 
		}
	}

		if(empty($_POST["phone"])) {
			$phoneErr = "";
		} else {
			$phone = test_input($_POST["phone"]);
			$regex = "/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i";
			if(!preg_match($regex, $phone)) {
				$phoneErr = "* Invalid Phone Number";
			}
		}
	}

	if(empty($_POST["message"])) {
		$messageErr = "";
	} else {
		$message = test_input($_POST["message"]);
	}

	if($nameErr == "" && $emailErr == "" && $phoneErr == "") {
		$final_message = "$name \r $phone \r $email \r $message" ;
		$message_sent = mail('mneborn@gmail.com', 'UPHOLSTERY DOCTOR CONTACT', $final_message);
	} else {
		$message_sent = false;
	}

}

function test_input($data) {
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>