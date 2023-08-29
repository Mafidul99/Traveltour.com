<?php

session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);


if(isset($_POST['submit'])) {	
	$arrival_date = $_POST['dynFrm_arrival_date'];
	$departure_date = $_POST['dynFrm_departure_date'];
	$adults = $_POST['dynFrm_no_of_adults'];
	$children = $_POST['dynFrm_no_of_children'];
	$age1 = $_POST['dynFrm_children_age1'];
	$age2 = $_POST['dynFrm_children_age2'];
	$age3 = $_POST['dynFrm_children_age3'];
	$age4 = $_POST['dynFrm_children_age4'];
	$age5 = $_POST['dynFrm_children_age5'];
	$description = $_POST['dynFrm_travel_plan_requirement'];
	$name = $_POST['dynFrm_your_name'];
	$email = $_POST['dynFrm_your_e_mail'];
	$country = $_POST['dynFrm_country'];
	$state = $_POST['dynFrm_state'];
	$city = $_POST['dynFrm_other_city'];
	$mobile = $_POST['dynFrm_phone_mobile'];

try{
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'mafidul.peindia@gmail.com'; // Gmail address which you want to use as STMP server//
	$mail->Password = 'wifugpjsqtbzxawa';
	$mail->SMTPSecure = 'tls';
	$mail->Port = '587';

	$mail->setFrom('mafidul.peindia@gmail.com'); // Gmail address which you want to use as STMP server//
	$mail->addAddress('mafidul.peindia@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = "Enquiry From Travel & Tour";
	$mail->Body = "<h3> Arrival On : $arrival_date <br> 
                        Departure On : $departure_date <br> 
                        No. of Persons : $adults, $children, $age1, $age2, $age3, $age4, $age5 <br> 
                        Description : $description <br> 
                        Your Name : $name <br> 
                        Your E-mail : $email <br> 
                        Select Country : $country <br> 
                        State : $state <br> 
                        City : $city <br> 
                        Contact/Mobile No. : $mobile 
                    </h3>";


	$mail->send();
	//$alert ='<div class="alert-success"> <span> Registration Successfully ! Thank you for Contacting Us. </span> </div>';
	$_SESSION['status'] = "Thank you for contact us, our team will contact with you very soon";
	$_SESSION['status_code'] = "success";
}catch (Exception $e){
	//$alert ='<div class="alert-error"> <span>'.$e->getMessage().' </span> </div>';
	$_SESSION['status'] = "Registration Not Successfull ! Plaese try again";
	$_SESSION['status_code'] = "error";
}
}

?>