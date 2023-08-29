<?php

//session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);


if(isset($_POST['submit'])) {	
    $name = $_POST['dynFrm_contact_person'];
    $description = $_POST['dynFrm_details_2'];
    $departure_date = $_POST['dynFrm_arrival_date'];
    $days = $_POST['dynFrm_duration'];
    $email = $_POST['dynFrm_email_id'];
    $country = $_POST['dynFrm_country'];
    $mobile = $_POST['dynFrm_phone'];

try{
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'softdeve84@gmail.com'; // Gmail address which you want to use as STMP server//
	$mail->Password = 'camvfabinmybenpe';
	$mail->SMTPSecure = 'tls';
	$mail->Port = '587';

	$mail->setFrom('softdeve84@gmail.com'); // Gmail address which you want to use as STMP server//
	$mail->addAddress('softdeve84@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = "Enquiry From";
	$mail->Body = "<h3> Your Full Name : $name <br>  
                        Description : $description <br> 
                        Departure Date : $departure_date <br> 
                        Number of Days : $days <br> 
                        Email : $email <br> 
                        Contact/Mobile No. : $country- $mobile 
                    </h3>";


	$mail->send();
	//$alert ='<div class="alert-success"> <span> Thank you for Enquiry From, our team will contact with you very soon. </span> </div>';
    echo '<script>alert("Thank you for Enquiry From, our team will contact with you very soon")</script>';
	//$_SESSION['status'] = "Thank you for Enquiry From, our team will contact with you very soon";
	//$_SESSION['status_code'] = "success";
}catch (Exception $e){
	//$alert ='<div class="alert-error"> <span>'.$e->getMessage().' </span> </div>';
	//$_SESSION['status'] = "Registration Not Successfull ! Plaese try again";
	//$_SESSION['status_code'] = "error";
    echo '<script>alert("Registration Not Successfull ! Plaese try again")</script>';
}
}

?>