
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class SendMail {
    public function sendEmail($details = array(), $conf) {
        if (!empty($details["sendToEmail"]) && !empty($details["sendToName"]) && !empty($details["emailSubjectLine"]) && !empty($details["emailMessage"])) {
            require 'phpmailer-master/src/Exception.php';
            require 'phpmailer-master/src/PHPMailer.php';
            require 'phpmailer-master/src/SMTP.php';

            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'infoscesd@gmail.com'; 
                $mail->Password = 'bkal xnbd dxqa abaz'; 
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;

                // Sender and recipient
                $mail->setFrom($conf["au_email_address"], $conf["site_name"]);
                $mail->addAddress($details["sendToEmail"], $details["sendToName"]);

                // Email content
                $mail->isHTML(true);
                $mail->Subject = $details["emailSubjectLine"];
                $mail->Body = $details["emailMessage"];

                // Send email
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

/*
class SendMail{
	
	public function SendeMail($details=array(), $conf){
		if (!empty($details["sendToEmail"]) && !empty($details["sendToName"]) && !empty($details["emailSubjectLine"]) && !empty($details["emailMessage"])) {
			// Your code to send the email
		
		{
			$headers = array(
				'Authorization: bkal xnbd dxqa abaz',
				'Content-Type: application/json'
			);

			// print_r($details);
			// die('me');
			$data = array(
				"personalizations" => array(
					array(
						"to" => array(
							array(
								"email" => $details["sendToEmail"],
								"name" => $details["sendToName"]
							)
						)
					)
				),
				"from" => array(
					"email" => $conf["au_email_address"],
					"name" => $conf["site_name"]
				),
				"subject" => $details["emailSubjectLine"],
				"content" => array(
					array(
						"type" => "text/html",
						"value" => nl2br($details["emailMessage"])
					)
				)
			);
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$response = curl_exec($ch);
			curl_close($ch);
		{
			//print_r($details);
			die("Error: Some details are missing.");
		}
		}
	}
	}
}
		*/
?>