<?php

include "load.php";
require_once __DIR__ . '/vendor/autoload.php';
require "Mailer.class.php";

Session::start();

// Handle both JSON and FormData submissions
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["success" => false, "message" => "Invalid request method"]);
    exit();
}

// Check if data is coming from FormData or JSON
if (!empty($_FILES) || !empty($_POST)) {
    // Determine if it's a career application or a contact form
    $isCareerForm = isset($_FILES["resume"]) && $_FILES["resume"]["error"] === 0;

    $applicantDetails = [
        "fullName" => $_POST["fullName"] ?? null,
        "email" => $_POST["email"] ?? null,
        "subject" => $_POST["subject"] ?? null,
        "phoneNumber" => $_POST["phoneNumber"] ?? null,
        "message" => $_POST["message"] ?? null,
    ];

    // If it's a career form, handle file upload for the resume
    if ($isCareerForm) {
        // Handle file upload for the resume
        $uploadDir = "../uploads/Resumes/";
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Check file size (5MB max size)
        if ($_FILES["resume"]["size"] > 5000000) {
            echo json_encode(["success" => false, "message" => "File is too large"]);
            exit();
        }

        // Check file type (PDF, Word)
        $allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        if (!in_array($_FILES["resume"]["type"], $allowedTypes)) {
            echo json_encode(["success" => false, "message" => "Invalid file type"]);
            exit();
        }

        $resumePath = $uploadDir . basename($_FILES["resume"]["name"]);
        if (!move_uploaded_file($_FILES["resume"]["tmp_name"], $resumePath)) {
            echo json_encode(["success" => false, "message" => "Resume upload failed"]);
            exit();
        }

        $applicantDetails["resume"] = $resumePath;
    }
} else {
    // JSON-based request handling
    $requestData = json_decode(file_get_contents("php://input"), true);
    if (!$requestData || !isset($requestData["applicantData"])) {
        echo json_encode(["success" => false, "message" => "Invalid form data received"]);
        exit();
    }
    $applicantDetails = $requestData["applicantData"];
}

// Validate required fields for both forms (without resume)
foreach (["fullName", "email", "phoneNumber", "message"] as $key) {
    if (empty($applicantDetails[$key])) {
        echo json_encode(["success" => false, "message" => ucfirst($key) . " is required"]);
        exit();
    }
}

// Initialize the Mailer class
$emailService = new Mailer();

// If it's a career form with a resume, send the application email with resume
if ($isCareerForm) {
    $emailResult = $emailService->sendApplicationEmail(
        $applicantDetails["fullName"],
        $applicantDetails["email"],
        $applicantDetails["subject"],
        $applicantDetails["phoneNumber"],
        $applicantDetails["message"],
        $applicantDetails["resume"]
    );
} else {
    // Otherwise, it's a contact form
    $emailResult = $emailService->sendContactEmail(
        $applicantDetails["fullName"],
        $applicantDetails["email"],
        $applicantDetails["subject"],
        $applicantDetails["phoneNumber"],
        $applicantDetails["message"]
    );
}

// Return the result of the email sending
if ($emailResult["success"]) {
    echo json_encode([
        "success" => true,
        "message" => "Your application has been submitted successfully.",
        "email_status" => true
    ]);
} else {
    echo json_encode([
        "success" => false,
        "message" => "There was an issue sending your email. Please try again later.",
        "email_status" => false
    ]);
}

?>