
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer-master/src/Exception.php';
            require 'phpmailer-master/src/PHPMailer.php';
            require 'phpmailer-master/src/SMTP.php';
			
class SendMail {
    public function sendEmail($details = array(), $conf) {
        if (!empty($details["sendToEmail"]) && !empty($details["sendToName"]) && !empty($details["emailSubjectLine"]) && !empty($details["emailMessage"])) {
            

            $mail = new PHPMailer(true);

            try {
                
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'infoscesd@gmail.com'; 
                $mail->Password = 'bkal xnbd dxqa abaz'; 
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;

        
                $mail->setFrom($conf["au_email_address"], $conf["site_name"]);
                $mail->addAddress($details["sendToEmail"], $details["sendToName"]);

                $mail->isHTML(true);
                $mail->Subject = $details["emailSubjectLine"];
                $mail->Body = $details["emailMessage"];

            
                $mail->send();

                // Check if the email was sent successfully
                echo "<script>alert('Sent Successfully');</script>";
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            die("Error: Some details are missing.");
        }
    }
}

