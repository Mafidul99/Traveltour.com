<?php

session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);


if(isset($_POST['submit'])) {
	
$hotel_destination = $_POST['dynFrm_hotel_destination'];
$Check_in = $_POST['dynFrm_arrival_on'];
$Check_out = $_POST['dynFrm_departure_on'];


$adults = $_POST['dynFrm_no_adults'];
$children = $_POST['dynFrm_no_children'];
$infants = $_POST['dynFrm_no_of_infants'];

$rooms = $_POST['dynFrm_no_of_rooms'];
$budget = $_POST['dynFrm_budget'];
$description = $_POST['dynFrm_travel_plan_requirement'];

$name = $_POST['dynFrm_your_name'];
$email = $_POST['dynFrm_your_e_mail'];
$countrycode = $_POST['dynFrm_country'];
$state = $_POST['dynFrm_state'];
$othercity = $_POST['dynFrm_other_city'];
$phone_isd = $_POST['phone_isd'];
$mobile = $_POST['dynFrm_phone_mobile'];

try{
	//$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'mafidul.peindia@gmail.com'; // Gmail address which you want to use as STMP server//
	$mail->Password = 'wifugpjsqtbzxawa';
	$mail->SMTPSecure = 'tls';
	$mail->Port = '587';

	$mail->setFrom('mafidul.peindia@gmail.com'); // Gmail address which you want to use as STMP server//
	$mail->addAddress('mafidul.peindia@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = "Contact Us From Travel & Tour";
	$mail->Body = "<h3> 
						Hotel Destination : $hotel_destination <br> 
						Check In : $Check_in <br> 
						Check Out  : $Check_out <br> 
						No. of Persons : $adults, $children, $infants <br>
						No. of Rooms  : $rooms <br>
						Budget : $budget <br>
						Description  : $description <br>
						Your Name : $name <br>
						Your E-mail : $email <br>
						Select Country : $countrycode <br>
						State  : $state <br>
						City   : $othercity <br>
						Contact/Mobile No  : $phone_isd- $mobile
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