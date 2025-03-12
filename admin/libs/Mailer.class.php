<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';

class Mailer
{
    private $mail;

    public function __construct() {
        $this->mail = new PHPMailer(true);
        $this->configureSMTP();
    }

    private function configureSMTP() {
        try {
            $this->mail->isSMTP();
            $this->mail->Host = "smtp.gmail.com"; // Change to your SMTP server
            $this->mail->SMTPAuth = true;
            $this->mail->Username = "trymywebsites@gmail.com"; // Your email
            $this->mail->Password = "nmhw uxqv vvpl fbvp"; // Your email password
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $this->mail->Port = 587;
        } catch (Exception $e) {
            die(json_encode(["success" => false, "message" => "Mailer configuration failed: " . $e->getMessage()]));
        }
    }

    public function sendApplicationEmail($fullName, $email, $subject, $phoneNumber, $message, $resumeFile) {
        try {
            $this->mail->setFrom('trymywebsites@gmail.com', $subject);
            $this->mail->addAddress("info@trymywebsites.com");
            $this->mail->Subject = "New Job Application from $fullName";

            // Email content
            $emailBody = "<html><body>";
            $emailBody .= "<p><strong>Full Name:</strong> $fullName</p>";
            $emailBody .= "<p><strong>Email:</strong> $email</p>";
            $emailBody .= "<p><strong>Phone:</strong> $phoneNumber</p>";
            $emailBody .= "<p><strong>Message:</strong> $message</p>";

            // Attach resume if available
            if ($resumeFile) {
                $this->mail->addAttachment($resumeFile);
                $emailBody .= "<p><strong>Resume:</strong> Attached</p>";
            }

            $emailBody .= "</body></html>";

            $this->mail->isHTML(true);
            $this->mail->Body = $emailBody;

            if ($this->mail->send()) {
                return ["success" => true];
            } else {
                return ["success" => false, "message" => "Mail sending failed"];
            }
        } catch (Exception $e) {
            return ["success" => false, "message" => "Mailer error: " . $this->mail->ErrorInfo];
        }
    }

    // **NEWLY ADDED FUNCTION** - Send Contact Email
    public function sendContactEmail($fullName, $email, $subject, $phoneNumber, $message) {
        try {
            $this->mail->setFrom('trymywebsites@gmail.com', $subject);
            $this->mail->addAddress("info@trymywebsites.com");
            $this->mail->Subject = "New Contact Form Submission from $fullName";

            // Email content
            $emailBody = "<html><body>";
            $emailBody .= "<p><strong>Full Name:</strong> $fullName</p>";
            $emailBody .= "<p><strong>Email:</strong> $email</p>";
            $emailBody .= "<p><strong>Phone:</strong> $phoneNumber</p>";
            $emailBody .= "<p><strong>Message:</strong> $message</p>";
            $emailBody .= "</body></html>";

            $this->mail->isHTML(true);
            $this->mail->Body = $emailBody;

            if ($this->mail->send()) {
                return ["success" => true];
            } else {
                return ["success" => false, "message" => "Mail sending failed"];
            }
        } catch (Exception $e) {
            return ["success" => false, "message" => "Mailer error: " . $this->mail->ErrorInfo];
        }
    }
}
