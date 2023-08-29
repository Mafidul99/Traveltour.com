<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

//$alert = '';

if (isset($_POST['submit'])) {
	$jobes_for = $_POST['dynFrm_post_applied_for'];
	$name = $_POST['dynFrm_your_name'];
	$qualification = $_POST['dynFrm_highest_qualification'];
	$of_years = $_POST['dynFrm_experience_no_of_years'];
	$address = $_POST['dynFrm_address'];
	$mobile_no = $_POST['dynFrm_phone_mobile_no'];
	$email = $_POST['dynFrm_email'];
	$country = $_POST['dynFrm_country'];
	$your_resume = $_POST['dynFrm_paste_your_resume'];

	$attachment = $_FILES['dynFrm_attach_resume_file']['tmp_name'];

	$html = "	<h3 align='center'> Career Jobes Application Details </h3>
				<table border='1' width='100%' cellpadding='5' cellspacing='5'>
					<tr>
						<th width='30%'> Post Applied For :</th>
						<td width='70%'> $jobes_for </td>
					</tr>
					<tr>
						<th width='30%' > Your Name : </th>
						<td width='70%'> $name  </td>
					</tr>
					<tr>
						<th width='30%'> Highest Qualification : </th>
						<td width='70%'> $qualification  </td>
					</tr>
					<tr>
						<th width='30%'> Experience (No of Years : </th>
						<td width='70%'>$of_years </td>
					</tr>
					<tr>
						<th width='30%'> Address: </th>
						<td width='70%'>$address  </td>
					</tr>
					<tr>
						<th width='30%'> Phone / Mobile No.  : </th>
						<td width='70%'>$mobile_no </td>
					</tr>
					<tr>
						<th width='30%'> Email  : </th>
						<td width='70%'> $email</td>
					</tr>
					<tr>
						<th width='30%'> Country: </th>
						<td width='70%'> $country </td>
					</tr>
			</table>";

	try {
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'softdeve84@gmail.com'; // Gmail address which you want to use as STMP server//
		$mail->Password = 'camvfabinmybenpe';
		$mail->SMTPSecure = 'tls';
		$mail->Port = '587';

		$mail->setFrom('softdeve84@gmail.com', 'Career Jobes Application 2023'); // Gmail address which you want to use as STMP server//
		$mail->addAddress('softdeve84@gmail.com');
		$mail->addCC($email, $name);

		$mail->addAttachment($attachment, $_FILES['dynFrm_attach_resume_file']['name']);    // Optional name

		$mail->isHTML(true);
		$mail->Subject = "Career Jobes Application";
		$mail->Body = $html;
		$mail->SMTPOptions = array('ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => false
		));

		$mail->send();
		//$alert ='<div class="alert-success"> <span> Registration Successfully ! Thank you for Contacting Us. </span> </div>';
		$_SESSION['status'] = "Jobes Application Request Successfully ! Our team will contact with you very soon";
		$_SESSION['status_code'] = "success";
	} catch (Exception $e) {
		//$alert ='<div class="alert-error"> <span>'.$e->getMessage().' </span> </div>';
		$_SESSION['status'] = "Jobes Application Request Not Successfull ! Plaese try again";
		$_SESSION['status_code'] = "error";
	}
}
