<?php

session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);


if(isset($_POST['submit'])) {
	
$sender_name = $_POST['sender_name'];
$company_name = $_POST['company_name'];
$designation = $_POST['designation'];
$email_id = $_POST['email_id'];
$country = $_POST['dynFrm_country'];
$ph_number = $_POST['ph_number'];
$rating = $_POST['rating'];
$service_used = $_POST['service_used'];
$description = $_POST['description'];

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
	$mail->Subject = "Testimonial Request Form";
	$mail->Body = "<h3> 
                        Your Name : $sender_name <br> 
                        Company Name : $company_name <br> 
                        Designation  : $designation <br> 
                        E-mail  : $email_id <br> 
                        Mobile  : $country- $ph_number <br> 
                        Rating  : $rating <br> 
                        Services Used : $service_used <br> 
                        Write Your Review : $description 
                    </h3>";


	$mail->send();
	//$alert ='<div class="alert-success"> <span> Registration Successfully ! Thank you for Contacting Us. </span> </div>';
	$_SESSION['status'] = "Thank you for Testimonial Request, our team will contact with you very soon";
	$_SESSION['status_code'] = "success";
}catch (Exception $e){
	//$alert ='<div class="alert-error"> <span>'.$e->getMessage().' </span> </div>';
	$_SESSION['status'] = "Testimonial Request Not Successfull ! Plaese try again";
	$_SESSION['status_code'] = "error";
}
}

?>