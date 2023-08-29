<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';


$errors = [];
$errorMessage = '';
$msg="";

if (!empty($_POST)) {
   $name = $_POST['dynFrm_contact_person'];
   $description = $_POST['dynFrm_details_2'];
   $departure_date = $_POST['dynFrm_arrival_date'];
   $days = $_POST['dynFrm_duration'];
   $email = $_POST['dynFrm_email_id'];
   $country = $_POST['dynFrm_country'];
   $mobile = $_POST['dynFrm_phone'];
   

   if (empty($name)) {
       $errors[] = 'Name is empty';
   }

   if (empty($email)) {
       $errors[] = 'Email is empty';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email is invalid';

   }
   
   if (empty($days)) {
    $errors[] = 'Number of Days is empty';
    }

    if (empty($departure_date)) {
        $errors[] = 'Departure Date is empty';
        }

    if (empty($description)) {
        $errors[] = 'Description is empty';
        }


   if (empty($mobile)) {
       $errors[] = 'Mobile is empty';
   }

   if (!empty($errors)) {
       $allErrors = join('<br/>', $errors);
       $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
   } else {
       $mail = new PHPMailer();


       // specify SMTP credentials


       $mail->isSMTP();
       $mail->Host = 'smtp.gmail.com';
       $mail->SMTPAuth = true;
       $mail->Username = 'mafidul.peindia@gmail.com';
       $mail->Password = 'wifugpjsqtbzxawa';
       $mail->SMTPSecure = 'tls';
       $mail->Port = 587;
       $mail->setFrom($email, 'Fill Enquiry Form Below');
       $mail->addAddress('mafidul.peindia@gmail.com', 'Me');
       $mail->Subject = 'Fill Enquiry Form Below';

       // Enable HTML if needed
       $mail->isHTML(true);
       $bodyParagraphs = ["Name: {$name}", "Description: {$description}", "Departure Date: {$departure_date}", "Number of Days: {$days}", "Email: {$email}", "mobile: {$country}-{$mobile}"];
       $body = join('<br />', $bodyParagraphs);
       $mail->Body = $body;
       echo $body;

       $msg="Thanks message ! Our team will contact with you very soon";

       if($mail->send()){
            header("location:thanks.html"); // Redirect to 'thank you' page. Make sure you have it
            
       } else {

           $errorMessage = 'Oops, something went wrong. Mailer Error: ' . $mail->ErrorInfo;
       }
       
   }
}

?>






